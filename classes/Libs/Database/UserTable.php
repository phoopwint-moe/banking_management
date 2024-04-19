<?php

namespace Libs\Database;
use PDOException;
use PDO;

class UserTable
{
    private $db ;

    public function __construct(Mysql $mysql)
    {
         $this->db = $mysql->connect();
    }

    public function createUser($data)
    {
        try{
            $query = "INSERT INTO users (user_code, name, phone, email, address, state_code, township_code) 
                    VALUES (:user_code, :name, :phone, :email, :address, :state_code, :township_code)";

            $statement = $this->db->prepare($query);
            $statement->execute($data);

            return $this->db;
        }catch(PDOException $e){
           echo $e;
        }
    }

    public function getList()
    {
        try{
            $statement = $this->db->query("SELECT * FROM users");

            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return $e->getMessage();
        }
      
    }

     public function delete($id)
    {
        try{
            $this->db->query("DELETE  FROM users WHERE id='$id'");

        }catch(PDOException $e){
            return $e->getMessage();
        }
      
    }

    public function updateData($id)
    {
        try{
            $statement = $this->db->query("SELECT * FROM users WHERE id='$id'");

            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return $e->getMessage();
        }
      
    }

    public function updateUser($data, $id)
    {
        try{
            $query = "UPDATE users SET name= :name, phone= :phone, email= :email, address= :address, state_code= :state_code, township_code= :township_code WHERE id='$id'";

            $statement = $this->db->prepare($query);
            $statement->execute($data);

            return $this->db;
        }catch(PDOException $e){
           echo $e;
        }
    }
}