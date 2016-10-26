<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 20:53:41
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/page.html" */ ?>
<?php /*%%SmartyHeaderCode:132065734580f9c255661a8-08058524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4dad8ed3037ecc56523976489b70ce4ccd97e0' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/page.html',
      1 => 1477303510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132065734580f9c255661a8-08058524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580f9c255ab242_33179585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f9c255ab242_33179585')) {function content_580f9c255ab242_33179585($_smarty_tpl) {?><div class="page" role="main">
    <!-- navigation breadcrumbs -->
    <?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
        <div class="breadcrumbs">
            <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&rarr;</span>
            <?php } ?>
        </div>
    <?php }?>
    <h1><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</h1>
    <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

</div><?php }} ?>