<?php


// if($_SERVER['REQUEST_METHOD'] == "POST")
// {   
//     $name = $_POST['category'];
//     $connection =  mysqli_connect("localhost","root","","eraasoft_311");

// // 2 
//     $sql = "INSERT INTO `category` (name) values ('$name')";
//     mysqli_query($connection,$sql);
//     echo  mysqli_affected_rows($connection);
// }

// mysqli 
// 1



$connection = mysqli_connect("localhost","root","","eraasoft_311");


$q = mysqli_query($connection,"SELECT * FROM `category`");


// $data =  mysqli_fetch_assoc($q);
$data = mysqli_fetch_all($q,MYSQLI_ASSOC);













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
    


    <ul>
        <?php foreach($data as $category){ ?>
            <li><?= $category['name']; ?></li>
        <?php } ?>
    </ul>





</body>
</html>