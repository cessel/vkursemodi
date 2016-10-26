<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 15:19:34
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/actions/backend/BackendFiles.html" */ ?>
<?php /*%%SmartyHeaderCode:92997566858109f56bc7dd6-77345929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb3592ba565dae7ce6df9027f6673027f33e649' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/actions/backend/BackendFiles.html',
      1 => 1382445418,
      2 => 'file',
    ),
    '5174e991c2304fb6b44c1cf67739a4951e3e16d6' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/includes/fileList.html',
      1 => 1456409664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92997566858109f56bc7dd6-77345929',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58109f56d61452_53134812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58109f56d61452_53134812')) {function content_58109f56d61452_53134812($_smarty_tpl) {?><?php /*  Call merged included template "../../includes/fileList.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('../../includes/fileList.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('mode'=>'files'), 0, '92997566858109f56bc7dd6-77345929');
content_58109f56c04434_55482193($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/fileList.html" */?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 15:19:34
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/includes/fileList.html" */ ?>
<?php if ($_valid && !is_callable('content_58109f56c04434_55482193')) {function content_58109f56c04434_55482193($_smarty_tpl) {?><div class="file-list-contents">
    <ul class="zebra item-list <?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['item']->value['is_file']){?>script<?php }else{ ?>folder<?php }?>"></i>
            <a href="?<?php if ($_smarty_tpl->tpl_vars['item']->value['is_file']){?>action=file&amp;<?php }?>path=<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" <?php if (!$_smarty_tpl->tpl_vars['item']->value['is_file']){?>class="folder"<?php }?>><?php if ($_smarty_tpl->tpl_vars['mode']->value=='directory'){?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=='files'){?><span class="folder"><?php echo $_smarty_tpl->tpl_vars['item']->value['folder'];?>
</span><span class="file"><?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
<?php }?></a>
            <span class="actions">
             <?php if ($_smarty_tpl->tpl_vars['item']->value['is_file']){?><a href="?action=download&amp;path=<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" title="Скачать"><i class="icon16 download"></i></a><?php }?>
             <?php if ($_smarty_tpl->tpl_vars['item']->value['is_file']&&ifset($_smarty_tpl->tpl_vars['rights']->value['delete_files'],$_smarty_tpl->tpl_vars['admin']->value)){?><span class="delete" title="Удалить"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" class="path-value"><i class="icon16 cross-bw"></i></span><?php }?>
            </span>
            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['data'])){?>
                <span class="item-data">
                <?php if (is_array($_smarty_tpl->tpl_vars['item']->value['data'])){?>
                    <?php  $_smarty_tpl->tpl_vars['data_block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_block']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_block']->key => $_smarty_tpl->tpl_vars['data_block']->value){
$_smarty_tpl->tpl_vars['data_block']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['data_block']->key;
?>
                        <span class="data-block <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data_block']->value;?>
</span>
                    <?php } ?>
                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>

                <?php }?>
                </span>
            <?php }?>
        </li>
        <?php } ?>
    </ul>
    <h3 class="no-logs-message <?php if ($_smarty_tpl->tpl_vars['items']->value){?>hidden<?php }?>">Логов нет.</h3>
</div><?php }} ?>