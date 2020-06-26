<?php
require "../constant/connect.php";

session_start();
$_SESSION=array();
session_destroy();
header("Location: ../users/user_login.php");


 ?>
