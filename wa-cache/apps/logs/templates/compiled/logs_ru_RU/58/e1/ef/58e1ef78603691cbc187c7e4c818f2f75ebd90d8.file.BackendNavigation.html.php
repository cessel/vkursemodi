<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 15:19:34
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/actions/backend/BackendNavigation.html" */ ?>
<?php /*%%SmartyHeaderCode:5476121658109f56d74383-42747168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58e1ef78603691cbc187c7e4c818f2f75ebd90d8' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/logs/templates/actions/backend/BackendNavigation.html',
      1 => 1475506845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5476121658109f56d74383-42747168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'rights' => 0,
    'admin' => 0,
    'file' => 0,
    'total_size' => 0,
    'total_size_class' => 0,
    'phpinfo_available' => 0,
    'view_modes' => 0,
    'view_mode' => 0,
    'wa_backend_url' => 0,
    'breadcrumbs' => 0,
    'back' => 0,
    'back_url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58109f5703c1f8_23990399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58109f5703c1f8_23990399')) {function content_58109f5703c1f8_23990399($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('action')=='file'){?>
    <div class="file_menu">
        <?php if (ifset($_smarty_tpl->tpl_vars['rights']->value['change_settings'],$_smarty_tpl->tpl_vars['admin']->value)){?>
            <i class="icon16 settings" title="Настройки"></i>
        <?php }?>
        <?php if (ifset($_smarty_tpl->tpl_vars['rights']->value['view_phpinfo'],$_smarty_tpl->tpl_vars['admin']->value)){?>
            <a href="?action=phpinfo" title="Конфигурация PHP" target="_blank"><i class="icon16 script-php"></i></a>
        <?php }?>
        <a href="?action=download&amp;path=<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
" title="Скачать"><i class="icon16 download"></i></a>
        <?php if (ifset($_smarty_tpl->tpl_vars['rights']->value['delete_files'],$_smarty_tpl->tpl_vars['admin']->value)){?>
            <span class="delete" title="Удалить">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
" class="path-value">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['return_url'];?>
" class="return-url-value">
                <i class="icon16 cross-bw"></i>
            </span>
        <?php }?>
    </div>
<?php }else{ ?>
    <?php if (isset($_smarty_tpl->tpl_vars['total_size']->value)&&$_smarty_tpl->tpl_vars['total_size']->value){?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['total_size_class']->value;?>
" title="Общий размер логов">
            <?php echo $_smarty_tpl->tpl_vars['total_size']->value;?>

        </div>
    <?php }?>

    <div class="settings-block">
        <i class="icon16 update" title="Обновить список файлов"></i>
        <?php if (ifset($_smarty_tpl->tpl_vars['rights']->value['change_settings'],$_smarty_tpl->tpl_vars['admin']->value)){?>
            <i class="icon16 settings" title="Настройки"></i>
        <?php }?>
        <?php if (ifset($_smarty_tpl->tpl_vars['rights']->value['view_phpinfo'],$_smarty_tpl->tpl_vars['admin']->value)){?>
            <a href="?action=phpinfo" title="Конфигурация PHP" target="_blank"<?php if (!$_smarty_tpl->tpl_vars['phpinfo_available']->value){?> class="phpinfo-disabled-link"<?php }?>><i class="icon16 script-php"></i></a>
        <?php }?>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['view_modes']->value)){?>
        <ul class="dropdown">
            <?php  $_smarty_tpl->tpl_vars['view_mode'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['view_mode']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_modes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['view_mode']->key => $_smarty_tpl->tpl_vars['view_mode']->value){
$_smarty_tpl->tpl_vars['view_mode']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['view_mode']->value['selected']){?>
                    <li class="selected">
                        <i class="icon16logs <?php echo $_smarty_tpl->tpl_vars['view_mode']->value['icon'];?>
"></i><a><?php echo $_smarty_tpl->tpl_vars['view_mode']->value['title'];?>
</a><i class="icon10 yes"></i>
                    </li>
                <?php }else{ ?>
                    <li>
                        <i class="icon16logs <?php echo $_smarty_tpl->tpl_vars['view_mode']->value['icon'];?>
"></i><a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['view_mode']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['view_mode']->value['title'];?>
</a><i class="icon10 yes"></i>
                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    <?php }?>
<?php }?>

<?php if (ifset($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
    <div class="breadcrumbs<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('action')=='file'){?> file<?php }?>">
        <?php if (ifset($_smarty_tpl->tpl_vars['back']->value)){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
" class="back-link" title="назад">&larr;</a>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
            <span class="item">
               <?php if (!$_smarty_tpl->tpl_vars['item']->last){?>
                   <a href="<?php if ($_smarty_tpl->tpl_vars['item']->first){?><?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
logs/<?php }else{ ?>?path=<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
               <?php }else{ ?>
                   <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

               <?php }?>
            </span>
            <?php if (!$_smarty_tpl->tpl_vars['item']->last){?><span class="separator">/</span><?php }?>
        <?php } ?>
    </div>
<?php }?><?php }} ?>