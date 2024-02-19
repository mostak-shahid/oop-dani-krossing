<?php include_once 'includes/class-autoload.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $users = new UsersView();
    $users->showUsers();
    // $users = new UsersController();
    // $users->createUser('GR', 'Tapu', '1999-01-02');
    ?>
</body>
</html>