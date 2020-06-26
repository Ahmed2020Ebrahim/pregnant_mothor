<?php
require "../constant/connect.php";

function test($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
  if(isset($_POST['dName'])){
    $dName=test($_POST['dName']);
  }else {
    header("Location:../doctors_pages/doctor_signup.php?error=1");
  }
  if(isset($_POST['dPhone'])){
    $dPhone=test($_POST['dPhone']);
  }else {
    header("Location:../doctors_pages/doctor_signup.php?error=1");
  }
  if(isset($_POST['dEmail'])){
    if(filter_var($_POST['dEmail'],FILTER_VALIDATE_EMAIL)){
      $dEmail=$_POST['dEmail'];
    }
  }else {
    header("Location:../doctors_pages/doctor_signup.php?error=1");
  }
  if(isset($_POST['dAddress'])){
    $dAddress=test($_POST['dAddress']);
  }else {
    header("Location:../doctors_pages/doctor_signup.php?error=1");
  }
  if(isset($_POST['dPassword1'])){
    $dPassword1=test($_POST['dPassword1']);
  }else {
    header("Location:../doctors_pages/doctor_signup.php?error=1");
  }
  if(isset($_POST['dPassword2'])){
    $dPassword2=test($_POST['dPassword2']);
  }else {
    header("Location:../doctors_pages/doctor_signup.php?error=1");
  }
  if($dPassword1!=$dPassword2){
    header("Location:../doctors_pages/doctor_signup.php?error=1");
  }

  $fname=$_FILES['dCV']['name'];
  $tname=$_FILES['dCV']['tmp_name'];
  $type=$_FILES['dCV']['type'];
  $error=$_FILES['dCV']['error'];
  $size=$_FILES['dCV']['size'];
  $allowext=array('pdf');
  $expext=explode('.',$fname);
  $ext=strtolower(end($expext));

  if(in_array($ext,$allowext)){
    if($error===0){
      if($size < 1000000){
        $fileNewName=uniqid('', true).'.'.$ext;
        $filedist="../uploads/".$fileNewName;
        $dCV=$filedist;
        move_uploaded_file($tname,$filedist);
      }else {
        header("Location: ../doctors_pages/doctor_signup.php?sizeerror=1");
      }
    }else {
      header("Location: ../doctors_pages/doctor_signup.php?loaderror=1");
    }
  }else {
    header("Location: ../doctors_pages/doctor_signup.php?exterror=1");
    exit;
  }

  $q="INSERT INTO doctor VALUES(null,'".$dName."','".$dPassword1."','".$dPhone."','".$dAddress."','../uploads/doctor.jpg','".$dEmail."','".$dCV."',0)";
if(!mysqli_query($conn,$q)){
  echo mysqli_error($conn);
}else {
  session_start();
  $_SESSION['sendyou']=1;

  header("Location:../doctors_pages/done.php");
}











}
 ?>
