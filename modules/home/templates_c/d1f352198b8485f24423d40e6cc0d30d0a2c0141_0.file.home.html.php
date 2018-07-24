<?php
/* Smarty version 3.1.30, created on 2017-07-12 18:51:09
  from "C:\wamp64\www\selig\modules\home\templates\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59666f9d7b2b54_65378810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f352198b8485f24423d40e6cc0d30d0a2c0141' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\modules\\home\\templates\\home.html',
      1 => 1497051504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59666f9d7b2b54_65378810 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<body>

    <div id="wrapper">
	
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bienvenidos@</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lh-8 col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-2">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Hola usuario1 bienvenid@ </div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/script.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>

</html>
<?php }
}
