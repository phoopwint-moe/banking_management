<?php

include '../vendor/autoload.php';

use Helpers\HTTP;
use Libs\Database\Mysql;
use Libs\Database\UserTable;

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $table = new UserTable(new Mysql());
    $table->delete($id);

    HTTP::redirect('views/UserList.php', 'deleteSuccess=true');
}

