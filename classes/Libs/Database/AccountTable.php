<?php

namespace Libs\Database;
use PDOException;

class AccountTable
{
    private $db ;

    public function __construct(Mysql $mysql)
    {
         $this->db = $mysql->connect();
         return $this->db;
    }
}

