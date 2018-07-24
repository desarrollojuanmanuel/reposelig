<?php
/* Smarty version 3.1.30, created on 2018-03-23 17:32:21
  from "C:\wamp64\www\selig\modules\configuracion\calendario\templates\calendario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab53a25c2a8c8_31409096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ccd06257ee4ed30f2f70adbfac02f899d41575e' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\modules\\configuracion\\calendario\\templates\\calendario.html',
      1 => 1497288420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab53a25c2a8c8_31409096 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ES">
    <body>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <div id="wrapper">

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Calendario</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Utilice esta opción cargar fechas a desactivar en pedidos para evitar colocar pedidos en dichas fechas.

                                Copie y pegue las fechas que se desea desactivar en el sistema; una fecha por línea. Para finalizar oprima el botón procesar.
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body" id="table">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Region</th>
                                            <th>Opcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>2017-03-14</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->
                                <!--div class="well">
                                    <h4>DataTables Usage Information</h4>
                                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                </div-->
                            </div>

                            <div class="panel-body" id="form" style="display:none;">
                                <form role="form">
                                    <div class="col-md-12">
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputError">Region</label>
                                            <input type="text" class="form-control" placeholder="" id="inputError">
                                        </div>
                                    </div>	
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Guardar</button>
                                    </div> 
                                </form>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <!-- /.col-lg-6 -->
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
