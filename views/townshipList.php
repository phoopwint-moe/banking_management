<?php 
include '../vendor/autoload.php';
 use Libs\Database\Mysql;
 use Libs\Database\TownshipTable;
 use Helpers\Auth;

 Auth::check();

    $table = new TownshipTable(new Mysql());
    $townships = $table->getList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Township List</title>
    
</head>
<body>
    <?php include './header.php'?>

   <div class="container my-5">
    <h1 class="mb-5">Township List</h1>
     <table id="townshipTable" class="display border">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">TOWNSHIP CODE</th>
            <th class="text-center">TOWNSHIP NAME</th>
            <th class="text-center">STATE CODE</th>
          
        </tr>
    </thead>
    <tbody>
        <?php foreach($townships as $township) {?>
        <tr>
            <td class="text-center "><?php echo $township->id?></td>
            <td class="text-center "><?php echo $township->township_code?></td>
            <td class="text-center "><?php echo $township->township_name?></td>
            <td class="text-center "><?php echo $township->state_code?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
   </div>

</body>

</html>
<script>
    $(document).ready( function () {
    $('#townshipTable').DataTable();
} );
</script>