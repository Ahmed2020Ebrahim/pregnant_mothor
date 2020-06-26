<?php
require "../constant/connect.php";
session_start();
if(!isset($_SESSION['dID'])){
  header("Location:doctor_login.php");
  exit;
}
$dID=$_SESSION['dID'];
$q="SELECT * FROM doctor WHERE dID='".$dID."'";
if(!$res=mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}

$row=mysqli_fetch_assoc($res);
$dID=$row['dID'];
$dName=$row['dName'];

$req="SELECT * FROM bookrequest WHERE dID='".$dID."'";
if(!$notifnum=mysqli_query($conn,$req)){
  echo "cant connect";
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
<body style="margin-top:-40px;">


  <div class="sm_screen_nav d-flex justify-content-between"style="margin-top:0px;">
        <a href="doctor_page.php?inc=home" class="sm_nav_links"><i class="fa fa-home"></i></a>
        <a href="#" class="sm_nav_links"><i class="fa fa-bell"></i></a>
        <a href="#" class="sm_nav_links"><i class="fa fa-info"></i></a>
        <a href="#" class="sm_nav_links"><i class="fa fa-edit"></i></a>
        <a href="../collect/doclogout.php" class="sm_nav_links"><i class="fa fa-power-off"></i></a>
  </div>




  <p class="display_sidenav"><i class="fa fa-arrow-right"></i></p>
  <!--side navbar-->
  <div class="usersidenav" style="height:500px;">
    <div class="userimggallery">
      <span><i class="fa fa-arrow-left"></i></span>
      <div class="userimgcont">
        <img src="../img/doctor.jpg" style="width:100px; height:100px;" alt="userimg">
      </div>
      <div class="pro_user_name">
        <?= $dName ?>
      </div>
    </div>
      <hr>
    <div class="sidelinkscont">
        <a href="doctor_page.php?inc=home" class="usersidenavlinks"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
        <a href="doctor_page.php?inc=rev" class="usersidenavlinks"><i class="fa fa-bell"></i>&nbsp;New reservation&nbsp;&nbsp;<span
          style="border-radius:5px;background-color:pink;color:white;">&nbsp<?=mysqli_num_rows($notifnum); ?>&nbsp</span></a>
        <a href="doctor_page.php?inc=settings" class="usersidenavlinks"><i class="fa fa-edit"></i>&nbsp;Settings</a>
        <a href="../collect/doclogout.php" class="usersidenavlinks"><i class="fa fa-power-off"></i>&nbsp;Log Out</a>
        <a href="#" class="usersidenavlinks" style="margin-top:120px;"><i class="fa fa-info"></i>&nbsp;&nbsp;&nbsp;Rate website</a>
    </div>
  </div>

  <!--user page body-->
  <div class="user_page_body">

    <?php
    if(empty($_GET['inc'])) {
      require "dochome.php";
    }elseif($_GET["inc"]=="settings"){
      require "settings.php";
    }elseif ($_GET['inc']=="rev") {
      require "rev_requests.php";
    }elseif ($_GET['inc']=="edit") {
      require "doctor_edit.php";
    }elseif ($_GET['inc']=="repassword") {
      require "doc_repassword.php";
    }elseif ($_GET['inc']=="delete") {
      require "doctor_delete.php";
    }elseif ($_GET['inc']=="home") {
      require "dochome.php";
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
