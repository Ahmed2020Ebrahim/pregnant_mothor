<?php
require '../constant/connect.php';
session_start();
if(!isset($_SESSION['uID'])){
  header("Location:../users/user_login.php");
  exit;
}
if(!(isset($_GET['doc'])&&isset($_GET['user']))){
  header("Location:../users/user_login.php");
  exit;
}
$uID=$_GET['user'];
$dID=$_GET['doc'];
$date=date("Y-m-d h:ia");

$q="INSERT INTO bookrequest VALUES(null,'".$uID."','".$dID."',0,'".$date."')";
if(!mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}

echo "your request had been sent , your doctor will call you sonn";

header("Refresh:5;url=../users/user_page.php?inc=doctors&&book=successfull");


 ?>
