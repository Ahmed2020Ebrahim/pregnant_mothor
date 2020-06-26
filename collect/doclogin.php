<?php
require '../constant/connect.php';
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
  if(!(isset($_POST['uname']) && !empty($_POST['uname']))){
    header("Location:../doctors_pages/doctor_login.php?error=username");
  }
  if(!(isset($_POST['upassword']) && !empty($_POST['upassword']))){
    header("Location:../doctors_pages/doctor_login.php?error=password");
  }
}

$dname=$_POST['dname'];
$dpassword=$_POST['dpassword'];


$q="SELECT * FROM doctor WHERE dName='".$dname."' AND dPassword='".$dpassword."' ";

if(! $res=mysqli_query($conn,$q)){
  header("location: ../users/user_login.php?error=password");
  exit;
}
$row=mysqli_fetch_assoc($res);
$dID=$row['dID'];


$_SESSION["dID"]=$dID;



header("Location:../doctors_pages/doctor_page.php");



 ?>
