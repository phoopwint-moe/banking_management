<?php
include '../vendor/autoload.php';
use Helpers\HTTP;

session_start();
session_unset();
session_destroy();

setcookie('user', '', time() - 3600, '/');

HTTP::redirect('index.php');

