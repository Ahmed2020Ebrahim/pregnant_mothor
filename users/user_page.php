<?php
  require "../constant/connect.php";
  require "../constant/pathes.php";

  session_start();

  if(!isset($_SESSION['uID'])){
    header("Location: user_login.php");
    exit;
  }

  $deleterror="";
  if(isset($_GET['deleterror'])){
    $del=$_GET['deleterror'];
    if($del=1){
      $deleterror="old password is required";
    }elseif($del=2){
      $deleterror="wrong old password";
    }
  }


  $chpasserror0="";
  $chpasserror1="";
  $chpasserror2="";
  if(isset($_GET['chpasserror'])){
    $e=$_GET['chpasserror'];
    if($e==1){
      $chpasserror1="old password is required";
    }elseif ($e==2) {
      $chpasserror1="wrong old password";
    }elseif ($e==3) {
      $chpasserror2="configer the new password";
    }elseif ($e==4) {
      $chpasserror2="configer the new password";
    }elseif ($e==0) {
      $chpasserror0='successfull change';
    }
  }

  $passerror='';
  if(isset($_GET['error'])){
    if($_GET['error']=='passreq'){
      $passerror="old password is required";
    }elseif ($_GET['error']=='rongpass') {
      $passerror="rong password please check of password";
    }
  }
  $success="";
  if(isset($_GET['success'])){
    $success='Successfull Edit';
  }



  $uID=$_SESSION["uID"];

  $q="SELECT * FROM user WHERE uID='".$uID."'";
  if(! $res=mysqli_query($conn,$q)){
    echo mysqli_error($conn);
    exit;
  }
  $row=mysqli_fetch_assoc($res);
  $uID=$row['uID'];
  $uName=$row['uName'];
  $uWeek=$row['uWeek'];
  $uMonth=$row['uMonth'];
  $uDay=$row['uDay'];
  $uNotif=$row['uNotif'];
  $uVidNotif=$row['uVidNotif'];
  $uInfoNotif=$row['uInfoNotif'];
  $uInfoNotif=$row['uInfoNotif'];
  $uImg=$row['uImg'];
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
        $q="UPDATE user SET uDay='".$uDay."' , dayc1='".$daycount."'";
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
        $q="UPDATE user SET uWeek='".$uWeek."' , uNotif='".$uNotif."' , uVidNotif='".$uVidNotif."' , uInfoNotif='".$uInfoNotif."',
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

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel='shortcut icon' type="image/x-icon" href="../img/3.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../style/hover-min.css">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="../style/animate.css">
  <link rel="stylesheet" href="../style/owl.carousel.css">
  <link rel="stylesheet" href="../style/owl.theme.default.min.css">
  <link rel="stylesheet" href="../style/user_style.css">
</head>
<body>



<!--top navbar-->
<nav class="firstnavtop">
  <ul>
    <li class="userrightlink"><a href="user_page.php?inc=home" class="usertopnav usertopleft"><img src="../img/3.jpg " alt="logo"></a></li>
    <li><a href="user_page.php?inc=home" class="usertopnav">Home</a></li>
    <li><a href="user_page.php?inc=doctors" class="usertopnav">Doctors</a></li>
    <li><a href="user_page.php?inc=videos" class="usertopnav">Videos</a></li>
    <li><a href="user_page.php?inc=mid_info" class="usertopnav">Midecal Informations</a></li>
    <li><a href="user_page.php?inc=frq" class="usertopnav">FrqQuestions</a></li>
    <li class="userleftlink"><a href="user_page.php?inc=home" class="usertopnav usertopright"><img src="../img/logo2.jpg" alt="logo"></a></li>
  </ul>
</nav>

<!-- alternateve top nav -->
<div class="alttopnav">
    <ul class="d-flex justify-content-between">
        <li><a href="#home"><img src="../img/3.jpg" alt="logo"></a></li>
        <li><a href="#news"><img src="../img/logo2.jpg" alt="logo"></a></li>
        <li class="ddropdown">
            <a href="javascript:void(0)" class="ddropbtn"><i class="fa fa-bars"></i></i></a>
            <a href="javascript:void(0)" class="ddropbtnup"><i class="fa fa-bars"></i></i></a>
            <div class="ddropdown-content">
                <a href="user_page.php?inc=home">Home</a>
                <a href="user_page.php?inc=doctors">Doctors</a>
                <a href="user_page.php?inc=mid_info">Midecal Informations</a>
                <a href="user_page.php?inc=videos">Videos</a>
                <a href="user_page.php?inc=frq">FrqQuestions</a>
            </div>
        </li>
    </ul>
</div>



  <!--small screen nav bar-->
  <div class="sm_screen_nav d-flex justify-content-between">
        <a href="user_page.php?inc=home" class="sm_nav_links"><i class="fa fa-home"></i></a>
        <a href="user_page.php?inc=notif" class="sm_nav_links"><i class="fa fa-bell"></i></a>
        <a href="user_page.php?inc=mon_vid" class="sm_nav_links"><i class="fa fa-play"></i></a>
        <a href="user_page.php?inc=doctors" class="sm_nav_links"><i class="fa fa-stethoscope"></i></a>
        <a href="user_page.php?inc=weekinfo" class="sm_nav_links"><i class="fa fa-info"></i></a>
        <a href="user_page.php?inc=settings" class="sm_nav_links"><i class="fa fa-edit"></i></a>
        <a href="../collect/userLogout.php" class="sm_nav_links"><i class="fa fa-power-off"></i></a>
  </div>

  <p class="display_sidenav"><i class="fa fa-arrow-right"></i></p>
  <!--side navbar-->
  <div class="usersidenav">
    <div class="userimggallery">
      <span><i class="fa fa-arrow-left"></i></span>
      <div class="userimgcont">
        <img src=<?=$uImg ?> style="width:100px; height:100px;" alt="userimg">
      </div>
      <div class="pro_user_name">
        <?=$uName ?>
      </div>
    </div>
      <hr>
    <div class="sidelinkscont">
        <a href="user_page.php?inc=home" class="usersidenavlinks"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
        <a href="user_page.php?inc=notif" class="usersidenavlinks"><i class="fa fa-bell"></i>&nbsp;Notifications&nbsp;&nbsp;<span
          style="border-radius:5px;background-color:pink;color:white;">&nbsp<?=$uNotif ?>&nbsp</span></a>
        <a href="user_page.php?inc=weekinfo" class="usersidenavlinks"><i class="fa fa-info"></i>&nbsp;&nbsp;&nbsp;Week Info&nbsp;&nbsp;<span
          style="border-radius:5px;background-color:pink;color:white;">&nbsp<?=$uInfoNotif ?>&nbsp</span></a>
        <a href="user_page.php?inc=mon_vid" class="usersidenavlinks"><i class="fa fa-play"></i>&nbsp;&nbsp;Week Video&nbsp;&nbsp;<span
          style="border-radius:5px;background-color:pink;color:white;">&nbsp<?=$uVidNotif ?>&nbsp</span></a>
        <a href="user_page.php?inc=doctors" class="usersidenavlinks"><i class="fa fa-stethoscope"></i>&nbsp;&nbsp;Your Doctors</a>
        <a href="user_page.php?inc=settings" class="usersidenavlinks"><i class="fa fa-edit"></i>&nbsp;Edit</a>
        <a href="../collect/userLogout.php" class="usersidenavlinks"><i class="fa fa-power-off"></i>&nbsp;Log Out</a>
    </div>
  </div>

  <!--user page body-->
  <div class="user_page_body">
    <div class="timeinfo d-flex justify-content-between">
      <p>Current month  &nbsp;: <span>&nbsp;<?= $uMonth ?></span></p>
      <p>Current week  &nbsp;: <span>&nbsp;<?= $uWeek ?></span></p>
      <p>Remaining weeks  &nbsp;: <span>&nbsp;<?=38-$uWeek ?></span></p>
    </div>
    <?php
    if(empty($_GET['inc'])){
      require "pub_home.php";
    }elseif ($_GET["inc"]=="home") {
      require "pub_home.php";
    }elseif ($_GET["inc"]=="doctors") {
      require "pub_doctors.php";
    }elseif ($_GET["inc"]=="videos") {
      require "pub_videos.php";
    }elseif ($_GET['inc']=='mid_info') {
      require $infopages[$uMonth];
    }elseif ($_GET['inc']=='frq') {
      require "pub_frq.php";
    }elseif ($_GET['inc']=='mon_vid') {
      require "user_monvid.php";
    }elseif ($_GET['inc']=='weekinfo') {
      require $infopages[$uMonth];
    }elseif ($_GET['inc']=='settings') {
      require "settings.php";
    }elseif ($_GET['inc']=='notif') {
      require "user_notif.php";
    }elseif ($_GET['inc']=='edit') {
      require "user_edit.php";
    }elseif ($_GET['inc']=='repassword') {
      require "user_repassword.php";
    }elseif ($_GET['inc']=='delete') {
      require "user_delete.php";
    }
     ?>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="const_user/user_js.js"></script>
  <script src="const_user/editjs_js.js"></script>
</body>
</html>
