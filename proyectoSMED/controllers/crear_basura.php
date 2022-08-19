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
    	    $id_tipo_basura= $_POST['id_tipo_basura']; 
			$cantidad=$_POST['cantidad']; 
			$fecha=$_POST['fecha'];
            $id_usuario=$_POST['id_usuario'];
			$sql = $con->prepare("INSERT INTO registro_basura(cantidad, fecha, id_tipo_basura, id_usuario) VALUES (:cantidad, :fecha, :id_tipo_basura, :id_usuario)");
   				$resultado = $sql->execute(array('cantidad'=>$cantidad, 'fecha'=>$fecha, 'id_tipo_basura'=>$id_tipo_basura, 'id_usuario'=>$id_usuario));
				echo"<script> alert('Registro exitoso'); window.history.go(-2);</script>"; 
			}else{
				echo"<script> alert('las contraseñas no son iguales, por favor intentalo de nuevo'); window.history.back();</script>"; 
			}
	?>
</body>
</html>