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
    header("Location:../users/user_page.php?inc=repassword&&chpasserror=1");
    exit;
  }
  $uOldPass=$_POST['uoldpassword'];
  if($uOldPass!=$uPassword){
    header("Location:../users/user_page.php?inc=repassword&&chpasserror=2");
    exit;
  }
  if(!(isset($_POST['unewpassword1'])&&!empty($_POST['unewpassword1']))){
    header("Location:../users/user_page.php?inc=repassword&&chpasserror=3");
    exit;
  }
  $uNewPass1=test($_POST['unewpassword1']);
  if(!(isset($_POST['unewpassword2'])&&!empty($_POST['unewpassword2']))){
    header("Location:../users/user_page.php?inc=repassword&&chpasserror=3");
    exit;
  }
  $uNewPass2=test($_POST['unewpassword2']);
  if($uNewPass1!=$uNewPass2){
    header("Location:../users/user_page.php?inc=repassword&&chpasserror=4");
    exit;
  }

  $q="UPDATE user SET uPassword='".$uNewPass1."'";
  if(!mysqli_query($conn,$q)){
    echo mysqli_error($conn);
  }

  header("Location:../users/user_page.php?inc=repassword&&chpasserror=0");


}


 ?>
