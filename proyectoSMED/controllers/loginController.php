<?php
    require 'conexion.php';
     	$db = new conexion();
     	$con = $db->conectar();
        session_start(); 
        /*session_start(); 
        if(!isset($_SESSION(id))){
            llevarlo al login
        }
        $id = $_SESSION["id"];	*/
        $usuario=$_POST['usuario']; 
        $clave=$_POST['clave']; 
    if($_POST){
        $query=$con->prepare("SELECT * FROM usuario WHERE usuario=:usuario"); 
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR); 
        $query->execute(); 

        $result=$query->fetch(PDO::FETCH_ASSOC); 
   
        if($clave === $result['clave']){
            echo "clave correcta";
            $_SESSION['user_name'] = $result['nombre'];
            $_SESSION['rol'] = $result['id_rol'];
            $_SESSION['usuario'] = $result['usuario'];
            $_SESSION['id'] = $result['id'];
            // $_SESSION['JAC'] = $result[]
            if ($result['id_rol']==1){
                header("HTTP/1.1 302 Moved Temporarily"); 
                header("Location: ../Vistas/index.php"); 
            }else if($result['id_rol']==2){
                header("HTTP/1.1 302 Moved Temporarily"); 
                header("Location: ../Vistas/registro.php");
            }else{
                header("HTTP/1.1 302 Moved Temporarily"); 
                header("Location: ../Vistas/indexadmin.php");
            }
            echo "Login correcto";
            
        }else{
            echo "<script> alert('El correo o contraseña son invalidos, por favor intentalo de nuevo'); 	location.href='../Vistas/login.php'; </script>";
        }
    }else{
        echo "no isset login";
    }
?>