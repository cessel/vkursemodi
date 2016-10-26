<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 15:19:45
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/actions/backend/BackendFile.html" */ ?>
<?php /*%%SmartyHeaderCode:165756696358109f61352bc4-09848866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '362c567f4f3811113264c643b50229bba2b2f34b' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/actions/backend/BackendFile.html',
      1 => 1441468551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165756696358109f61352bc4-09848866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58109f6144f247_54085077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58109f6144f247_54085077')) {function content_58109f6144f247_54085077($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_pagination')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty-plugins/function.wa_pagination.php';
?><?php if ($_smarty_tpl->tpl_vars['file']->value['error']){?>

    <script type="text/javascript">
    $('<div class="message"><?php echo $_smarty_tpl->tpl_vars['file']->value['error'];?>
</div>').waDialog({
        'buttons': '<input type="button" value="' + $.loc['OK'] + '" class="cancel button blue">',
        'width': '500px',
        'height': '100px',
        onCancel: function (dialog) {
            location.href = '<?php echo $_smarty_tpl->tpl_vars['file']->value['return_url'];?>
';
        }
    });
    </script>

<?php }else{ ?>

    <div class="file-data">
        <div class="pagination" title="Выберите страницу"><?php echo smarty_function_wa_pagination(array('page'=>$_smarty_tpl->tpl_vars['wa']->value->get('page',$_smarty_tpl->tpl_vars['file']->value['page_count']),'total'=>$_smarty_tpl->tpl_vars['file']->value['page_count'],'attrs'=>array('class'=>"menu-h")),$_smarty_tpl);?>
</div>
        <div class="get-more previous <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('page',$_smarty_tpl->tpl_vars['file']->value['page_count'])==1){?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('page',$_smarty_tpl->tpl_vars['file']->value['page_count'])>1){?>title="Предыдущее содержимое"<?php }?>><span class="arrow"></span></div>
        <pre class="prettyprint file-contents"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['contents'], ENT_QUOTES, 'UTF-8', true);?>
</pre>
        <div class="get-more next" title="Далее"><span class="arrow"></span></div>
    </div>
    <form class="get-more-form">
        <input type="hidden" name="path" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
">
        <input type="hidden" name="first_line" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['first_line'];?>
">
        <input type="hidden" name="last_line" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['last_line'];?>
">
        <input type="hidden" name="direction" value="">
    </form>

<?php }?><?php }} ?>