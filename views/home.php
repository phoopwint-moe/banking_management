<?php

include '../vendor/autoload.php';

use Helpers\Auth;

session_start();

Auth::check();

echo 'heehee';