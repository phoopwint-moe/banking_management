<?php

namespace Libs\Database;
use PDOException;
use PDO;

class StaffTable
{
     private $db ;

    public function __construct(Mysql $mysql)
    {
         $this->db = $mysql->connect();
    }

    public function check($email, $password)
    {
        try{
            $query = "SELECT * FROM staffs WHERE email = '$email' AND password = '$password'";
            $statement = $this->db->prepare($query);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo $e;
        }
    }

    public function createStaff($data)
    {
        try{
            $query = "INSERT INTO staffs (staff_code, name, phone, email, address, password) 
                    VALUES (:staff_code, :name, :phone, :email, :address, :password)";

            $statement = $this->db->prepare($query);
            $statement->execute($data);

            return $this->db;
        }catch(PDOException $e){
           echo $e;
        }
    }
}