<?php
  if(!isset($_POST['id'])){
    header('location: ../Vistas/usuarios.php');
  }
  include 'conexion.php';
     	$db = new conexion();
     	$con = $db->conectar();
      $clave	= $_POST['clave']; 
          $ide=$_POST['ide'];
          $tipo_identificacion=$_POST['tipo_identificacion']; 
          $identificacion=$_POST['identificacion']; 
          $nombre = $_POST['nombre'];
          $apellidos=$_POST['apellidos']; 
          $telefono = $_POST['telefono'];
          $direccion=$_POST['direccion']; 
          $usuario = $_POST['usuario'];
          $registros = $con->prepare("UPDATE usuario set tipo_identificacion=?, identificacion=?, nombre=?, apellidos=?,telefono=?,direccion=?,usuario=?,clave=? WHERE identificacion=?;"); 
          $resultado=$registros->execute([$tipo_identificacion, $identificacion, $nombre, $apellidos, $telefono, $direccion, $usuario, $clave, $ide]);

?>