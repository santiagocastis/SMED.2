<?php
    include '../controllers/conexion.php';
     	$db = new conexion();
     	$con = $db->conectar();
        session_start(); 

    if($_POST){
        $usuario=$_POST['usuario']; 
        $telefono=$_POST['telefono']; 
        
        $query=$con->prepare("SELECT * FROM usuario WHERE usuario=:usuario"); 
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR); 
        $query->execute(); 

        $result=$query->fetch(PDO::FETCH_ASSOC); 
        if($telefono == $result['telefono']){
            ?> 
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
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="sp-logo-wrap text-center pa-0 mb-30">
											<a href="index.html">
												<img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
												<span class="brand-text">SMED</span>
											</a>
										</div>
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Cambiar contraseña</h3>
										</div>	
										<div class="form-wrap">
											<form action="#">
                                                <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="exampleInputpwd_1">Contraseña actual</label>
                                                    <input type="password" class="form-control" required="" id="exampleInputpwd_1" value="<?php echo $result['clave']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Contraseña nueva</label>
                                                    <input type="password" class="form-control" required="" id="exampleInputpwd_2">
                                                </div>
                                                <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="exampleInputpwd_3">Repetir contraseña nueva</label>
                                                    <input type="password" class="form-control" required="" id="exampleInputpwd_3">
                                                </div>
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-success btn-rounded">Guardar cambios</button>
                                                </div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
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
            <?php
        }else{
            echo "<script> alert('El correo o telefono son invalidos, por favor intentalo de nuevo'); 	location.href='../Vistas/forgot-password.php'; </script>";
        }
}
?>