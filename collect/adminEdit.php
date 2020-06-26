<?php
require "../constant/connect.php";
session_start();
function test($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if(!isset($_SESSION['adID'])){
  header("Location:../admin/admin_login.php");
}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
  $adID=$_SESSION["adID"];
  $q="SELECT * FROM admin WHERE adID='".$adID."'";
  if(! $res=mysqli_query($conn,$q)){
    echo mysqli_error($conn);
    exit;
  }
  $row=mysqli_fetch_assoc($res);
  $adPassword=$row['adPassword'];

  $adOldPass=$_POST['adoldpassword'];
  if($adOldPass!=$adPassword){
    header("Location:../admin/editemyacount.php?chpasserror=1");
    exit;
  }

  $adNewPass1=test($_POST['adnewpassword']);

  $adNewPass2=test($_POST['readpassword']);
  if($adNewPass1!=$adNewPass2){
    header("Location:../admin/editemyacount.php?chpasserror=2");
    exit;
  }

  $q="UPDATE admin SET adPassword='".$adNewPass1."' WHERE adID='".$adID."'";
  if(!mysqli_query($conn,$q)){
    echo mysqli_error($conn);
  }

  header("Location:../admin/editemyacount.php?chpasserror=0");


}


 ?>
