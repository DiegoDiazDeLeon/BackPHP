<?php

require("./conexion.php");
    $data = json_decode(file_get_contents('php://input'), true);  
       $Materia = $data['Materia'];
       $conexion = new Conexion();
       $db = $conexion->getConexion();
       $query = "DELETE FROM materias WHERE Materia=:Materia";
       $statement = $db->prepare($query);
       $statement->bindParam(':Materia', $id);
       $result = $statement->execute();
       if($result){
         return "removed";
       }
       return "error!";  
?>