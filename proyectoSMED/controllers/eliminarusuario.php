<?php
    print_r($_GET);
    $ide=$_POST['ide']; 
    $codigo=$_GET['id'];
    include 'conexion.php';
    $db = new conexion();
    $con = $db->conectar();
    $registros = $con->prepare("DELETE FROM usuario where identificacion=?;"); 
    $resultado=$registros->execute([$codigo]);
    if(!isset($_POST['id'])){
        header('location: ../Vistas/usuarios.php');
      }
    if(!$resultado){
        echo "<script>alert(no se pudo eliminar el usuario)</script>";
    }else{
        echo "<script>alert(no se pudo eliminar el usuario)</script>";
    }
    
    
?>
