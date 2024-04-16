<?php
namespace Libs\Database;
use PDO;
use PDOException;

class Mysql
{
    private $db;
    public function connect(){
        try{
            $this->db = new PDO("mysql:host=127.0.0.1;dbname=banking_db", 'root', '');

            return $this->db;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}