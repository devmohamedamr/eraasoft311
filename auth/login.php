<?php
session_start();
$email = "mohamed@email.com";
$password = 1234;



if(isset($_POST['email'])){
    
    if($_POST['email'] == $email && $_POST['password'] == $password){
        $_SESSION['auth'] = true;

        header("location: home.php");
    }

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
    <form action="login.php" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>