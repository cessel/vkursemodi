<?php

class logsHelper
{
    const LINES_PER_PAGE = 30; //to fit into 800*600 screen with cookies disabled in browser

    public static function getDirectory($dir_path = '')
    {
        $root_log_dir = self::getRootLogsDirPath();
        $log_dir = $dir_path ? $root_log_dir.DIRECTORY_SEPARATOR.self::normalizePath($dir_path, true) : $root_log_dir;
        self::checkPath($log_dir);

        $dir_contents = self::listDir($log_dir);
        sort($dir_contents);

        $subdirs = array();
        $files = array();

        foreach ($dir_contents as $item) {
            $path = $log_dir.DIRECTORY_SEPARATOR.$item;
            $url = $dir_path ? $dir_path.'/'.$item : $item;
            if (is_dir($path)) {
                $subdirs[] = array(
                    'name'    => $item,
                    'path'    => $url,
                    'is_file' => false,
                );
            } else {
                $files[] = array(
                    'name'    => $item,
                    'path'    => $url,
                    'is_file' => true,
                    'data'    => array(
                        'updatetime' => waDateTime::format('humandatetime', filemtime($path)),
                        'size'       => self::formatSize(filesize($path)),
                    )
                );
            }
        }

        return array_merge($subdirs, $files);
    }

    public static function getFilesBySize()
    {
        $root_log_dir = self::getRootLogsDirPath();
        $files = self::listDir($root_log_dir, true);

        $paths = array();
        foreach ($files as $file) {
            $size = filesize($root_log_dir.DIRECTORY_SEPARATOR.$file);
            $paths[] = array(
                'is_file' => true,
                'file'    => basename($file),
                'folder'  => strpos($file, '/') === false ? '' : dirname($file).'/',
                'path'    => self::normalizePath($file),
                'size'    => $size,
                'data'    => self::formatSize($size),
            );
        }

        usort($paths, create_function(
            '$a, $b',
            'if ($a["size"] != $b["size"]) {
                return $a["size"] < $b["size"] ? 1 : -1;
            } else {
                return strcmp($a["path"], $b["path"]);
            }'
        ));

        return $paths;
    }

    public static function getFilesByUpdatetime()
    {
        $root_log_dir = self::getRootLogsDirPath();
        $files = self::listDir($root_log_dir, true);

        $paths = array();
        foreach ($files as $file) {
            $update_time = filemtime($root_log_dir.DIRECTORY_SEPARATOR.$file);
            $paths[] = array(
                'is_file'     => true,
                'file'        => basename($file),
                'folder'      => strpos($file, '/') === false ? '' : dirname($file).'/',
                'path'        => self::normalizePath($file),
                'update_time' => $update_time,
                'data'        => waDateTime::format('humandatetime', $update_time),
            );
        }

        usort($paths, create_function(
            '$a, $b',
            'if ($a["update_time"] != $b["update_time"]) {
                return $a["update_time"] < $b["update_time"] ? 1 : -1;
            } else {
                return strcmp($a["path"], $b["path"]);
            }'
        ));

        return $paths;
    }

    public static function getFile($params)
    {
        $mode = isset($params['direction']) ? 'line' : 'page';
        $check = ifset($params['check'], true);
        $path = self::getRootLogsDirPath().DIRECTORY_SEPARATOR.self::normalizePath($params['path'], true);
        $lines_per_page = waRequest::cookie('lines_per_page', self::LINES_PER_PAGE, waRequest::TYPE_INT);
        $error = '';

        if ($check) {
            self::checkPath($path);
        } elseif (!self::checkPath($path, false)) {
            $error = _w('File cannot be accessed.');
        }

        if (!strlen($error)) {
            $first_line = null;
            $last_line = null;
            $contents = '';
            if ($file = @fopen($path, 'r')) {
                if ($mode == 'page') {
                    $line_count = 0;
                    $current_page = 1;
                    while (!feof($file)) {
                        $current_line = $line_count;
                        $line = fgets($file, 4096);
                        $current_page_updated = floor($line_count++ / $lines_per_page) + 1;
                        if (isset($params['page'])) {
                            if ($current_page_updated == $params['page']) { //continue reading specified page
                                $contents .= $line;
                                if ($first_line === null) {
                                    $first_line = $current_line;
                                }
                                $last_line = $current_line;
                            }
                        } else {
                            if ($current_page == $current_page_updated) { //continue reading current page
                                $contents .= $line;
                                if ($first_line === null) { //if first file page
                                    $first_line = $current_line;
                                }
                                $last_line = $current_line;
                            } else { //start reading next (2+) page
                                $contents = $line;
                                $first_line = $current_line;
                            }
                        }
                        $current_page = $current_page_updated;
                    }
                } else { // 'line' mode
                    if ($params['direction'] == 'previous') {
                        $first_line = $params['first_line'] - $lines_per_page;
                        $last_line = $params['first_line'] - 1;
                    } else {
                        $first_line = $params['last_line'] + 1;
                        $last_line = $params['last_line'] + $lines_per_page;
                    }
                    $line_count = -1;
                    while (!feof($file)) {
                        $line_count++;
                        $line = fgets($file, 4096);
                        if ($line_count >= $first_line && $line_count <= $last_line) {
                            $contents .= $line;
                        } elseif ($line_count > $last_line) {
                            break;
                        }
                    }
                    $last_line = $line_count;
                }
                fclose($file);
            } else {
                $error = _w('File cannot be accessed.');
            }
        }

        $logs_backend_url = self::getLogsBackendUrl(false);
        $back_url = waRequest::cookie('back_url', $logs_backend_url);

        return array(
            'contents'   => ifset($contents),
            'page_count' => $mode == 'page' ? ceil($line_count / $lines_per_page) : null,
            'path'       => $params['path'],
            'return_url' => strpos($back_url, $logs_backend_url) === false ? $logs_backend_url : $back_url,
            'error'      => ifset($error, ''),
            'first_line' => ifset($first_line),
            'last_line'  => ifset($last_line),
        );
    }

    public static function getLogsBackendUrl($absolute = true)
    {
        return wa()->getRootUrl($absolute).wa()->getConfig()->getBackendUrl().'/logs/';
    }

    public static function getBreadcrumbs($path)
    {
        $path_parts = explode('/', $path);

        if (!$path_parts[0]) {
            return false;
        }

        $result = array();
        $result[] = array(
            'name' => 'wa-log',
            'path' => '',
        );

        $item_path = '';
        foreach ($path_parts as $part) {
            $item_path .= $item_path ? '/'.$part : $part;
            $result[] = array(
                'name' => $part,
                'path' => $item_path,
            );
        }
        return $result;
    }

    public static function checkPath($path, $redirect = true)
    {
        $success = true;

        if (!file_exists($path)) {
            $success = false;
        }

        if ($success && strpos(realpath($path), self::getRootLogsDirPath()) !== 0) {
            $success = false;
        }

        if ($success && basename($path) == '.htaccess') {
            $success = false;
        }

        if ($redirect) {
            if (!$success) {
                wa()->getResponse()->redirect(wa()->getAppUrl());
            }
        } else {
            return $success;
        }
    }

    public static function getTotalLogsSize()
    {
        $files = self::listDir(self::getRootLogsDirPath(), true);
        $root_log_dir = self::getRootLogsDirPath();
        $result = 0;
        foreach ($files as $file) {
            $result += filesize($root_log_dir.DIRECTORY_SEPARATOR.$file);
        }
        return $result;
    }

    public static function getAbsolutePath($path)
    {
        return self::getRootLogsDirPath().DIRECTORY_SEPARATOR.self::normalizePath($path, true);
    }

    public static function formatSize($size)
    {
        return waFiles::formatSize($size, '%0.2f', _w('B,KB,MB,GB'));
    }

    public static function isLargeSize($value)
    {
        return $value > 1073741824;    //large is 1GB or more
    }

    public static function inCloud()
    {
        return wa()->appExists('hosting') && wa()->getConfig()->getAppConfig('hosting')->getInfo('vendor') == 'webasyst';
    }

    private static function listDir($dir, $recursive = false)
    {
        $result = waFiles::listdir($dir, $recursive);
        $result = array_filter($result, create_function(
            '$item',
            'return basename($item) != ".htaccess";'
        ));
        return $result;
    }

    private static function getRootLogsDirPath()
    {
        return wa()->getConfig()->getPath('log');
    }

    private static function normalizePath($path, $reverse = false)
    {
        if (DIRECTORY_SEPARATOR != '/') {
            if ($reverse) {
                return str_replace('/', DIRECTORY_SEPARATOR, $path);
            } else {
                return str_replace(DIRECTORY_SEPARATOR, '/', $path);
            }
        } else {
            return $path;
        }
    }
}
