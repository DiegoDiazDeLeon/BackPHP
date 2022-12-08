<?php
    class conexion{
        public static function getConexion(){
            $server="localhost";
            $db = "bd_materias";
            $user="root";
            $password="Pipoytedy7*";
            $con="";


            try{
                $con=new PDO("mysql:host=$server;dbname=$db",$user,$password);
                //echo "Se concecto de manera correcrat la conexion";
            }
            catch(PDOException $exp){
                echo ("no se logro conectar correctamente");
            } 
            return $con;
        }

    }
?>