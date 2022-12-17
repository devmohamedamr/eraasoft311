<?php
session_start();
if(empty($_SESSION['auth'])){
    header("location: login.php");
}



echo "user";


echo "<a href='logout.php'>logout</a>";