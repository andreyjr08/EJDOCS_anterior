<?php 
namespace clases_pdo;
require("CADENA/config.php");
class funcionLog{
    private $usuario;
    private $contra;
    private $pdo;
    public function __construct(){
    $this->pdo = new config();
    }
    public function log($usuario,$contra){
        $pdo = $this->pdo;
        $sql = "SELECT * FROM log WHERE CEDULA = '$usuario' AND CONTRASENA= '$contra'";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute();
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
        /*$query = $pdo->query($sql);
        $resultQuery = $query->execute();
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $query;*/
    }
}
 ?>