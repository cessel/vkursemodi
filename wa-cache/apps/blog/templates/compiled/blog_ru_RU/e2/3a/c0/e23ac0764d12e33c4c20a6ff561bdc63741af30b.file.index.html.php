<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 10:34:04
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/index.html" */ ?>
<?php /*%%SmartyHeaderCode:114742019658105c6c0e9139-31180347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e23ac0764d12e33c4c20a6ff561bdc63741af30b' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/index.html',
      1 => 1477303510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114742019658105c6c0e9139-31180347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'canonical' => 0,
    'rss' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_url' => 0,
    'wa_static_url' => 0,
    'wa_active_theme_path' => 0,
    'wa_app' => 0,
    'cart_total' => 0,
    'a' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58105c6c1fa220_85200214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58105c6c1fa220_85200214')) {function content_58105c6c1fa220_85200214($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title>
    <meta name="Keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="Description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="viewport" content="width=device-width, initial-scale=1<?php if ($_smarty_tpl->tpl_vars['wa']->value->isMobile()){?>, maximum-scale=1, user-scalable=0<?php }?>" />

    <?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?>
        <!-- rss -->
        <?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['rss']->value){?><link rel="alternate" type="application/rss+xml" title="RSS &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['rss']->value;?>
"><?php }?>
    <?php }?>
    
    <!-- css -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
clear.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css"/>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['wa']->value->shop->currency()=='RUB'){?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/font/ruble/arial/fontface.css" rel="stylesheet" type="text/css"><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
 
    
    <!-- js -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
clear.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
 
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->head();?>
 
    
    <!--[if lt IE 9]>
    <script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
    document.createElement('figure');
    document.createElement('hgroup');
    document.createElement('menu');
    </script>
    <![endif]-->
        
</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['wa_app']->value;?>
">
    <div id="header">
        <div class="container" role="navigation">
        
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                <!-- display shopping cart info in case Shop-Script is installed -->
                <?php $_smarty_tpl->tpl_vars['cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?>
                 <div id="cart" class="float-right<?php if (!$_smarty_tpl->tpl_vars['cart_total']->value){?> empty<?php }?>">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
">
                         <i class="icon16 cart"></i>
                         Корзина:
                         <strong class="cart-total"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</strong>
                     </a>
                 </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>
                <!-- auth & sign up links -->
                <div class="float-right nowrap auth">
                    <ul class="menu-h">
                         <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                            <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/my');?>
">Личный кабинет</a></li>
                            <?php }else{ ?>
                                    <li><strong><?php echo $_smarty_tpl->tpl_vars['wa']->value->user('name');?>
</strong></li>
                                <?php }?>
                             <li><a href="?logout">Выйти</a></li>
                        <?php }else{ ?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вход</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Регистрация</a></li>
                        <?php }?>
                    </ul>
                </div>
            <?php }?>
            
            <!-- search form (app dependent) -->
            <div class="search">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/searchform.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>    
                                        
            <!-- main website sections -->
            <ul class="menu-h">
                <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->apps(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                    <li<?php if ($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_app_url']->value){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</a></li>
                <?php } ?>
            </ul>
            
            <div class="clear-both"></div>
            
        </div>
    </div>
    
    <div id="main">
        <div class="container">
            <!-- TITLE -->
            <h2 class="title">
                <span></span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a>
                <span></span>
            </h2>
              <!-- INTERNAL APP NAVIGATION & CONTENT -->
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="clear-both"></div>
        </div>
    </div>
    
    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="hr"></div>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!--
               <div id="sub-links" class="float-left">
                <ul>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                </ul>
              </div>
            -->
        </div>
    </div>
</body>
</html><?php }} ?>