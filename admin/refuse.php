<?php
require "../constant/connect.php";
session_start();
if(!isset($_SESSION['adID'])){
  header("Location:admin_login.php");
  exit;
}
if(!isset($_GET['dID'])){
  header("Location:doc_req.php");
  exit;
}

$dID=$_GET['dID'];
$q="DELETE FROM doctor WHERE dID='".$dID."'";
if(!mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}



header("Location:doc_req.php?refused");


 ?>
