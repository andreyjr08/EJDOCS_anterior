<?php
namespace clases_pdo;
include("../../../LOG/CADENA/config.php");
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
    //--------------CONSULTA PARA LISTAS DESPLEGABLES------------

    //--------------LISTA USUARIOS
        public function usuarios()
        {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM usuarios ORDER BY NOMBRES DESC";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        }
    //--------------LISTA DEPARTAMENTOS
        public function departamentos(){
        $pdo = $this->pdo;
        $sql = "SELECT NOMBRE FROM departamentos ORDER BY NOMBRE DESC";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
 echo "hola mundo";
        $departamento= $queryResult;
                session_start();
                $departa_total= $request['departa_total'];
                $_SESSION['departa_total']=$departamento;
}



    //--------------FIN DE LA CONSULTA
     private function Insertar(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO actas (PARA, CEDULA, DE, ASUNTO, COMPUTADOR_ID,CELULAR_ID) VALUES (:para, :cedula, :de, :asunto, :computadorPK, :celularPK)";
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
        //recopilacion de datos para ejecutar la insercion de un nuevo computador
        public function añadirComputador($computador, $activo_fijo,$serial, $procesador, $memoria_ram, $serial_cargador){
        $this->COMPUTADOR = $computador;
        $this->ACTIVO_FIJO = $activo_fijo;
        $this->SERIAL= $serial; 
        $this->PROCESADOR = $procesador;
        $this->MEMORIA_RAM = $memoria_ram;
        $this->SERIAL_CARGADOR = $serial_cargador;
        $result = $this->InsertarC();
        return $result;
    }
    //consulta sql para insertar nuevo computador
     private function InsertarComputador(){
        $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO computador (SERIAL, ACTIVO_FIJO, PROCESADOR, MEMORIA_RAM, SERIAL_CARGADOR,MODELO_ID,ACTA_ID) VALUES (:serial, :activo_fijo, :procesador, :memoria_ram, :serial_cargador,modelo_id,acta_id)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'serial' => $this->SERIAL,
            'activo_fijo' => $this->ACTIVO_FIJO,
            'procesador' => $this->PROCESADOR,
            'memoria_ram' => $this->MEMORIA_RAM,
            'serial_cargador' => $this->SERIAL_CARGADOR,
            'modelo_id' => $this->MODELO_ID,
            'acta_id' => $this->ACTA_ID,
            ]);
            return $result;
        }
        public function select_persons(){
        $pdo = $this->pdo;
        $sql = "SELECT A.ID,A.USUARIO_ID, A.CREADO_POR FROM actas A INNER JOIN computadores CO ON CO.ACTA_ID = A.ID";
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