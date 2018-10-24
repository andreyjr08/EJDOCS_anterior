<?php
namespace clases_pdo;
include("config.php");
class funciones{
//---------persona---------------
    private $id;
    private $para;
    private $cedula;
    private $de;
    private $asunto;
    private $computadorPK;
    private $celularPK;
//---------computador---------------
    private $computador;
    private $activo_fijo;
    private $serial;
    private $procesador;
    private $memoria_ram;
    private $serial_cargador;

     public function __construct(){
        $this->pdo = new config();
    }
        public function addUser($para, $cedula,$de, $asunto, $computadorPK, $celularPK){
        $this->PARA = $para;
        $this->CEDULA = $cedula;
        $this->DE= $de; 
        $this->ASUNTO = $asunto;
        $this->COMPUTADOR_ID = $computadorPK;
        $this->CELULAR_ID = $celularPK;
        $result = $this->Insertar();
        return $result;
    }
     private function Insertar(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO acta (PARA, CEDULA, DE, ASUNTO, COMPUTADOR_ID,CELULAR_ID) VALUES (:para, :cedula, :de, :asunto, :computadorPK, :celularPK)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'para' => $this->PARA,
            'cedula' => $this->CEDULA,
            'de' => $this->DE,
            'asunto' => $this->ASUNTO,
            'computadorPK' => $this->COMPUTADOR_ID,
            'celularPK' => $this->CELULAR_ID,
            ]);
            return $result;
        }
        public function addComp($computador, $activo_fijo,$serial, $procesador, $memoria_ram, $serial_cargador){
        $this->COMPUTADOR = $computador;
        $this->ACTIVO_FIJO = $activo_fijo;
        $this->SERIAL= $serial; 
        $this->PROCESADOR = $procesador;
        $this->MEMORIA_RAM = $memoria_ram;
        $this->SERIAL_CARGADOR = $serial_cargador;
        $result = $this->InsertarC();
        return $result;
    }
     private function InsertarC(){
        $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO computador (COMPUTADOR, ACTIVO_FIJO, SERIAL, PROCESADOR, MEMORIA_RAM,SERIAL_CARGADOR) VALUES (:computador, :activo_fijo, :serial, :procesador, :memoria_ram, :serial_cargador)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'computador' => $this->COMPUTADOR,
            'activo_fijo' => $this->ACTIVO_FIJO,
            'serial' => $this->SERIAL,
            'procesador' => $this->PROCESADOR,
            'memoria_ram' => $this->MEMORIA_RAM,
            'serial_cargador' => $this->SERIAL_CARGADOR,
            ]);
            return $result;
        }
        public function select_persons(){
        $pdo = $this->pdo;
        $sql = "SELECT A.ID,A.PARA, A.CEDULA, A.DE, A.ASUNTO, A.COMPUTADOR_ID, A.CELULAR_ID,CO.COMPUTADOR FROM acta A INNER JOIN computador CO ON A.COMPUTADOR_ID = CO.ID";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
    public function select_comp(){
        $pdo = $this->pdo;
        $sql = "SELECT MAX(ID) cp, COMPUTADOR FROM computador";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
    public function select_cel(){
        $pdo = $this->pdo;
        $sql = "SELECT MAX(ID) cl FROM celular";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
    public function select_All($id){
        $pdo = $this->pdo;
        $sql = "SELECT MAX(A.ID) A, MAX(C.ID) C, A.PARA, A.CEDULA,A.DE,A.ASUNTO,C.COMPUTADOR, C.ACTIVO_FIJO,C.SERIAL,C.PROCESADOR,C.MEMORIA_RAM,C.SERIAL_CARGADOR FROM acta A INNER JOIN computador C ON A.COMPUTADOR_ID = $id";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute();
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
      public function deleteUser($id){
        $pdo = $this->pdo;
        $sql = "DELETE FROM actas WHERE ID= :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'ID' => $id
            ]);
        return $result;
    }
     public function select_person($id){
        $pdo = $this->pdo;
        $sql = "SELECT * FROM computador WHERE id = :id";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute([
            'id' => $id
            ]);
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    public function infoActualiza($id,$para, $cedula,$de, $asunto){
        $this->ID = $id;
        $this->PARA = $para;
        $this->CEDULA = $cedula;
        $this->DE= $de; 
        $this->ASUNTO = $asunto;
        $result = $this->actualizar();
        return $result;
    }
     private function actualizar(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "UPDATE acta SET PARA = :para, CEDULA= :cedula, DE= :de, ASUNTO=:asunto WHERE ID= :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'id' => $this->ID,
            'para' => $this->PARA,
            'cedula' => $this->CEDULA,
            'de' => $this->DE,
            'asunto' => $this->ASUNTO,
            ]);
            return $result;
        }
    
}
?>