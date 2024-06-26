<?php

include '../vendor/autoload.php';

use Helpers\HTTP;
use Libs\Database\Mysql;
use Libs\Database\UserTable;

$table = new UserTable(new Mysql());
$count = count($table->getList());

$data = [
    'user_code' => 'UR0000' . $count+1,
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'email' => $_POST['email'],
    'address' => $_POST['address'],
    'state_code' => $_POST['state_code'],
    'township_code' => $_POST['township_code']
];

if($table->createUser($data)){
         HTTP::redirect('views/UserList.php', 'success=true');
    }else{
    HTTP::redirect('views/createUserPage.php', 'error=true');

    }