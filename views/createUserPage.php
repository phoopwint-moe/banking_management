<?php
include '../vendor/autoload.php';

use Helpers\Auth;
use Libs\Database\Mysql;
use Libs\Database\StateTable;

Auth::check();

$state_table = new StateTable(new Mysql());
$states = $state_table->getList();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <?php include './header.php'?>
   
     <div class="card shadow  col-md-4 mx-auto my-5">
            <form action="../actions/createUser.php" method="post" class="my-3 px-5">
                <h3 class="text-center my-3">Add User</h3>

                <?php if(isset($_GET['error'])):?>
                    <div class="alert alert-danger align-items-center" role="alert">        
                    <div>
                       something was wrong! try again...
                    </div>
                </div>
                <?php endif ?>
                <div class="my-4 ">
                    <input type="text" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="name" required placeholder="Enter user name...">
                </div>

                <div class="my-4 ">
                    <input type="number" id="numberInput" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="phone" required placeholder="Enter user phone...">
                </div>

                 <div class="my-4 ">
                    <input type="email" class="form-control bg-white bg-opacity-25 rounded-pill px-4" name="email" required placeholder="Enter user email...">
                </div>

                <div class="mb-4">
                    <textarea name="address" class="form-control bg-white bg-opacity-25 rounded px-4" cols="30" rows="5" required placeholder="Enter user address..."></textarea>
                </div>

                <div class="my-4 ">
                    <select class="form-select" name="state_code" id="state" aria-label="Default select example">
                        <option selected disabled>State name</option>
                        <?php foreach($states as $state) {
                            echo "<option value='$state->state_code'>$state->state_name</option>";
                        }?>
                        
                    </select>
                </div>

                <div class="my-4 ">
                    <select class="form-select" name="township_code" id="township" aria-label="Default select example">
                        <option selected disabled>Township name</option>
                        
                    </select>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-dark col-9 rounded-pill">Add user</button>
                </div>

            </form>
        </div>

</body>
<script>
    const input = document.getElementById('numberInput');

  input.addEventListener('input', function() {
    if (this.value.length > 4) {
      this.value = this.value.slice(0, 11); // Limiting to 4 characters
    }
  });
$(document).ready(function(){
  $('#state').change(function(){
    var selectState = $(this).val();
    $.ajax({
      url: '../actions/getAddressCodeOption.php',
      type: 'post',
      data: {selectState: selectState},
      dataType: 'json',
      success:function(response){
        var len = response.length;
        console.log(len);
        $("#township").empty();
        for( var i = 0; i<len; i++){
          var id = response[i]['township_code'];
          var name = response[i]['township_name'];
          $("#township").append("<option value='"+id+"'>"+name+"</option>");
        }
      }
    });
  });
});
</script>
</html>