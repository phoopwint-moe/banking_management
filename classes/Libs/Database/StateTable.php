<?php

namespace Libs\Database;
use PDOException;
use PDO;

class StateTable
{
    private $db ;

    public function __construct(Mysql $mysql)
    {
         $this->db = $mysql->connect();
    }

    public function createState($data)
    {
        try{
            $query = "INSERT INTO states (state_code, state_name) 
                    VALUES (:state_code, :state_name)";

            $statement = $this->db->prepare($query);
            $statement->execute($data);

            return $this->db;
        }catch(PDOException $e){
           return $e->getMessage();
        }
    }

    public function getList()
    {
        try{
            $statement = $this->db->query("SELECT * FROM states");

            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return $e->getMessage();
        }
      
    }
}

