<?php
session_start();
if(empty($_SESSION['auth'])){
    header("location: login.php");
}


echo "home";