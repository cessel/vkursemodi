<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 18:53:45
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1733860040580f8009a033f7-08925884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '179f7cdb2c7480b5590deef961c1afec44ab2ee0' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1336140648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1733860040580f8009a033f7-08925884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580f8009a0eff8_13472552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f8009a0eff8_13472552')) {function content_580f8009a0eff8_13472552($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>