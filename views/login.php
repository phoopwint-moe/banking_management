<?php 
include '../vendor/autoload.php';

include '../classes/Libs/Database/seeders/DataSeeding.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css//bootstrap.min.css">
</head>
<body>
    <div class="position-relative" id="home">
        <img src="../images//background.jpg" alt="" class="w-100 opacity-50 object-fit-cover" style="height: 100vh;" >

        <div class="card position-absolute top-50 start-50 translate-middle bg-dark bg-opacity-50 col-md-4">
            <form action="../actions//login.php" method="post" class="my-3 px-5">
                <h3 class="text-center text-white my-4">Login</h3>
                <?php if(isset($_GET['register'])):?>
                    <div class="alert alert-success align-items-center" role="alert">        
                    <div>
                       successfully created! login please...
                    </div>
                </div>
                <?php endif ?>

                <?php if(isset($_GET['error'])):?>
                    <div class="alert alert-danger align-items-center" role="alert">        
                    <div>
                       Something is incorrect! try again ..
                    </div>
                </div>
                <?php endif ?>

                 <div class="my-4 ">
                    <input type="email" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="email" placeholder="Enter your email...">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="password" placeholder="Enter your password...">
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-light col-9 rounded-pill">Login</button>
                </div>

                <div class="text-center mt-3">
                    <span class="text-light">Don't have an account?</span>
                    <b> <a href="./views/register.php" class="text-light">Register</a></b>
                   
                </div>
            </form>
        </div>
    </div>

</body>
</html>