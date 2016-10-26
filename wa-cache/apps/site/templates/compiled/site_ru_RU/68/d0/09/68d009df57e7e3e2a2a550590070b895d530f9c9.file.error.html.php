<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 14:09:07
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/error.html" */ ?>
<?php /*%%SmartyHeaderCode:124694977758108ed30f4b32-20430468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68d009df57e7e3e2a2a550590070b895d530f9c9' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/error.html',
      1 => 1477303510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124694977758108ed30f4b32-20430468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58108ed317b004_98202681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58108ed317b004_98202681')) {function content_58108ed317b004_98202681($_smarty_tpl) {?><div class="content">
  <div id="page" role="main">
    <h1>
    	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
    	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
    </h1>
    Запрашиваемый ресурс недоступен.
  </div>
</div>
<?php }} ?>