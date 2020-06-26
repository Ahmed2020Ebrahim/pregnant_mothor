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
  if(!(isset($_POST['uname'])&& !empty($_POST['uname']))){
    $backerrors[]="uname";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['uname'];
  }
  if(!(isset($_POST['uphone'])&& !empty($_POST['uphone']))){
    $backerrors[]="uphone";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['uphone'];
  }
  if(!(isset($_POST['umonth'])&& !empty($_POST['umonth']))){
    $backerrors[]="umonth";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['umonth'];
  }
  if(!(isset($_POST['uweek']) && !empty($_POST['uweek']))){
    $backerrors[]="uweek";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['uweek'];
  }
  if(!(isset($_POST['upassword'])&& !empty($_POST['upassword']))){
    $backerrors[]="upassword";
    $backvalues[]="";
  }else {
    $backvalues[]=$_POST['upassword'];
  }




  if($backerrors && $backvalues){
    header("Location: ../signup/sign_up.php?errors=".implode(",",$backerrors)."&values=".implode(",",$backvalues));
    exit;
  }
  if($backerrors){
    header("Location:../signup/sign_up.php?errors=".implode(",",$backerrors));
    exit;
  }
}


$uname=test($_POST['uname']);
$uphone=test($_POST['uphone']);
$umonth=(int)test($_POST['umonth']);
$uweek=(int)test($_POST['uweek']);
$uweek1=(($umonth-1)*4)+$uweek;
$upassword=test($_POST['upassword']);
$uday=((($uweek-1)*7)+(($umonth-1)*30))+1;

$day=date("d");
$dayc1=(int)$day;



$q="INSERT INTO user values(null,'".$uname."','".$upassword."','".$uphone."','../uploads/2.jpg','".$umonth."','".$uweek1."','".$uday."',1,1,1,'".$dayc1."',
  1,0)";

if(! mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}
$q2="SELECT * FROM user WHERE uName='".$uname."' AND uPhone='".$uphone."'";

if(! $res=mysqli_query($conn,$q2)){
  echo mysqli_error($conn);
  exit;
}
$row=mysqli_fetch_assoc($res);
$uID=$row['uID'];

session_start();
$_SESSION['uID']=$uID;
header("Location:../users/user_page.php");
mysqli_close($conn);






 ?>
