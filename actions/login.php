<?php

include '../vendor/autoload.php';

use Libs\Database\StaffTable;
use Libs\Database\Mysql;
use Helpers\HTTP;

session_start();

$table = new StaffTable(new Mysql());
// validate email and password already exit or not
$user = $table->check($_POST['email'], md5($_POST['password']));



if(count($user) == 0){
  HTTP::redirect('index.php', 'error=true');
}else{
    $_SESSION['user'] = $user[0];

    setcookie('user', serialize($user[0]),  time() + (86400 * 30), "/");

    $_SESSION['login'] = true;

    HTTP::redirect('views/home.php');
}


