<!DOCTYPE html>
<html lang="en">
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
	
	<!-- Morris Charts CSS -->
    <link href="../vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	
	<!-- vector map CSS -->
	<link href="../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>
	
	<!-- Calendar CSS -->
	<link href="../vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css"/>
		
	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper  theme-1-active pimary-color-green">
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
									<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)">Limpiar</a>
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
												Nueva suscripción</span>
												<span class="inline-block font-11  pull-right notifications-time">2pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Tu cliente se suscribió al plan básico. El cliente pagará $25 por mes.</p>
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
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">El servidor #2 no responde</span>
												<span class="inline-block font-11 pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Se ha producido algún error técnico que debe resolverse.</p>
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
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 nuevos mensajes</span>
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
												<p class="truncate">
													Y no hay quien quiera obtener dolor</p>
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
												<p class="truncate">Oye, quiere ganar.</p>
											</div>
										</a>	
									</div>
								</div>
							</li>
							<li>
								<div class="notification-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)">leer todo</a>
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
					<div class="col-lg-3 col-xs-12">
						<div class="panel panel-default card-view  pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body  pa-0">
									<div class="profile-box">
										<div class="profile-cover-pic">
											<div class="profile-image-overlay"></div>
										</div>
										<div class="profile-info text-center">
											<div class="profile-img-wrap">
												<img class="inline-block mb-10" src="../img/imagenperfil.jpeg" alt="user"/>
												<div class="fileupload btn btn-default">
													<span class="btn-text">Cambiar</span>
													<input class="upload" type="file">
												</div>
											</div>	
											<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">Manuela Botero Mejia</h5>
											<h6 class="block capitalize-font pb-20">Usuario</h6>
										</div>	
											<div class="social-info">
												<button class="btn btn-success btn-block  btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">Editar perfil</span></button>
												<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																<h5 class="modal-title" id="myModalLabel">Editar perfil</h5>
															</div>
															<div class="modal-body">
																<!-- Row -->
																<div class="row">
																	<div class="col-lg-12">
																		<div class="">
																			<div class="panel-wrapper collapse in">
																				<div class="panel-body pa-0">
																					<div class="col-sm-12 col-xs-12">
																						<div class="form-wrap">
																							<form action="#">
																								<div class="form-body overflow-hide">
																									<div class="form-group">
																										<div class="form-group">
																											<label class="control-label mb-10" for="identificacion">Número de identificación</label>
																											<input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="ingrese el número de identificación">
																										</div>
																										<div class="form-group">
																											<label class="control-label mb-10" for="direccion">Dirección</label>
																											<input type="varchar" class="form-control" id="direccion" name="direccion" placeholder="direccion" >
																										</div>
																										<div class="form-group">
																											<label class="control-label mb-10" for="nombre">Nombre</label>
																											<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
																										</div>
																										<div class="form-group">
																											<label class="control-label mb-10" for="apellidos">Apellidos</label>
																											<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" >
																										</div>
																										<div class="form-group">
																											<label class="control-label mb-10" for="telefono">Telefono</label>
																											<input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono" >
																										</div>
																										<div class="form-group">
																											<label class="control-label mb-10" for="usuario">E-mail</label>
																											<input type="email" class="form-control" id="usuario" name="usuario" placeholder="E-mail">
																										</div>
																										<div class="form-group">
																											<label class="pull-left control-label mb-10" for="clave">Contraseña</label>
																											<input type="password" class="form-control" id="clave" name="clave" placeholder="contraseña">
																										</div>
																										<div class="form-group">
																											<label class="pull-left control-label mb-10" for="clave_repetir"> Confirma tu contraseña</label>
																											<input type="password" class="form-control" id="clave_repetir" name="clave_repetir" placeholder="confirma la contraseña">
																										</div>
																									</div>
																								</div>
																								<div class="form-actions mt-10">			
																									<button type="submit" class="btn btn-success mr-10 mb-30" style="text-align:center;">Actualizar perfil</button>
																								</div>				
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														<!--
															<div class="modal-footer">
																<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Actualizar</button>
																<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
															</div>
														-->
														</div>
										
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div  class="panel-body pb-0">
									<div  class="tab-struct custom-tab-1">
										<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
											<li role="presentation" class="active"><a  data-toggle="tab" id="earning_tab_8" role="tab" href="#earnings_8" aria-expanded=""><span>Registro</span></a></li>
										</ul>
										<div class="tab-content" id="myTabContent_8">
											<div  id="earnings_8" class="tab-pane fade active in" role="tabpanel">
												<!-- Row -->
												<div class="row">
													<div class="col-lg-12">
														<form id="example-advanced-form" action="#">
															<div class="table-wrap">
																<div class="table-responsive">
																	<table class="table table-striped display product-overview" id="datable_1">
																		<thead>
																			<tr>
																				<th>Fecha</th>
																				<th>Cantidad</th>
																			</tr>
																		</thead>
																		<tfoot>
																			<tr>
																				<th colspan="2">total:</th>
																				<th></th>
																			</tr>
																		</tfoot>
																		<tbody>
																			<tr>
																				<td>Lunes, 12</td>
																				<td>
																				 3
																				</td>
																			</tr>
																			<tr>
																				<td>Martes, 13</td>
																				<td>
																				 2
																				</td>
																			</tr>
																			<tr>
																				<td>Miercoles, 14</td>
																				<td>
																				 3
																				</td>
																			</tr>
																			<tr>
																				<td>Jueves, 15</td>
																				<td>
																				 5
																				</td>
																			</tr>
																			<tr>
																				<td>Viernes, 15</td>
																				<td>
																				 3
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div  id="settings_8" class="tab-pane fade" role="tabpanel">
												<!-- Row -->
												
											</div>
										</div>
									</div>
								</div>
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
    
	<!-- Vector Maps JavaScript -->
    <script src="../vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="dist/js/vectormap-data.js"></script>
	
	<!-- Calender JavaScripts -->
	<script src="../vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="../vendors/jquery-ui.min.js"></script>
	<script src="../vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="dist/js/fullcalendar-data.js"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<script src="../vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
	<script src="dist/js/skills-counter-data.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="../vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="../vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="dist/js/morris-data.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		
	<!-- Gallery JavaScript -->
	<script src="dist/js/isotope.js"></script>
	<script src="dist/js/lightgallery-all.js"></script>
	<script src="dist/js/froogaloop2.min.js"></script>
	<script src="dist/js/gallery-data.js"></script>
	
	<!-- twitter JavaScript -->
	<script src="dist/js/twitterFetcher.js"></script>
	
	<!-- Spectragram JavaScript -->
	<script src="dist/js/spectragram.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/widgets-data.js"></script>
</body>
</html>