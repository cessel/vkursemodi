<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 10:34:04
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/head.html" */ ?>
<?php /*%%SmartyHeaderCode:85338860858105c6c245ee6-85560339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d87f39058703a2f5eb56c867de065b3117e1aa' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/head.html',
      1 => 1477303581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85338860858105c6c245ee6-85560339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'links' => 0,
    'role' => 0,
    'link' => 0,
    'frontend_action' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58105c6c26c602_07834796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58105c6c26c602_07834796')) {function content_58105c6c26c602_07834796($_smarty_tpl) {?><!-- blog css -->
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
clear.blog.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css">

<!-- blog js -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
clear.blog.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>

<!-- next & prev links -->
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['role']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
<link rel="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
">
<?php } ?>


<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['head'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['head'];?>
<?php }?>
<?php } ?>
<?php }} ?>