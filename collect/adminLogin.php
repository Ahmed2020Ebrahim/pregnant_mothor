<?php
require '../constant/connect.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit'])){
  if(!isset($_POST['adName'])){
    header("Loction:../admin/admin_login.php");
  }
  if(!isset($_POST['adPassword'])){
    header("Loction:../admin/admin_login.php");
  }
}
$adName=$_POST['adName'];
$adPassword=$_POST['adPassword'];
$q="SELECT * FROM admin WHERE adName='".$adName."' AND adPassword='".$adPassword."'";
if(! $res=mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  header("Location:../admin/admin_login.php");
  exit;
}

$row=mysqli_fetch_assoc($res);
$_SESSION['adID']=$row['adID'];

header("Location:../admin/admin_page.php");






?>
