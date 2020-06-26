<?php

require "../constant/connect.php";
session_start();
function test($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if(!isset($_SESSION['uID'])){
  header("Location:../users/user_login.php");
}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
  $uID=$_SESSION["uID"];
  $q="SELECT * FROM user WHERE uID='".$uID."'";
  if(! $res=mysqli_query($conn,$q)){
    echo mysqli_error($conn);
    exit;
  }
  $row=mysqli_fetch_assoc($res);
  $uPassword=$row['uPassword'];
  if(!(isset($_POST['uoldpassword'])&&!empty($_POST['uoldpassword']))){
    header("Location:../users/user_page.php?inc=delete&&deleterror=1");
    exit;
  }
  $uOldPass=$_POST['uoldpassword'];
  if($uOldPass!=$uPassword){
    header("Location:../users/user_page.php?inc=delete&&deleterror=2");
    exit;
  }

  $q="DELETE FROM user WHERE uID='".$uID."' AND uPassword='".$uOldPass."'";
  if(!mysqli_query($conn,$q)){
    echo mysqli_error($conn);
    exit;
  }
  header("Location:../users/user_login.php");

}
?>
