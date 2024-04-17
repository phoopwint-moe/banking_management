<?php

include './vendor/autoload.php';

use Helpers\Auth;


Auth::check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php include './views/header.php'?>
    <div class="position-relative" id="home">
        <img src="./images/background.jpg" alt="" class="w-100 opacity-50 object-fit-cover" style="height: 95vh;" >

        <h1 class="position-absolute top-50 start-50 translate-middle" style="font-size: 90px;">Welcome from Martzo Banking</h1>
    </div>
</body>
</html>