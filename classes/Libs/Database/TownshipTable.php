<?php

namespace Libs\Database;
use PDOException;
use PDO;

class TownshipTable
{
    private $db ;

    public function __construct(Mysql $mysql)
    {
         $this->db = $mysql->connect();
    }

    public function createTownship($data)
    {
        try{
            $query = "INSERT INTO townships (township_code, township_name, state_code) 
                    VALUES (:township_code, :township_name, :state_code)";

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
            $statement = $this->db->query("SELECT * FROM townships");

            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return $e->getMessage();
        }
      
    }
}

