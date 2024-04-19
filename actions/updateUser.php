<?php

include '../vendor/autoload.php';

use Helpers\HTTP;
use Libs\Database\Mysql;
use Libs\Database\UserTable;

$table = new UserTable(new Mysql());
$count = count($table->getList());

$data = [
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'email' => $_POST['email'],
    'address' => $_POST['address'],
    'state_code' => $_POST['state_code'],
    'township_code' => $_POST['township_code']
];

if($table->updateUser($data, $_POST['id'])){
         HTTP::redirect('views/UserList.php', 'updateSuccess=true');
    }else{
    HTTP::redirect('views/updateUserPage.php', 'error=true');

    }