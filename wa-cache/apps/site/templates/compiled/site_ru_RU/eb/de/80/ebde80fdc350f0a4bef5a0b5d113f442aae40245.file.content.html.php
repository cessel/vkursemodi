<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 20:53:41
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/content.html" */ ?>
<?php /*%%SmartyHeaderCode:557567772580f9c25837078-15303760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebde80fdc350f0a4bef5a0b5d113f442aae40245' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/content.html',
      1 => 1477303510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557567772580f9c25837078-15303760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'page' => 0,
    'wa_app_url' => 0,
    'error_code' => 0,
    'wa_backend_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580f9c2586d348_29445220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f9c2586d348_29445220')) {function content_580f9c2586d348_29445220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty-plugins/function.wa_print_tree.php';
?><div class="app-navigation" role="navigation">
	<?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['wa']->value->site->pages(),'class'=>"menu-h dropdown",'attrs'=>'id="page-list"','elem'=>'<a href=":url">:name</a>','collapsible_class'=>'collapsible','selected'=>(($tmp = @$_smarty_tpl->tpl_vars['page']->value['id'])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

</div>
<div class="content">

    <?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value&&!empty($_smarty_tpl->tpl_vars['error_code']->value)&&$_smarty_tpl->tpl_vars['error_code']->value==404){?>
    
        <div class="welcome">
            <h1>Добро пожаловать на ваш новый сайт!</h1>
            <p><?php echo sprintf('Начните с <a href="%s">создания страницы</a> в бекенде сайта.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/pages/'));?>
</p>
        </div>
        
    <?php }else{ ?>
    
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        
    <?php }?>

</div><?php }} ?>