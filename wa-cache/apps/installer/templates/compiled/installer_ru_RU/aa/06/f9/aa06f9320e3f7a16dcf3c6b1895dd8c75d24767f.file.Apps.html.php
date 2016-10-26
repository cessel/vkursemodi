<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 20:56:03
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/installer/templates/actions/apps/Apps.html" */ ?>
<?php /*%%SmartyHeaderCode:658983420580f9cb387ce07-62448445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa06f9320e3f7a16dcf3c6b1895dd8c75d24767f' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-apps/installer/templates/actions/apps/Apps.html',
      1 => 1440517743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '658983420580f9cb387ce07-62448445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
    'vendor_name' => 0,
    'apps' => 0,
    'app' => 0,
    '_overdue' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580f9cb3987d49_19095511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f9cb3987d49_19095511')) {function content_580f9cb3987d49_19095511($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?>
<div class="block" id="list-apps">

    <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
            <div class="block double-padded i-message-<?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?><i class="icon16 yes"></i>
                <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
                <i class="icon16 no"></i>
                <?php }?>
                <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true));?>

            </div>
        <?php } ?>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?><h1><?php echo htmlspecialchars(sprintf('Приложения %s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</h1><br><?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value)){?>
        <ul class="thumbs">

            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
                <li>
                    <div class="profile image96px">
                        <div class="image">
                            <a href="#/apps/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/">
                                <div class="i-image-wrapper">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['icons'][96];?>
" alt="<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['app']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['publish_datetime'])&&strtotime($_smarty_tpl->tpl_vars['app']->value['publish_datetime'])>time()-86400*14){?>
                                        <!-- NEW -->
                                        <div class="i-badge new"><span>New</span></div>
                                    <?php }elseif(!empty($_smarty_tpl->tpl_vars['app']->value['tags'])){?>
                                        <?php if (in_array('featured',$_smarty_tpl->tpl_vars['app']->value['tags'])){?> 
                                            <!-- FEATURED -->
                                            <div class="i-badge featured"><i class="thumb-up"></i></div>
                                        <?php }elseif(in_array('updated',$_smarty_tpl->tpl_vars['app']->value['tags'])){?> 
                                            <!-- UPDATED -->
                                            <div class="i-badge updated two-lines"><span>Новая версия</span></div>
                                        <?php }?>
                                    <?php }?>
                                </div>
                            </a>
                        </div>
                        <div class="details">
                            <h5><a href="#/apps/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/" data-href="#/apps%s/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/" class="js-item-link"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['app']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
                            <?php if ($_smarty_tpl->tpl_vars['app']->value['description']){?><p><?php echo $_smarty_tpl->tpl_vars['app']->value['description'];?>
</p><?php }?>
                            <?php if (empty($_smarty_tpl->tpl_vars['app']->value['installed'])){?>
                            
                                
                            
                                <?php if (empty($_smarty_tpl->tpl_vars['app']->value['price'])){?>
                                    <strong>Бесплатно</strong>
                                <?php }else{ ?>
                                    <?php if (ifempty($_smarty_tpl->tpl_vars['app']->value['lease_price'])=='free'){?>
                                        
                                        <strong>Бесплатно</strong>
                                    <?php }else{ ?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['compare_price'])){?><strike class="bold gray"><?php echo $_smarty_tpl->tpl_vars['app']->value['compare_price'];?>
</strike>&nbsp; <?php }?>
                                        <strong<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['compare_price'])){?> class="highlighted"<?php }?>><?php echo $_smarty_tpl->tpl_vars['app']->value['price'];?>
</strong>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['lease_price'])){?>
                                            или <strong><?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['app']->value['lease_price']);?>
</strong>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                                
                            <?php }else{ ?>
                            
                                
                            
                                <?php if ($_smarty_tpl->tpl_vars['app']->value['commercial']){?>
                                    
                                    <?php if (empty($_smarty_tpl->tpl_vars['app']->value['purchased'])){?>
                                        
                                        <em class="i-installed-label not-licensed<?php if (installerHelper::overdue()){?> overdue<?php }?>"><i class="icon10 <?php if (installerHelper::overdue()){?>no<?php }else{ ?>no-bw<?php }?>"></i> Нет лицензии</em>
                                    <?php }else{ ?>
                                        
                                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['license_expire'])){?>
                                            <?php if ((strtotime($_smarty_tpl->tpl_vars['app']->value['license_expire'])<time())){?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(0, null, 0);?><?php }?>
                                            <em class="i-installed-label<?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?> overdue<?php }?>"><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?>no<?php }else{ ?>yes<?php }?>"></i> <?php echo sprintf('Арендовано до %s',smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['app']->value['license_expire'],'humandate'));?>
</em>
                                        <?php }else{ ?>
                                            <em class="i-installed-label licensed"><i class="icon10 yes"></i> Лицензия</em>
                                        <?php }?>
                                    <?php }?>
                                <?php }else{ ?>
                                    
                                    <em class="i-installed-label"><i class="icon10 yes"></i> Установлено</em> 
                                <?php }?>
                                
                            <?php }?>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>
    <?php }?>

</div>
<script type="text/javascript">
<!--
$.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Приложения").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
//-->
</script>
<?php }} ?>