<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 20:55:36
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/photos/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1913184169580f9c98d6d109-11694512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd578fae8acbbeb0244eb8baf4eb8d6cfb53ae687' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/photos/templates/actions/backend/BackendLoc.html',
      1 => 1341921912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1913184169580f9c98d6d109-11694512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580f9c98d7b4d5_36930575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f9c98d7b4d5_36930575')) {function content_580f9c98d7b4d5_36930575($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>