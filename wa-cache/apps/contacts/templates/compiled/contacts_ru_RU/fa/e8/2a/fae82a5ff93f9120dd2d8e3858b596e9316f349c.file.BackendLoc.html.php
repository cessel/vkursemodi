<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 18:53:44
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/contacts/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:960187184580f8008b61e21-26867442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae82a5ff93f9120dd2d8e3858b596e9316f349c' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/contacts/templates/actions/backend/BackendLoc.html',
      1 => 1409656720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '960187184580f8008b61e21-26867442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580f8008b6ee75_39070887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f8008b6ee75_39070887')) {function content_580f8008b6ee75_39070887($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>