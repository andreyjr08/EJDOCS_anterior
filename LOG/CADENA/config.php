<?php
namespace clases_pdo;
class config extends \PDO{
    private $typeDB = 'mysql';
    private $host = 'localhost';
    private $dbname = 'actas2.1';
    private $userDB = 'root';
    private $passwordDB = '';
    
    public function __construct(){
        try {
            parent::__construct("$this->typeDB:host=$this->host;dbname=$this->dbname",$this->userDB,$this->passwordDB);
            $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);    
        } catch (Exception $e) {
            echo "DATA BASE ERROR:".$e->getMessage();
        }
    }
}
?>