<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>SMED</title>
	<meta name="description" content="Droopy is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Droopy Admin, Droopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
		
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper  theme-5-active pimary-color-green">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
							<img class="brand-img" src="../img/logo.png" alt="brand"/>
							<span class="brand-text">SMED</span>
						</a>
					</div>
				</div>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
							<li>
								<div class="notification-box-head-wrap">
									<span class="notification-box-head pull-left inline-block">notificationes</span>
									<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> Limpiar todo </a>
									<div class="clearfix"></div>
									<hr class="light-grey-hr ma-0"/>
								</div>
							</li>
							<li>
								<div class="streamline message-nicescroll-bar">
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-green">
												<i class="zmdi zmdi-flag"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												Nueva suscripción creada</span>
												<span class="inline-block font-11  pull-right notifications-time">2pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Tu cliente suscrito por el plan basico. El cliente pagará 25 por mes</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-yellow">
												<i class="zmdi zmdi-trending-down"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Servidor #2 no responde</span>
												<span class="inline-block font-11 pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Algunos errores tecnicos ocurridos necesitan ser resuletos</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-blue">
												<i class="zmdi zmdi-email"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 mensajes nuevos</span>
												<span class="inline-block font-11  pull-right notifications-time">4pm</span>
												<div class="clearfix"></div>
												<p class="truncate"> Falló el último pago de su suscripción a G Suite Basic.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="sl-avatar">
												<img class="img-responsive" src="../img/avatar.jpg" alt="avatar"/>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-red">
												<i class="zmdi zmdi-storage"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% del espacio del servidor ocupado.</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">consectetur, adipisci velit.</p>
											</div>
										</a>	
									</div>
								</div>
							</li>
							<li>
								<div class="notification-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> leer todo </a>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="registro.php"><i class="zmdi zmdi-email"></i><span>Registro</span></a>
							</li>
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Perfil</span></a>
							</li>

							<li>
								<a href="reset-password.php"><i class="zmdi zmdi-settings"></i><span>Cambiar contraseña</span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="index.php"><i class="zmdi zmdi-power"></i><span>Salir</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		
		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
		<div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">Registro de la basura</h3>
                                        <h6 class="text-center nonecase-font txt-grey">Ingresa los datos</h6>
                                    </div>	
                                    <div class="form-wrap">
                                        <form action="../controllers/crear_basura.php" method="post">
											<div class="form-group" >
												<label for="tipo_basura" class="control-label">Tipo de basura</label>	
												<select class="form-control" id="id_tipo_basura" name="id_tipo_basura" REQUIRED="">
													<option selected disabled>Seleccionar</option>
													<option value="1">Metal</option>
													<option value="2">Plástico</option>
													<option value="3">Cartón</option>
													<option value="4">otro</option>
												</select>
											</div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="cantidad">Cantidad (kg)</label>
                                                <div class="clearfix"></div>
                                                <input type="number" class="form-control" required="" name="cantidad" id="cantidad" placeholder="cantidad">
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="fecha">Fecha</label>
                                                <div class="clearfix"></div>
                                                <input type="date" class="form-control" required="" name="fecha" id="fecha" placeholder="fecha">
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="id_usuario">Codigo	 del usuario</label>
                                                <div class="clearfix"></div>
                                                <input type="number" class="form-control" required="" name="id_usuario" id="id_usuario" placeholder="Codigo del usuario">
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-success  btn-rounded">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
        <!-- /Main Content -->

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