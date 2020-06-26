<?php
require '../constant/connect.php';
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
  if(!(isset($_POST['uname']) && !empty($_POST['uname']))){
    header("Location:../users/user_login.php?error=username");
  }
  if(!(isset($_POST['upassword']) && !empty($_POST['upassword']))){
    header("Location:../users/user_login.php?error=password");
  }
}
if(!(isset($_POST['uname']))){
    header("Location:../users/user_login.php?error=username");
  }
  if(!(isset($_POST['upassword']))){
    header("Location:../users/user_login.php?error=password");
  }

$uname=$_POST['uname'];
$upassword=$_POST['upassword'];


$q="SELECT * FROM user WHERE uName='".$uname."' AND uPassword='".$upassword."' ";

if(! $res=mysqli_query($conn,$q)){
  header("location: ../users/user_login.php?error=password");
  exit;
}
$row=mysqli_fetch_assoc($res);
$uID=$row['uID'];
$uMonth=$row['uMonth'];
$uWeek=$row['uWeek'];
$uNotif=$row['uNotif'];
$uDay=$row['uDay'];
$uInfoNotif=$row['uInfoNotif'];
$uVidNotif=$row['uVidNotif'];
$dayc1=$row['dayc1'];
$realday=$row['realday'];
$dayc1=$row['dayc1'];
$day=(int)date("d");
if($day!=$dayc1){
  $daycount=$day;
  $i=0;
  if($day>=$dayc1){
    $i=$day-$dayc1;
  }else {
    $i=$day+(30-$dayc1);
  }
  for($n=0;$n<$i;$n++){
    $uDay++;
    $uw=(int)$uDay%7;
    $um=(int)$uDay%30;
    if($uw!=1 || $um!=1){
      $q="UPDATE user SET uDay='".$uDay."' , uMonth='".$uMonth."' , dayc1='".$daycount."'";
      if(!mysqli_query($conn,$q)){
        echo mysqli_error($conn);
        exit;
      }
    }
    if($uw==1){
      $uWeek++;
      $uNotif++;
      $uVidNotif++;
      $uInfoNotif++;
      $q="UPDATE user SET uWeek='".$uWeek."' uMonth='".$uMonth."' , uNotif='".$uNotif."' , uVidNotif='".$uVidNotif."' , uInfoNotif='".$uInfoNotif."',
      realday='".$day."',uDay='".$uDay."' , dayc1='".$daycount."'";
      if(!mysqli_query($conn,$q)){
        echo mysqli_error($conn);
        exit;
      }
    }
    if($um==1){
      $uMonth++;
      $uNotif++;
      $uVidNotif++;
      $uInfoNotif++;
      $q="UPDATE user SET uMonth='".$uMonth."' , uNotif='".$uNotif."' , uVidNotif='".$uVidNotif."' , uInfoNotif='".$uInfoNotif."',
      realday='".$day."',uDay='".$uDay."', dayc1='".$daycount."'";
      if(!mysqli_query($conn,$q)){
        echo mysqli_error($conn);
        exit;
      }
    }


  }
}

$_SESSION['uID']=$uID;


header("Location:../users/user_page.php");



 ?>
