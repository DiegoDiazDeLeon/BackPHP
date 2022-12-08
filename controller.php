<?php
    class Controller{
        public function GetProducts(){
            try{
                $list=array();
                $conexion= new conexion();
                $db=$conexion->getConexion();
                $query ="SELECT * FROM materias";
                $statement = $db -> prepare($query);
                $statement ->execute();


                while($row =$statement->fetch()){
                    $list[]=array(  
                        "Materia" => $row['Materia'],
                        "Semestre" => $row['Semestre']
                    );
                }
                return $list;
            }
            catch(PDOException $e)
            {
                echo("error");
            }
        }

        public function addProducts($data)
        {
                    try{
                    $Semestre = $data['Semestre'];
                    $Materia = $data['Materia'];
                    $conexion = new Conexion();
                    $db = $conexion->getConexion();
                    $query = "INSERT INTO materias (Materia, Semestre) VALUES (:name,:Materia,:Semestre)";
                    $statement = $db->prepare($query);
                    $statement->bindParam(":Materia", $Materia);
                    $statement->bindParam(":Semestre", $Semestre);
                    $result = $statement->execute();
                    if($result){
                       return "successfully";
                    }
                     return "error!";
              
                   } 
                   catch (PDOException $e) {
                    echo "¡Error!: " . $e->getMessage() . "<br/>";
                 }
    
    
    
            
        }

    }
?>