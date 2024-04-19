<?php 
include '../vendor/autoload.php';
 use Libs\Database\Mysql;
 use Libs\Database\StateTable;
 use Helpers\Auth;

 Auth::check();

    $table = new StateTable(new Mysql());
    $states = $table->getList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State List</title>
    
</head>
<body>
    <?php include './header.php'?>

   <div class="container my-5">
    <h1 class="mb-5">State List</h1>
     <table id="stateTable" class="display border">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">STATE CODE</th>
            <th class="text-center">STATE NAME</th>
          
        </tr>
    </thead>
    <tbody>
        <?php foreach($states as $state) {?>
        <tr>
            <td class="text-center "><?php echo $state->id?></td>
            <td class="text-center "><?php echo $state->state_code?></td>
            <td class="text-center "><?php echo $state->state_name?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
   </div>

</body>

</html>
<script>
    $(document).ready( function () {
    $('#stateTable').DataTable();
} );
</script>