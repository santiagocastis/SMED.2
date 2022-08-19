<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>registrar_usuario</title>
</head>
<body>
	<?php
	 	require 'conexion.php';
     	$db = new conexion();
     	$con = $db->conectar();
		if($_POST){
    	    $clave	= $_POST['clave']; 
			$clave_repetir=$_POST['clave_repetir']; 
			if ($clave==$clave_repetir) {
				$tipo_identificacion=$_POST['tipo_identificacion']; 
				$id_rol=$_POST['id_rol'];
		    	$identificacion=$_POST['identificacion'];
		    	$nombre = $_POST['nombre'];
				$apellidos=$_POST['apellidos']; 
				$telefono = $_POST['telefono'];
				$direccion=$_POST['direccion']; 
				$usuario = $_POST['usuario'];
				$sql = $con->prepare("INSERT INTO usuario(tipo_identificacion, identificacion, nombre, apellidos, telefono, direccion, usuario, clave, id_rol) VALUES (:tipo_identificacion, :identificacion, :nombre, :apellidos, :telefono, :direccion, :usuario, :clave, :id_rol)");
   				$resultado = $sql->execute(array('tipo_identificacion'=>$tipo_identificacion, 'identificacion'=>$identificacion, 'nombre'=>$nombre, 'apellidos'=>$apellidos, 'telefono'=>$telefono, 'direccion'=>$direccion, 'usuario'=>$usuario, 'clave'=> $clave, 'id_rol'=>$id_rol));
				echo"<script> alert('Registro exitoso'); window.history.go(-2);</script>"; 
			}else{
				echo"<script> alert('las contraseñas no son iguales, por favor intentalo de nuevo'); window.history.back();</script>"; 
			}
		}
	?>
</body>
</html>