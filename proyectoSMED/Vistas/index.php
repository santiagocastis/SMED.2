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
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"></a>
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
								<a href="profile.php"><i class="zmdi zmdi-account"></i><span>Perfil</span></a>
							</li>
							<li>
								<a href="index.php"><i class="zmdi zmdi-card"></i><span>Analisis</span></a>
							</li>
							<li>
								<a href="registros.php"><i class="zmdi zmdi-email"></i><span>Registros</span></a>
							</li>
							<li>
								<a href="reset-password.php"><i class="zmdi zmdi-settings"></i><span>Cambiar contraseña</span></a>
							</li>	
							<li class="divider"></li>
							<li>
								<a href="login.php"><i class="zmdi zmdi-power"></i><span>Salir</span></a>
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
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">9</span></span>
													<span class="weight-500 uppercase-font block font-13">Reciclaje del mes(kg)</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">46.43</span>%</span>
													<span class="weight-500 uppercase-font block">Incremento del mes</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<div class="sp-small-chart" id="sparkline_4" ></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">88.41</span>%</span>
													<span class="weight-500 uppercase-font block">Por encima de la media</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">40</span></span>
													<span class="weight-500 uppercase-font block">Reciclaje del año (kg)</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Attendance Metrics</h6>
							</div>
							<div class="pull-right">
								<a href="#" class="pull-left inline-block full-screen mr-15">
									<i class="zmdi zmdi-fullscreen"></i>
								</a>
								<div class="pull-left inline-block dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
									<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
										<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
										<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
										<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div id="e_chart_3" class="" style="height:330px;"></div>
							</div>
						</div>
					</div>
				</div>

					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							 <div class="panel-heading">
								 <div class="pull-left">
									 <h6 class="panel-title txt-dark">Porcentaje por material</h6>
								 </div>
								 <div class="clearfix"></div>
							 </div>
							 <div class="panel-wrapper collapse in">
								 <div class="panel-body">
									 <canvas id="chart_7" height="200"></canvas>
								 </div>	
							 </div>
						 </div>
					</div>
					<!-- row>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view bg-green">
							<div class="panel-wrapper collapse in">
                                <div class="panel-body sm-data-box-1">
									<span class="uppercase-font weight-500 font-14 block text-center txt-light">Porcentaje reciclado</span>	
									<div class="cus-sat-stat weight-500 txt-light text-center mt-5">
										<span class="counter-anim">93.13</span><span>%</span>
									</div>
									<div class="progress-anim mt-20">
										<div class="progress">
											<div class="progress-bar progress-bar-light
											wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<ul class="flex-stat txt-light mt-5">
										<li>
											<span class="block">Previo</span>
											<span class="block weight-500 font-15">79.82</span>
										</li>
										<li>
											<span class="block">% cambio</span>
											<span class="block weight-500 font-15">+14.29</span>
										</li>
										<li>
											<span class="block">Tendencia</span>
											<span class="block">
												<i class="zmdi zmdi-trending-up font-20"></i>
											</span>
										</li>
									</ul>
								</div>
                            </div>
                        </div>
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Reciclaje</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block mr-15">
										<i class="zmdi zmdi-download"></i>
									</a>
									<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
										<i class="zmdi zmdi-close"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div>
										<span class="pull-left inline-block capitalize-font txt-dark">
											Plastico 
										</span>
										<span class="label label-warning pull-right">50%</span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr row mt-10 mb-10"/>
										<span class="pull-left inline-block capitalize-font txt-dark">
											Carton
										</span>
										<span class="label label-danger pull-right">20%</span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr row mt-10 mb-10"/>
										<span class="pull-left inline-block capitalize-font txt-dark">
											Metal
										</span>
										<span class="label label-success pull-right">30%</span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr row mt-10 mb-10"/>
									</div>
								</div>	
							</div>
						</div>
					</div>
			</div>
		</div>
		row -->
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="../vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
	<script src="../vendors/echarts-liquidfill.min.js"></script>
	
	<!-- Toast JavaScript -->
	<script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- ChartJS JavaScript -->
	<script src="../vendors/chart.js/Chart.min.js"></script>
	<script src="dist/js/chartjs-data.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
	<script src="dist/js/dashboard5-data.js"></script>

</body>
</html>