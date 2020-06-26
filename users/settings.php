<?php

if(!isset($_SESSION['uID'])){
  header("Location: user_login.php");
  exit;
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
  <link rel="stylesheet" href="const_user/pub_style.css">
  <style media="screen">
  .settingimg img{width:200px;}
  .settingimg a{display: inline-block;background-color: white;margin:10px;padding: 10px;border:5px solid black;
    border-radius: 20px;}
  .settingimg a:hover{background-color: lightgray;}
  </style>
</head>
<body>

<h3 class="text-center pt-3" style="color:turquoise">Settings</h3>

<div class="container">
  <div class="row no-gutters pt-4">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 settingimg text-center"><a href="user_page.php?inc=edit"><img src="../img/setting4.png" alt="" ></a>
      <p class="text-primary">edit my account</p>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 settingimg text-center"><a href="user_page.php?inc=repassword"><img src="../img/setting1.png" alt="" ></a>
      <p class="text-primary">change my password</p>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 settingimg text-center"><a href="user_page.php?inc=delete"><img src="../img/deleteimg.png" alt="" ></a>
      <p class="text-primary">delete my account</p>
    </div>
  </div>
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="const_user/user_js.js"></script>
  <script src="const_user/editjs_js.js"></script>
</body>
</html>
