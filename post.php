<?php
require("conexion.php");
require("cors.php");
$data=json_decode(file_get_contents('php://input'),true);
$Materia = $data['Materia'];
$Semestre = $data['Semestre'];
$conexion = new Conexion();
$query = "INSERT INTO materias (Materia,Semestre) VALUES(:Materia,:Semestre)";
$db = $conexion->getConexion();
$statement = $db->prepare($query);
//$statement->bindParam(":IDBanda", $IDBanda);
$statement->bindParam(":Materia", $Materia);
$statement->bindParam(":Semestre", $Semestre);


$result = $statement->execute();
if ($result) {
    return "Dado de alta correctamente";
}
return "ERROR";
?>