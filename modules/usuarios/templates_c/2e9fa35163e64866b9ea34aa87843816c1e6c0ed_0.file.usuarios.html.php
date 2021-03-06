<?php
/* Smarty version 3.1.30, created on 2017-07-12 01:46:34
  from "/opt/lampp/htdocs/selig/modules/usuarios/templates/usuarios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965635a045a55_38104329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e9fa35163e64866b9ea34aa87843816c1e6c0ed' => 
    array (
      0 => '/opt/lampp/htdocs/selig/modules/usuarios/templates/usuarios.html',
      1 => 1497029890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965635a045a55_38104329 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="page-header">Usuarios</h1>
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
								<span class="glyphicon-class">Crear Usuario</span>	
								<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
							</a>
                        </div>
						<div class="panel-heading" id="listcl" style="display:none;">
                           <a href="javascript:;" onclick="uploaddiv('list')">
								<span class="glyphicon-class">Listar Clientes</span>	
								<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
							</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="table">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Nombres y apellidos</th>
                                        <th>Email</th>
										<th>Rol</th>
										<th>Cliente</th>
										<th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>admin.selig</td>
                                        <td>Administrador</td>
                                        <td>jcastellanos@seligdecolombia.com</td>
                                        <td class="center">admin</td>
										 <td class="center"></td>
										<td class="center"> 
											<a href=""><span class="fa fa-times "></span></a>
											<a href=""><span class="fa fa-edit "></span></a>
										</td>
                                    </tr>
									<tr class="warning">
                                        <td>FCVL1.SELIG</td>
                                        <td>Luz Maritza PABON CASTILLA</td>
                                        <td>mpabon@fcvl.org</td>
                                        <td class="center">cliente</td>
										 <td class="center">890324177MN</td>
										<td class="center"> 
											<a href=""><span class="fa fa-times "></span></a>
											<a href=""><span class="fa fa-edit "></span></a>
										</td>
                                    </tr>
									<tr class="info">
                                        <td>calete</td>
                                        <td>Andrés Pruebas no borrar</td>
                                        <td>calete@hotmail.com</td>
                                        <td class="center">cliente</td>
										 <td class="center">890300513MN</td>
										<td class="center"> 
											<a href=""><span class="fa fa-times "></span></a>
											<a href=""><span class="fa fa-edit "></span></a>
										</td>
                                    </tr>
									<tr class="danger">
                                        <td>FAL.SELIG</td>
                                        <td>Medicina Nuclear</td>
                                        <td>nuclear@fundacionalejandrolondono.com</td>
                                        <td class="center">cliente</td>
										 <td class="center">800135582</td>
										<td class="center"> 
											<a href=""><span class="fa fa-times "></span></a>
											<a href=""><span class="fa fa-edit "></span></a>
										</td>
                                    </tr>
									<tr class="danger">
                                        <td>PRUEBA.SELIG</td>
                                        <td>Cristina Henriquez</td>
                                        <td>chenriquez@seligdecolombia.com</td>
                                        <td class="center">cliente</td>
										 <td class="center">830041730PRUEBA</td>
										<td class="center"> 
											<a href=""><span class="fa fa-times "></span></a>
											<a href=""><span class="fa fa-edit "></span></a>
										</td>
                                    </tr>
									<tr class="danger">
                                        <td>OCCIDENTE.SELIG</td>
                                        <td>Luz Mary</td>
                                        <td>coordinacionadministrativa.gamagrafia@cdo-sa.com</td>
                                        <td class="center">cliente</td>
										 <td class="center">890300513MN</td>
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
								<div class="col-md-4">
									<div class="form-group has-error">
									<label class="control-label" for="inputError">Estado</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Activo / Inactivo
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group has-error">
										<label class="control-label" for="inputError">Rol</label>
										<select class="form-control" id="inputError">
											<option>Administrador</option>
											<option>Cliente</option>
											<option>Cliente Master</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess">Usuario</label>
										<input type="text" class="form-control" id="inputSuccess">
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group has-warning">
										<label class="control-label" for="inputWarning">Contraseña </label>
										<input type="text" class="form-control" id="inputWarning">
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group has-error">
										<label class="control-label" for="inputError">Repita contraseña</label>
										<input type="text" class="form-control" id="inputError">
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group has-success">
										<label class="control-label" for="inputError">Nombres y apellidos </label>
										<input type="text" class="form-control" id="inputError">
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group has-warning">
										<label class="control-label" for="inputError">Email </label>
										<input type="text" class="form-control" id="inputError">
									</div>
								</div>	
								<div class="col-lg-12">
									<div class="panel panel-success">
										<div class="panel-heading">
											Productos Disponibles
										</div>
										<div class="panel-body">
											<p>Seleccione qué productos puede únicamente pedir este usuario. Si no selecciona ninguno podrá pedir todos. Para seleccionar más de un producto hágalo haciendo clic junto con la tecla Control.

											Si previamente ha selececcionado productos y desea asignarle de nuevo todos</p>
										</div>
									</div>
									<!-- /.col-lg-4 -->
								</div>	
								<div class="">
									<div class="form-group">
										<nav class="navbar-warning" role="navigation">
										<div class="container-fluid">
										  <div class="navbar-header">
											<a class="navbar-brand" href="#">Productos</a>
										  </div>
										   <div class="navbar-body">
											 </div>	
										  <div class="navbar-form navbar-left" role="search">
											<div class="form-group">
											   <select class="selectpicker" multiple data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true">
												<optgroup label="DTPA Tc99m">
													<option value="8">UDDTPA1mCi - TC99M-DTPA  INY 1mCi UNID</option>
													<option value="13">UDDTPA3mCi - TC99M-DTPA  INY 3mCi UNID</option>
													<option value="15">UDDTPA5mCi - TC99M-DTPA  INY 5mCi UNID</option>
													<option value="93">UDDTPA30mCi - UNIDOSIS TC99M  DTPA  30mCi</option>
													<option value="94">UDDTPA10mCi - UNIDOSIS TC99M  DTPA  10mCi</option>
													<option value="95">UDDTPA15mCi - UNIDOSIS TC99M  DTPA  15mCi</option>
													<option value="96">UDDTPA20mCi - UNIDOSIS TC99M  DTPA  20mCi</option>
												</optgroup>
												<optgroup label="HMDP Tc99m">
													<option value="46">UDHMDP15mCi - UNIDOSIS TC99M  HMDP  15mCi</option>
													<option value="48">UDHMDP20mCi - UNIDOSIS TC99M  HMDP  20mCi</option>
													<option value="49">UDHMDP25mCi - UNIDOSIS TC99M  HMDP  25mCi</option>
													<option value="50">UDHMDP30mCi - UNIDOSIS TC99M  HMDP  30mCi</option>
													<option value="108">UDHMDP10mCi - UNIDOSIS TC99M  HMDP  10mCi</option>
													<option value="109">UDHMDP5mCi - UNIDOSIS TC99M  HMDP  5mCi</option>
												</optgroup>
												<optgroup label="MYOVIEW Tc99m">
													<option value="51">UDMYOVIEW10mCi - TC99M-TETROFOSMIN MYOVIEW INY 10mCi UNID</option>
													<option value="52">UDMYOVIEW12mCi - TC99M-TETROFOSMIN MYOVIEW INY 12mCi UNID</option>
													<option value="53">UDMYOVIEW15mCi - TC99M-TETROFOSMIN MYOVIEW INY 15mCi UNID</option>
													<option value="54">UDMYOVIEW20mCi - TC99M-TETROFOSMIN MYOVIEW INY 20mCi UNID</option>
													<option value="55">UDMYOVIEW25mCi - TC99M-TETROFOSMIN MYOVIEW INY 25mCi UNID</option>
													<option value="56">UDMYOVIEW30mCi - TC99M-TETROFOSMIN MYOVIEW INY 30mCi UNID</option>
												</optgroup>
												<optgroup label="SESTAMIBI Tc99m">
													<option value="57">UDSESTA10mCi - TC99M-SESTAMIBI  INY 10mCi UNID</option>
													<option value="58">UDSESTA12mCi - TC99M-SESTAMIBI  INY 12mCi UNID</option>
													<option value="59">UDSESTA15mCi - TC99M-SESTAMIBI  INY 15mCi UNID</option>
													<option value="61">UDSESTA20mCi - TC99M-SESTAMIBI  INY 20mCi UNID</option>
													<option value="62">UDSESTA25mCi - TC99M-SESTAMIBI  INY 25mCi UNID</option>
													<option value="63">UDSESTA30mCi - TC99M-SESTAMIBI  INY 30mCi UNID</option>
												</optgroup>
												<optgroup label="HMPAO Tc99m">
													<option value="66">UDCEREBRO1 - TC99M-HMPAO CERETEC PROGR  CEREBRAL</option>
												</optgroup>
												<optgroup label="MAG-3 Tc99m">
													<option value="104">UDMAG3_3mCi - UNIDOSIS TC99M  MAG3  3mCi</option>
													<option value="105">UDMAG3_5mCi - UNIDOSIS TC99M  MAG3  5mCi</option>
													<option value="106">UDMAG3_8mCi - UNIDOSIS TC99M  MAG3  8mCi</option>
													<option value="107">UDMAG3_10mCi - UNIDOSIS TC99M  MAG3  10mCi</option>
												</optgroup>
												<optgroup label="TECNECIO Tc99m">
													<option value="68">UDPERTECNETATO10mCi - TC99M-PERTECNETATO  INY 10mCi UNID</option>
													<option value="70">UDPERTECNETATO15mCi - TC99M-PERTECNETATO  INY 15mCi UNID</option>
													<option value="71">UDPERTECNETATO1mCi - TC99M-PERTECNETATO  INY 1mCi UNID</option>
													<option value="72">UDPERTECNETATO20mCi - TC99M-PERTECNETATO  INY 20mCi UNID</option>
													<option value="73">UDPERTECNETATO25mCi - TC99M-PERTECNETATO  INY 25mCi UNID</option>
													<option value="80">UDPERTECNETATO5mCi - TC99M-PERTECNETATO  INY 5mCi UNID</option>
													<option value="110">UDPERTECNETATO30mCi - UNIDOSIS TC99M  TECNECIO  30mCi</option>
												</optgroup>
												<optgroup label="DMSA Tc99m">
													<option value="85">UDDMSA3mCi - UNIDOSIS TC99M  DMSA  3mCi</option>
													<option value="87">UDDMSA5mCi - UNIDOSIS TC99M  DMSA  5mCi</option>
													<option value="103">UDDMSA1mCi - UNIDOSIS TC99M  DMSA  1mCi</option>
												</optgroup>
												<optgroup label="MAA Tc99m">
													<option value="90">UDMAA5mCi - UNIDOSIS TC99M  MAA  5mCi UNID</option>
													<option value="91">UDMAA8mCi - UNIDOSIS TC99M  MAA  8mCi UNID</option>
													<option value="92">UDMAA10mCi - UNIDOSIS TC99M  MAA  10mCi UNID</option>
												</optgroup>
												<optgroup label="NANOCOLOIDE Tc99m">
													<option value="98">UDNANO1mCi - UNIDOSIS TC99M  NANOCOLOIDE  1mCi</option>
													<option value="99">UDNANO5mCi - UNIDOSIS TC99M  NANOCOLOIDE  5mCi</option>
													<option value="102">UDNANO10mCi - UNIDOSIS TC99M  NANOCOLOIDE  10mCi</option>
													<option value="101">UDNANO8mCi - UNIDOSIS TC99M  NANOCOLOIDE  8mCi</option>
												</optgroup>
												<optgroup label="PIROFOSFATOS">
													<option value="111">UDPYROFOSFATO - PIROFOSFATO</option>
												</optgroup>
												<optgroup label="HIDA - MEBROFENIN Tc99m">
													<option value="112">UDTECHIDA - UNIDOSIS TC99M TECHIDA</option>
												</optgroup>
											  </select>
											</div>
										  </div>

										</div>
										<!-- .container-fluid -->
									  </nav>				
									</div>	
								</div>
								
								<div class="col-md-12">
									<button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Crear Cliente</button>
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
		function uploaddiv(val){
			if(val == 'form'){
				$("#table").hide();
				$('#form').show(250);
				$("#addcl").hide();
				$('#listcl').show(250);
			}
			if(val == 'list'){
				$('#table').show(250);
				$('#form').hide(250);
				$("#addcl").show();
				$('#listcl').hide(250);
			}
		}
	<?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
