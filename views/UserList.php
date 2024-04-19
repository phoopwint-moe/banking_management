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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>
    <?php include './header.php'?>

   <div class="container my-5">
    <h1 class="mb-5">User List</h1>

    <div class="row">
    <a href="./createUserPage.php" class="btn btn-success mb-5 col-3 ">Add User</a>
    <?php if(isset($_GET['success'])):?>
        <div class="alert alert-success alert-dismissible fade show col-3 offset-6 " role="alert">
        User created success!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif?>

    <?php if(isset($_GET['updateSuccess'])):?>
        <div class="alert alert-success alert-dismissible fade show col-3 offset-6 " role="alert">
        User updated success!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif?>

    <?php if(isset($_GET['deleteSuccess'])):?>
        <div class="alert alert-danger alert-dismissible fade show col-3 offset-6 " role="alert">
        User deleted success!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif?>
    </div>
    
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
                <a href="./updateUserPage.php?id=<?php echo $user->id?>" class="text-secondary me-2"><i class="fa-solid fa-pencil"></i></a>
                <a href="../actions/deleteUser.php?delete=<?php echo $user->id?>" class="text-danger" ><i class="fa-solid fa-trash-can"></i></a>
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