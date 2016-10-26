<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 12:09:44
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/calendar/templates/actions/backend/BackendDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:901104561580fa81c88a208-33201854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31a9f1766b64f534ef026242875d340dc4a77073' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/calendar/templates/actions/backend/BackendDefault.html',
      1 => 1477472936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901104561580fa81c88a208-33201854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580fa81c8be359_00253731',
  'variables' => 
  array (
    'wa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580fa81c8be359_00253731')) {function content_580fa81c8be359_00253731($_smarty_tpl) {?> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 - <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
  <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

  <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>

  <script src=" https://yastatic.net/jquery/3.1.0/jquery.min.js"  type="text/javascript"></script>
</head>
<body>
  <div id="wa">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

    <div id="wa-app">
      
	  <div class="block">Hello world!</div>
    </div>
  </div>
</body>
</html><?php }} ?>