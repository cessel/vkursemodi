<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 10:34:04
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/content.html" */ ?>
<?php /*%%SmartyHeaderCode:171561107458105c6c2e1700-22150719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a49d1e6b56719fec036c815ce9da3a9098b6f3ee' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/content.html',
      1 => 1477303581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171561107458105c6c2e1700-22150719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_action' => 0,
    'output' => 0,
    'wa_active_theme_path' => 0,
    'posts' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'wa_backend_url' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58105c6c3201a6_78400136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58105c6c3201a6_78400136')) {function content_58105c6c3201a6_78400136($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
	<?php if (!empty($_smarty_tpl->tpl_vars['output']->value['nav_before'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['nav_before'];?>
<?php }?>
<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="content">

    <?php if (empty($_smarty_tpl->tpl_vars['posts']->value)&&$_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value){?>

        <div class="welcome">
            <h1>Добро пожаловать в ваш новый блог!</h1>
            <p><?php echo sprintf('Начните с <a href="%s">создания записи</a> в бекенде блога.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('blog/'));?>
</p>
        </div>
    
    <?php }else{ ?>

        <!-- internal navigation breadcrumbs -->
        <?php if (isset($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
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
        
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        
    <?php }?>
    
</div><?php }} ?>