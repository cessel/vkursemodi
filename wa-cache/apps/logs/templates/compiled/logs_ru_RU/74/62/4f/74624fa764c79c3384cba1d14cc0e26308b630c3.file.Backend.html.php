<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 15:19:35
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/layouts/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:155221016558109f57045ac3-81198676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74624fa764c79c3384cba1d14cc0e26308b630c3' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/layouts/Backend.html',
      1 => 1456474681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155221016558109f57045ac3-81198676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
    'content' => 0,
    'ajax' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'loc' => 0,
    'key' => 0,
    'value' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58109f57172e19_06935798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58109f57172e19_06935798')) {function content_58109f57172e19_06935798($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array("app", null, null); ob_start(); ?>
    <div id="wa-app">
        <?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

        <div class="content">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['ajax']->value){?>
    <?php echo Smarty::$_smarty_vars['capture']['app'];?>

<?php }else{ ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array()); $_block_repeat=true; echo smarty_block_wa_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js
                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js
                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js
                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js
                <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/prettify/prettify.js
                <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/logs.js
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

            <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/prettify/prettify.css" type="text/css" rel="stylesheet">
            <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/logs.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/css" rel="stylesheet">
            
            <script type="text/javascript">
              $.loc = {};
              <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['loc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
              $.loc['<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'] = '<?php echo strtr($_smarty_tpl->tpl_vars['value']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
              <?php } ?>
            </script>
        </head>
        <body>
            <div id="wa" class="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

                <?php echo Smarty::$_smarty_vars['capture']['app'];?>

            </div>
        </body>
    </html>
<?php }?><?php }} ?>