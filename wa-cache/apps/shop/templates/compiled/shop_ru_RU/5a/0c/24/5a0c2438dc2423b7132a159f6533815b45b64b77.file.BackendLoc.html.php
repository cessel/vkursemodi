<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 20:55:24
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1415877406580f9c8ce4ce73-11975749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a0c2438dc2423b7132a159f6533815b45b64b77' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1360765463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1415877406580f9c8ce4ce73-11975749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580f9c8ce58531_20158541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f9c8ce58531_20158541')) {function content_580f9c8ce58531_20158541($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>