<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 10:34:04
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:83494454758105c6c423893-31713132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e90041ba7fad2257658f8eaeec6c72b6ca2ddf7' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/footer.html',
      1 => 1477303581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83494454758105c6c423893-31713132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58105c6c43a666_18338527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58105c6c43a666_18338527')) {function content_58105c6c43a666_18338527($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><!-- see index.html for base footer layout -->

<div id="poweredby" class="float-right gray">
    <a href="http://www.webasyst.ru/store/app/blog/">Движок блога</a> — Webasyst <span class="dots" title="Webasyst"></span>
</div>
<div id="copyright" class="float-left">
    &copy; <?php echo smarty_modifier_wa_datetime(time(),"Y");?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a>
</div><?php }} ?>