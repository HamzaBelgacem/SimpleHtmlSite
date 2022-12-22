<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome! <span><?php echo $_SESSION['username'];?></span></h1>
    <a href="deconnexion.php">deconnexion</a>
</body>
</html>