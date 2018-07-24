<?php
/* Smarty version 3.1.30, created on 2017-12-05 14:37:49
  from "C:\wamp64\www\selig\modules\configuracion\comerciales\templates\comerciales.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a26af3dbab5b8_68751220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc075ef7438aafae6420fe1ae0e8756e0bbbaf7f' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\modules\\configuracion\\comerciales\\templates\\comerciales.html',
      1 => 1497282374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a26af3dbab5b8_68751220 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="page-header">Comerciales</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-heading" id="addcl">
                                <a href="javascript:;" onclick="uploaddiv('form')">
                                    <span class="glyphicon-class">Crear Comercial</span>	
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="panel-heading" id="listcl" style="display:none;">
                                <a href="javascript:;" onclick="uploaddiv('list')">
                                    <span class="glyphicon-class">Listar Comerciales</span>	
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                </a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" id="table">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th> 
                                            <th>Nombre</th>
                                            <th>Opcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Allan Alberto ERAZO RODRIGUEZ</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>6</td>
                                            <td>Rodolfo ARIAS CARRIAZO</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="info">
                                            <td>8</td>
                                            <td>Melba Janeth OSORIO QUIGUA</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>9</td>
                                            <td>Diego Alejandro DIAZ LOPEZ</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>11</td>
                                            <td>Gelver DURAN DURAN</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>12</td>
                                            <td>SELIG - Dosimetria</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="info">
                                            <td>79</td>
                                            <td>SELIG - Medicina Nuclear Occidente</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>29</td>
                                            <td>SELIG - Medicina Nuclear</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>34</td>
                                            <td>Sabrina PINEDA ORTIZ</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Allan Alberto ERAZO RODRIGUEZ</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>6</td>
                                            <td>Rodolfo ARIAS CARRIAZO</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="info">
                                            <td>8</td>
                                            <td>Melba Janeth OSORIO QUIGUA</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>9</td>
                                            <td>Diego Alejandro DIAZ LOPEZ</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>11</td>
                                            <td>Gelver DURAN DURAN</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="warning">
                                            <td>12</td>
                                            <td>SELIG - Dosimetria</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="info">
                                            <td>79</td>
                                            <td>SELIG - Medicina Nuclear Occidente</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="danger">
                                            <td>29</td>
                                            <td>SELIG - Medicina Nuclear</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
                                            </td>
                                        </tr>
                                        <tr class="success">
                                            <td>34</td>
                                            <td>Sabrina PINEDA ORTIZ</td>
                                            <td class="center"> 
                                                <a href=""><span class="fa fa-times "></span></a>
                                                <a href=""><span class="fa fa-edit "></span></a>
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

                                    <div class="col-md-6">
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputError">id </label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Nombre </label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </div>		
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Crear Comercial</button>
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
