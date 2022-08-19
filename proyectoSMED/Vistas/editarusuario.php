<?php
	  if(!isset($_GET['id'])){
		window.history.go(-1);
	  }
	  include'../controllers/conexion.php';
			 $db = new conexion();
			 $con = $db->conectar();
	  $id=$_GET['id']; 
	  $registros=$con->prepare("SELECT * FROM usuario WHERE identificacion = ?;"); 
	  $resultado=$registros->execute([$id]); 
	  $persona=$registros->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Registrate en SMED</title>
		<meta name="description" content="Droopy is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Droopy Admin, Droopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
						<span class="brand-text">SMED</span>
					</a>
				</div>
			</header>
			<!-- inicio Formulario de registro -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fixed">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="ml-auto mr-auto no-float" style="max-width:1000px; padding:30px">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Editar Perfil</h3>
											<h6 class="text-center nonecase-font txt-grey">Ingresa los datos a actualizar</h6>
										</div>
									</div>
									<div class="form-wrap">
										<form action="../controllers/editarusuarioController.php" method="POST" autocomplete="off">
											<div class="form-group">
												<div class="col-sm-4">
													<div style="padding:10px">
														<div class="form-group" >
														   <label for="tipo_identificacion" class="control-label">Tipo de identificación</label>
															<select class="form-control" id="tipo_identificacion" required="" name="tipo_identificacion">
																<option value="TI" <?=$persona->tipo_identificacion == 'TI' ? ' selected="selected"' : '';?>>Tarjeta de identidad</option>
																<option value="CC" <?=$persona->tipo_identificacion == 'CC' ? ' selected="selected"' : '';?>>Cédula de ciudadania</option>
																<option value="otro" <?=$persona->tipo_identificacion == 'Otro' ? ' selected="selected"' : '';?>>otro</option>
															</select>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="identificacion">Número de identificación</label>
															<input type="number" class="form-control" id="identificacion" required="" name="identificacion" placeholder="ingrese el número de identificación" value="<?php echo $persona->identificacion; ?>">
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="direccion">Dirección</label>
															<input type="varchar" class="form-control" id="direccion" required="" name="direccion" placeholder="direccion" value="<?php echo $persona->direccion; ?>">
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div style="padding:10px">
														<div class="form-group">
															<label class="control-label mb-10" for="nombre">Nombre</label>
															<input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Nombre" value="<?php echo $persona->nombre; ?>">
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="apellidos">Apellidos</label>
															<input type="text" class="form-control" id="apellidos" name="apellidos" required="" placeholder="apellidos" value="<?php echo $persona->apellidos; ?>" >
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="telefono">Telefono</label>
															<input type="number" class="form-control" id="telefono" name="telefono" required="" placeholder="telefono" value="<?php echo $persona->telefono; ?>">
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div style="padding:10px">
														<div class="form-group">
															<label class="control-label mb-10" for="usuario">E-mail</label>
															<input type="email" class="form-control" id="usuario" name="usuario" required="" placeholder="E-mail" value="<?php echo $persona->usuario; ?>">
														</div>
														<div class="form-group">
															<label class="pull-left control-label mb-10" for="clave">Contraseña</label>
															<input type="password" class="form-control" id="clave" name="clave" required="" placeholder="contraseña" value="<?php echo $persona->clave; ?>">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group text-center">
												<input type="hidden" name="ide" value="<?php echo $persona->identificacion;?>">
												<button type="submit" class="btn btn-success btn-rounded">Actualizar</button>
												<button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal" onclick="refrescar()">Volver</button>
											</div>
										</form>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
			</div>
			<!-- /fin formulario de registro Content -->
		</div>
		<!-- /#wrapper -->
		
		<script>
		 	function refrescar(){   
			window.history.go(-1);
    	}</script>

		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>