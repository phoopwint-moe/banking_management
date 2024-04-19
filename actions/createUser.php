<?php

include '../vendor/autoload.php';

use Helpers\Auth;

if(Auth::check()){
    echo 'heehee';
}