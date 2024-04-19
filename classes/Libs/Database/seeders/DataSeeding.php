<?php
include '../vendor/autoload.php';

use Libs\Database\StateTable;
use Libs\Database\TownshipTable;
use Libs\Database\UserTable;
use Libs\Database\Mysql;

$json_states_data = file_get_contents(__DIR__.'/json/State.json');
$states_data = json_decode($json_states_data, true);

$json_townships_data = file_get_contents(__DIR__.'/json/Township.json');
$townships_data = json_decode($json_townships_data, true);

$json_users_data = file_get_contents(__DIR__.'/json/User.json');
$users_data = json_decode($json_users_data, true);


$state_table = new StateTable(new Mysql());

if($state_table){
    $row = count($state_table->getList());
    if($row == 0){
        foreach($states_data as $state){
        $data = [
            'state_code' => $state['StateCode'],
            'state_name' => $state['StateName']
        ];

        $state_table->createState($data);
    }   
    }

    
}

$township_table = new TownshipTable(new Mysql());

if($township_table){
    $row = count($township_table->getList());
    if($row == 0){
        foreach($townships_data as $township){
        $data = [
            'township_code' => $township['TownshipCode'],
            'township_name' => $township['TownshipName'],
            'state_code' => $township['StateCode']
        ];

        $township_table->createTownship($data);
    }   
    }

    
}

$user_table = new UserTable(new Mysql());
if($user_table){
    $row = count($user_table->getList());
    
    if($row == 0){
        foreach($users_data as $user){
            $randomKey = array_rand($townships_data);
            $randomValue = $townships_data[$randomKey];
            $data = [
                'user_code' => $user['UserCode'],
                'name' => $user['FullName'],
                'phone'=> $user['MobileNo'],
                'email' => $user['Email'],
                'address' => $user['Address'],
                'state_code' => $randomValue['StateCode'],
                'township_code' => $randomValue['TownshipCode']
            ];
            $user_table->createUser($data);
        }
    }
}

