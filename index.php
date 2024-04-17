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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Martzo Banking</a>
    
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-5 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-house me-2"></i>General
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">State List</a></li>
            <li><a class="dropdown-item" href="#">Township List</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fa-regular fa-user me-2"></i> Users & Accounts
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">User List</a></li>
            <li><a class="dropdown-item" href="#">Account List</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-credit-card me-2"></i>Transaction
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Transfer</a></li>
            <li><a class="dropdown-item" href="#">Withdraw</a></li>
            <li><a class="dropdown-item" href="#">Deposit</a></li>
          </ul>
        </li>
        <li class="nav-item d-flex">
          <a class="nav-link " href="#"><i class="fa-solid fa-info me-2"></i>History</a>
        </li>
      </ul>
     
    </div>
        <li class="nav-item d-flex ">
          <a class="nav-link " href="./actions/logout.php"><i class="fa-solid fa-door-open me-2"></i>Logout</a>
        </li>

  </div>
</nav>
    <div class="position-relative" id="home">
        <img src="./images/background.jpg" alt="" class="w-100 opacity-50 object-fit-cover" style="height: 95vh;" >

        <h1 class="position-absolute top-50 start-50 translate-middle" style="font-size: 90px;">Welcome from Martzo Banking</h1>
    </div>
</body>
<script src="./js//bootstrap.bundle.min.js"></script>
</html>