<?php
require "../constant/connect.php";

session_start();
$_SESSION=array();
session_destroy();
header("Location: ../doctors_pages/doctor_login.php");


 ?>
