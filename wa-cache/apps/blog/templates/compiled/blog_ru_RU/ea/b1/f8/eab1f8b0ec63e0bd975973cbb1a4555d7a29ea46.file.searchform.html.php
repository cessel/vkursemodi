<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 10:34:04
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/searchform.html" */ ?>
<?php /*%%SmartyHeaderCode:149203456058105c6c2a83a4-89233284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab1f8b0ec63e0bd975973cbb1a4555d7a29ea46' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/searchform.html',
      1 => 1477303581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149203456058105c6c2a83a4-89233284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'rss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58105c6c2c3334_53384483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58105c6c2c3334_53384483')) {function content_58105c6c2c3334_53384483($_smarty_tpl) {?><!-- subscription links -->
<?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['rss']->value){?>
	<div class="subscribe">
		<a href="<?php echo $_smarty_tpl->tpl_vars['rss']->value;?>
" title="Подписаться" class="bold"><i class="icon16 rss"></i>RSS</a>
		
	</div>
<?php }?>

<!-- add post search form html code here --><?php }} ?>