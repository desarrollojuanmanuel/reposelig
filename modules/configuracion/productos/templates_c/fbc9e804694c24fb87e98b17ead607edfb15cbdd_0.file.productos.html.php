<?php
/* Smarty version 3.1.30, created on 2017-12-05 14:37:15
  from "C:\wamp64\www\selig\modules\configuracion\productos\templates\productos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a26af1bd7a2b5_00629508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc9e804694c24fb87e98b17ead607edfb15cbdd' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\modules\\configuracion\\productos\\templates\\productos.html',
      1 => 1497282070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a26af1bd7a2b5_00629508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <body>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <div id="wrapper">

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Productos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Los siguientes son los grupos y productos cargados en el sistema.
                            </div>

                            <div class="panel-heading" id="addcl">
                                <a href="javascript:;" onclick="uploaddiv('form')">
                                    <span class="glyphicon-class ">Nuevo Grupo</span>	
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                </a>

                                <a href="javascript:;" onclick="uploaddiv('form2')">
                                    <span class="glyphicon-class">Nuevo Producto</span>	
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                </a>
                            </div>


                            <div class="panel-heading" id="listcl" style="display:none;">
                                <a href="javascript:;" onclick="uploaddiv('list')">
                                    <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
                                    <span class="glyphicon-class">Volver a productos</span>	
                                </a>
                            </div>	
                            <!-- /.panel-heading -->


                            <div class="panel-body" id="form" style="display:none;">
                                <form role="form">
                                    <div class="col-md-12">
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputError">Nombre Grupo </label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </div>	
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Crear Grupo</button>
                                    </div> 
                                </form>
                            </div>

                            <div class="panel-body" id="form2" style="display:none;">
                                <form role="form">
                                    <div class="col-md-12">
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputError">Nombre Producto </label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </div>	
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Crear Producto</button>
                                    </div> 
                                </form>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <!-- /.col-lg-6 -->
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Grupo de productos
                    </div>
                    <!-- .panel-heading -->
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">DTPA Tc99m&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA1mCi - TC99M-DTPA  INY 1mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></span></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA3mCi - TC99M-DTPA  INY 3mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA5mCi - TC99M-DTPA  INY 5mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA30mCi - UNIDOSIS TC99M  DTPA  30mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA10mCi - UNIDOSIS TC99M  DTPA  10mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA15mCi - UNIDOSIS TC99M  DTPA  15mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA20mCi - UNIDOSIS TC99M  DTPA  20mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
							
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">HMDP Tc99m &nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="panel-body">
                                            <ul>
                                                <li class="list-group-item"><a href="javascript:;">UDDTPA1mCi - TC99M-DTPA  INY 1mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></span></a></li>
                                                <li class="list-group-item"><a href="javascript:;">UDDTPA3mCi - TC99M-DTPA  INY 3mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                                <li class="list-group-item"><a href="javascript:;">UDDTPA5mCi - TC99M-DTPA  INY 5mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                                <li class="list-group-item"><a href="javascript:;">UDDTPA30mCi - UNIDOSIS TC99M  DTPA  30mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                                <li class="list-group-item"><a href="javascript:;">UDDTPA10mCi - UNIDOSIS TC99M  DTPA  10mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                                <li class="list-group-item"><a href="javascript:;">UDDTPA15mCi - UNIDOSIS TC99M  DTPA  15mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                                <li class="list-group-item"><a href="javascript:;">UDDTPA20mCi - UNIDOSIS TC99M  DTPA  20mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">HMPAO Tc99m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA1mCi - TC99M-DTPA  INY 1mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></span></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA3mCi - TC99M-DTPA  INY 3mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA5mCi - TC99M-DTPA  INY 5mCi UNID &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA30mCi - UNIDOSIS TC99M  DTPA  30mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA10mCi - UNIDOSIS TC99M  DTPA  10mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA15mCi - UNIDOSIS TC99M  DTPA  15mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                            <li class="list-group-item"><a href="javascript:;">UDDTPA20mCi - UNIDOSIS TC99M  DTPA  20mCi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- .panel-body -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
         <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/script.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        
        <?php echo '<script'; ?>
>
            function uploaddiv(val) {
                if (val == 'form' || val == 'form2') {
                    $("#table").hide();
                    $('#' + val).show(250);
                    $("#addcl").hide(350);
                    $('#listcl').show(250);
                }
                if (val == 'list') {
                    $('#table').show(250);
                    $('#form').hide(250);
                    $('#form2').hide(250);
                    $("#addcl").show(350);
                    $('#listcl').hide(250);
                }
            }
        <?php echo '</script'; ?>
>

    </body>

</html>
<?php }
}
