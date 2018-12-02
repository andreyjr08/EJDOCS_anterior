<?php
namespace clases_pdo;
include("../../../LOG/CADENA/config.php");
class funciones{

     public function __construct(){
        $this->pdo = new config();
    }
public function departamentos(){
        $pdo = $this->pdo;
        $sql = "SELECT * FROM departamentos ORDER BY NOMBRE DESC";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
}

                
                $departamento= $queryResult;
                session_start();
                $departa_total= $request['departa_total'];
                $_SESSION['departa_total']=$departamento;


}  
?>