<?php
require "../constant/connect.php";

function test($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
  $backerrors=array();
  $backvalues=array();
  if(!(isset($_POST['adname'])&& !empty($_POST['adname']))){
    $backerrors[]="adname";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['adname'];
  }
  if(!(isset($_POST['adpassword'])&& !empty($_POST['adpassword']))){
    $backerrors[]="adpassword";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['adpassword'];
  }
  if(!(isset($_POST['adphone'])&& !empty($_POST['adphone']))){
    $backerrors[]="adphone";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['adphone'];
  }
  if(!(isset($_POST['ademail']) && filter_var($_POST['ademail'],FILTER_VALIDATE_EMAIL))){
    $backerrors[]="ademail";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['ademail'];
  }
  if(!(isset($_POST['adaddress'])&& !empty($_POST['adaddress']))){
    $backerrors[]="adaddress";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['adaddress'];
  }


  if($backerrors && $backvalues){
    header("Location: ../admin/addadmin.php?errors=".implode(",",$backerrors)."&values=".implode(",",$backvalues));
    exit;
  }
  if($backerrors){
    header("Location:../admin/addadmin.php?errors=".implode(",",$backerrors));
    exit;
  }
}


$adname=test($_POST['adname']);
$adpassword=test($_POST['adpassword']);
$adphone=test($_POST['adphone']);
$adaddress=test($_POST['adaddress']);
$ademail=test($_POST['ademail']);

$q="INSERT INTO admin values(null,'".$adname."','".$adpassword."','".$adphone."','".$adaddress."','".$ademail."')";

if(! mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}
header("Location:../admin/admin_page.php");
mysqli_close($conn);






 ?>
