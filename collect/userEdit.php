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
  $uID=$row['uID'];
  $uName=$row['uName'];
  $uPassword=$row['uPassword'];
  $uNotif=$row['uNotif'];
  $uPhone=$row['uPhone'];
  $uImg=$row['uImg'];
  if(!(isset($_POST['uoldpassword'])&&!empty($_POST['uoldpassword']))){
    header("Location:../users/user_page.php?inc=edit&&error=passreq");
    exit;
  }
  if($_POST['uoldpassword']!=$uPassword){
    header("Location:../users/user_page.php?inc=edit&&error=rongpass");
    exit;
  }

  if(!(isset($_POST['uname'])&&!empty($_POST['uname']))){
    $uName=$uName;
  }else {
    $uName=test($_POST['uname']);
  }

  if(!(isset($_POST['uphone'])&&!empty($_POST['uphone']))){
    $uPhone=$uPhone;
  }else {
    $uPhone=test($_POST['uphone']);
  }

  // if(empty($_POST['uimg'])){
  //   $uImg=$uImg;
  //   echo $uImg;
  //   exit;
  // }

  if(isset($_FILES['uimg'])){


    $fname=$_FILES['uimg']['name'];
    $tname=$_FILES['uimg']['tmp_name'];
    $type=$_FILES['uimg']['type'];
    $error=$_FILES['uimg']['error'];
    $size=$_FILES['uimg']['size'];
    $allowext=array('jpg','jpeg','png');
    $expext=explode('.',$fname);
    $ext=strtolower(end($expext));
    echo "string";

    if(in_array($ext,$allowext)){
      if($error===0){
        if($size < 1000000){
          $fileNewName=uniqid('', true).'.'.$ext;
          $filedist="../uploads/".$fileNewName;
          $uImg=$filedist;
          move_uploaded_file($tname,$filedist);
        }else {
          header("Location: ../users/user_page.php?inc=edit&&sizeerror=1");
        }
      }else {
        header("Location: ../users/user_page.php?inc=edit&&uploaderror=1");
      }
    }else {
      header("Location: ../users/user_page.php?inc=edit&&exterror=1");
      exit;
    }
  }

  $q="UPDATE user SET uName='".$uName."',uPhone='".$uPhone."',uImg='".$uImg."'";
  if(!mysqli_query($conn,$q)){
    echo mysqli_error($conn);
    exit;
  }

  header("Location:../users/user_page.php?inc=edit&&success=1");


}




 ?>
