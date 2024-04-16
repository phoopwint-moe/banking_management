

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="position-relative" id="home">
        <img src="../images//background.jpg" alt="" class="w-100 opacity-50 object-fit-cover" style="height: 100vh;" >
        
        <div class="card position-absolute top-50 start-50 translate-middle bg-dark bg-opacity-50 col-md-4">
            <form action="../actions/createStaff.php" method="post" class="my-3 px-5">
                <h3 class="text-center text-white my-3">Register</h3>

                <?php if(isset($_GET['error'])):?>
                    <div class="alert alert-danger align-items-center" role="alert">        
                    <div>
                       email and password are already exist! Try with another..
                    </div>
                </div>
                <?php endif ?>
                <div class="my-4 ">
                    <input type="text" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="name" required placeholder="Enter your name...">
                </div>

                <div class="my-4 ">
                    <input type="number" id="numberInput" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="phone" required placeholder="Enter your phone...">
                </div>

                 <div class="my-4 ">
                    <input type="email" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="email" required placeholder="Enter your email...">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="password" required placeholder="Enter your password...">
                </div>

                <div class="mb-4">
                    <textarea name="address" class="form-control bg-white bg-opacity-25 rounded px-4" cols="30" rows="5" required placeholder="Enter your address..."></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-light col-9 rounded-pill">Register</button>
                </div>

                <div class="text-center mt-3">
                    <span class="text-light">have already account?</span>
                    <b> <a href="../index.php" class="text-light">Login</a></b>
                </div>
            </form>
        </div>
    </div>

    <!-- <form action="" method="post">
        <button type="submit" name="register" class="btn btn-success">Click to register</button>
    </form> -->
</body>
</html>

<script>
  const input = document.getElementById('numberInput');

  input.addEventListener('input', function() {
    if (this.value.length > 4) {
      this.value = this.value.slice(0, 11); // Limiting to 4 characters
    }
  });
</script>

