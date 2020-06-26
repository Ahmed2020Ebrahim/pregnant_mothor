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
if(!isset($_GET['dEmail'])){
  header("Location:doc_req.php");
  exit;
}

$dID=$_GET['dID'];
$dEmail=$_GET['dEmail'];
$q="UPDATE doctor SET dAgrement=1 WHERE dID='".$dID."'";
if(!mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}

$q="SELECT * FROM doctor WHERE dID='".$dID."'";
if(!$res=mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}
$row=mysqli_fetch_assoc($res);
$dPassword=$row['dPassword'];
$dName=$row['dName'];
$dEmail=$row['dEmail'];
$msg="hello : '".$dName."' you have accepted now in Pregnant mom website, you can login now by
userName : '".$dName."' and  password : '".$dPassword."' thank you";
$msg=wordwrap($msg,70);
mail($dEmail,"you have been accepted",$msg);


header("Location:doc_req.php?accepted");


 ?>
