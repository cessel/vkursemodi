<?php /* Smarty version Smarty-3.1.14, created on 2016-10-26 10:34:04
         compiled from "/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:16634811558105c6c324208-32931014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd3093af0d65ee717be5577f8934aee4849a1374' => 
    array (
      0 => '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-data/public/blog/themes/clear1/navigation.html',
      1 => 1477303581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16634811558105c6c324208-32931014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_url' => 0,
    'blog_query' => 0,
    'wa' => 0,
    'blog_pages' => 0,
    'blogs' => 0,
    'is_search' => 0,
    'blog' => 0,
    'timeline' => 0,
    'year' => 0,
    'item' => 0,
    'frontend_action' => 0,
    'output' => 0,
    'plugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58105c6c4107d4_07452941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58105c6c4107d4_07452941')) {function content_58105c6c4107d4_07452941($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include '/home/c/cessel/piterskiy.cessel.bget.ru/public_html/wa-system/vendors/smarty-plugins/function.wa_print_tree.php';
?><!-- navigation menu -->
<div class="app-navigation" role="navigation">

    <!-- search -->
    <div class="float-right block">            	
        <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
" class="search">
            <div class="search-wrapper">
                <input type="search" name="query" <?php if (!empty($_smarty_tpl->tpl_vars['blog_query']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['blog_query']->value;?>
"<?php }?> placeholder="Найти запись">
            </div>
            <div class="clear-both"></div>
        </form>
    </div>
                    
    <!-- info pages -->
    <?php $_smarty_tpl->tpl_vars['blog_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->pages(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['blog_pages']->value){?>
        <div class="float-right">
            <?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['blog_pages']->value,'class'=>"menu-h dropdown",'attrs'=>'id="page-list"','elem'=>'
        <a href=":url" title=":title">:name</a>','collapsible_class'=>'collapsible','selected'=>$_smarty_tpl->tpl_vars['wa']->value->param('page_id')),$_smarty_tpl);?>

        </div>
    <?php }?>

    <ul class="menu-h dropdown">

    	<!-- blog list -->
        <?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->blogs(), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['blogs']->value)>1){?>
            <li class="<?php if (is_array($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id'))&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>bold<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
">Все записи</a></li>
            <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id')==$_smarty_tpl->tpl_vars['blog']->value['id']&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>bold<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a>
                </li>
            <?php } ?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable(current($_smarty_tpl->tpl_vars['blogs']->value), null, 0);?>
            <li<?php if (empty($_smarty_tpl->tpl_vars['is_search']->value)){?> class="bold"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a>
            </li>
        <?php }?>
        
        <!-- timeline navigation -->
        <?php $_smarty_tpl->tpl_vars['timeline'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->timeline(), null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['timeline']->value)){?>
        	<li id="timeline" class="collapsible">
            	<a href="#" onClick="return false">Календарь</a>
	            <?php if (!empty($_smarty_tpl->tpl_vars['timeline']->value)){?>
					<ul class="menu-v">
					<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable(null, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['year_month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timeline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['year_month']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
						<?php if ($_smarty_tpl->tpl_vars['year']->value!=$_smarty_tpl->tpl_vars['item']->value['year']){?>
    						<?php if (!$_smarty_tpl->tpl_vars['item']->first){?>
	    	                        </ul>
		                        </li>
		                    <?php }?>
	    	                <li class="collapsible <?php if ($_smarty_tpl->tpl_vars['item']->value['year_selected']){?>bold<?php }?>">
	        	            <?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['year'], null, 0);?>
	            	        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['year_link'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['year'])===null||$tmp==='' ? 'NULL' : $tmp);?>
</a>
    						<ul class="menu-v">
		                <?php }?>
		                <li <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']){?>class="bold"<?php }?>>
		                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo _w("%d post","%d posts",$_smarty_tpl->tpl_vars['item']->value['count']);?>
"><?php echo _ws(date("F",gmmktime(0,0,0,$_smarty_tpl->tpl_vars['item']->value['month'],1)));?>
</a>
		                </li>
					    <?php if ($_smarty_tpl->tpl_vars['item']->last){?>
					            </ul>
				    	    </li>
			            <?php }?>
		            <?php } ?>
			        </ul>
			    <?php }?>
        	</li>
    	<?php }?>
            
    	<!-- plugins -->
		
		<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
		  <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])){?>
			<li class="collapsible">
				<a href="#" onClick="return false">
    				<?php if (substr($_smarty_tpl->tpl_vars['plugin']->value,-7)=='-plugin'){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->pluginName(substr($_smarty_tpl->tpl_vars['plugin']->value,0,-7));?>
<?php }else{ ?>Еще<?php }?>
            	</a>
            	<div class="inner">
                    <?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>

				</div>
			</li>
          <?php }?>
        <?php } ?>
			
    </ul>
    
    <div class="clear-both"></div>

</div><?php }} ?>