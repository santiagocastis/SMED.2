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
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">¿Ya tienes una cuenta?</span>
					<a class="inline-block btn btn-success btn-rounded btn-outline" href="login.php">iniciar sesión</a>
				</div>
				<div class="clearfix"></div>
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
											<h3 class="text-center txt-dark mb-10">Registrate en SMED</h3>
											<h6 class="text-center nonecase-font txt-grey">Ingresa estos datos</h6>
										</div>
									</div>
									<div class="form-wrap">
										<form action="../controllers/crear_usuario.php" method="POST" autocomplete="off">
											<div class="form-group">
												<div class="form-group" style="max-width:950px; padding-left: 22px" >
													<label for="id_rol" class="control-label">Rol de usuario</label>
													<select class="form-control" id="id_rol" name="id_rol">
														<option selected value="1">Usuario</option>
														<option value="2" disabled>Asistente</option>
													</select>
												</div>
												<div class="col-sm-4">
													<div style="padding:10px">
														<div class="form-group" >
														   <label for="tipo_identificacion" class="control-label">Tipo de identificación</label>	
															<select class="form-control" required="" id="tipo_identificacion" name="tipo_identificacion" >
																<option value="">Seleccionar</option>
																<option value="TI">Tarjeta de identidad</option>
																<option value="CC">Cédula de ciudadania</option>
																<option value="otro">otro</option>
															</select>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="identificacion">Número de identificación</label>
															<input type="number" class="form-control" required="" id="identificacion" name="identificacion" placeholder="ingrese el número de identificación">
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="direccion">Dirección</label>
															<input type="varchar" class="form-control" required="" id="direccion" name="direccion" placeholder="direccion" >
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div style="padding:10px">
														<div class="form-group">
															<label class="control-label mb-10" for="nombre">Nombre</label>
															<input type="text" class="form-control" required="" id="nombre" name="nombre" placeholder="Nombre" >
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="apellidos">Apellidos</label>
															<input type="text" class="form-control" required="" id="apellidos" name="apellidos" placeholder="apellidos" >
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="telefono">Telefono</label>
															<input type="number" class="form-control" required="" id="telefono" name="telefono" placeholder="telefono" >
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div style="padding:10px">
														<div class="form-group">
															<label class="control-label mb-10" for="usuario">E-mail</label>
															<input type="email" class="form-control" required="" id="usuario" name="usuario" placeholder="E-mail">
														</div>
														<div class="form-group">
															<label class="pull-left control-label mb-10" for="clave">Contraseña</label>
															<input type="password" class="form-control" required="" id="clave" name="clave" placeholder="contraseña">
														</div>
														<div class="form-group">
															<label class="pull-left control-label mb-10" for="clave_repetir"> Confirma tu contraseña</label>
															<input type="password" class="form-control" required="" id="clave_repetir" name="clave_repetir" placeholder="confirma la contraseña">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="checkbox checkbox-primary pr-10 pull-left">
													<input id="checkbox_2" required="" type="checkbox">
													<label for="checkbox_2"> Acepto todos los <span class="txt-primary">Terminos y condiciones</span></label>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group text-center">
												<button type="submit" class="btn btn-success btn-rounded">Registrarse</button>
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
