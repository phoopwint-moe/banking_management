<?php
include("../vendor/autoload.php");

use Libs\Database\StaffTable;
use Libs\Database\Mysql;
use Helpers\HTTP;

$table = new StaffTable(new Mysql());
// validate email and password already exit or not
$check = $table->check($_POST['email'], md5($_POST['password']));


$data = [
    'staff_code' => 'Sta'. rand()* 1000001,
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'email' => $_POST['email'],
    'address' => $_POST['address'],
    'password' => md5($_POST['password'])
];

if(count($check) == 0){
    if($table->createStaff($data)){
         HTTP::redirect('index.php', 'register=true');
    }else{
    HTTP::redirect('views/register.php', 'error=true');
}

}else{
     HTTP::redirect('views/register.php', 'error=true');
}


?>