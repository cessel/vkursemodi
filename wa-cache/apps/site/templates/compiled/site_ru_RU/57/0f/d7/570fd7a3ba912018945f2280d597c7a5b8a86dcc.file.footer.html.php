<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 20:53:41
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:3851581580f9c25876507-76160713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570fd7a3ba912018945f2280d597c7a5b8a86dcc' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/site/themes/clear1/footer.html',
      1 => 1477304286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3851581580f9c25876507-76160713',
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
  'unifunc' => 'content_580f9c258885f3_87824573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f9c258885f3_87824573')) {function content_580f9c258885f3_87824573($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><!-- see index.html for base (wrap) footer layout -->



<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40415655 = new Ya.Metrika({
                    id:40415655,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40415655" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->




<div id="poweredby" class="float-right gray">
    <a href='http://cessel.ru'>Создание сайта</a> - Cessel's WEBGate Studio. Сайт на базе <a href="http://www.webasyst.com/" rel='nofollow'>Webasyst</a> <span class="dots" title="Webasyst"></span>
</div>
<div id="copyright" class="float-left">
    &copy; <?php echo smarty_modifier_wa_datetime(time(),"Y");?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a> 
</div><?php }} ?>