<?php
    class conexion{
        private $hostname ='localhost'; 
        private $database ='smed'; 
        private $user='root'; 
        private $password=''; 
        private $chatset ='utf8'; /*caracteres especiales*/
    
    function conectar(){
        try {
        
            $pdo="mysql:host=".$this->hostname."; dbname=".$this->database.";charset=".$this->chatset; 
            $option=[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_EMULATE_PREPARES=>false,
            ];
            $pdo = new PDO($pdo, $this->user, $this->password, $option); 
            return $pdo; 
        } catch (PDOexception $error){
            echo "no se pudo conectar".$error->getMessage(); 
            exit; 
        }
    }
}
?>
    