<?php
namespace clases_pdo;
class config extends \PDO{
    private $typeDB = 'mysql';
    private $host = 'db4free.net';
    private $dbname = 'actas2_1';
    private $userDB = 'andrey08';
    private $passwordDB = '7ecn0l061a';
    
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