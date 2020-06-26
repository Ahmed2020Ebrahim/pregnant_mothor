<?php
require "../constant/connect.php";
session_start();
if(!isset($_SESSION['dID'])){
  header("Location:doctor_login.php");
  exit;
}
if(!(isset($_GET['id'])&&isset($_GET['req']))){
  header("Location:doctor_page.php?inc=rev&&error");
  exit;
}
$dID=$_SESSION['dID'];
$uID=$_GET['id'];
$reqID=$_GET['req'];
echo $reqID;

$q="UPDATE bookrequest SET reqAgrement=1 WHERE reqID='".$reqID."'";
if(!mysqli_query($conn,$q)){
  echo "error";
  exit;
}

header("Location:doctor_page.php?inc=rev&&reed");




 ?>
