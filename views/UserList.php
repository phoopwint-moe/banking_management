<?php 
include '../vendor/autoload.php';
 use Libs\Database\Mysql;
 use Libs\Database\UserTable;
 use Helpers\Auth;

 Auth::check();

    $table = new UserTable(new Mysql());
    $users = $table->getList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    
    
</head>
<body>
    <?php include './header.php'?>

   <div class="container my-5">
    <h1 class="mb-5">User List</h1>

    <button class="btn btn-success mb-5  col-3 ">Add User</button>
     <table id="userTable" class="display border">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">USER CODE</th>
            <th class="text-center">Name</th>
            <th class="text-center">PHONE</th>
            <th class="text-center">EMAIL</th>
            <th class="text-center">ADDRESS</th>
            <th class="text-center">STATE CODE</th>
            <th class="text-center">TOWNSHIP CODE</th>
            <th class="text-center">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user) {?>
        <tr>
            <td class="text-center "><?php echo $user->id?></td>
            <td class="text-center "><?php echo $user->user_code?></td>
            <td class="text-center "><?php echo $user->name?></td>
            <td class="text-center "><?php echo $user->phone?></td>
            <td class="text-center "><?php echo $user->email?></td>
            <td class="text-center "><?php echo $user->address?></td>
            <td class="text-center "><?php echo $user->state_code?></td>
            <td class="text-center "><?php echo $user->township_code?></td>
            <td class="text-center">
                <a href="#" class="text-secondary me-2"><i class="fa-solid fa-pencil"></i></a>
                <a href="#" class="text-danger"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
   </div>

</body>

</html>
<script>
    $(document).ready( function () {
    $('#userTable').DataTable();
} );
</script>