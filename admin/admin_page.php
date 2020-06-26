<?php
require "../constant/connect.php";
session_start();
if(!isset($_SESSION['adID'])){
  header("Location:../admin/admin_login.php");
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
  <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="../style/animate.css">
  <link rel="stylesheet" href="../style/owl.carousel.css">
  <link rel="stylesheet" href="../style/owl.theme.default.min.css">
  <link rel="stylesheet" href="../style/style.css">
  <style media="screen">
    .settingimg img{width:200px;}
    .settingimg a{display: inline-block;background-color: lightgray;margin:10px;padding: 10px;border:5px solid black;
      border-radius: 20px;}
    .settingimg a:hover{background-color: white;}
  </style>
</head>
<body class="bg-dark">




  <div class="container pt-5">
    <div class="row no-gutters pt-4">
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 settingimg text-center"><a href="doc_req.php"><img src="../img/setting3.png" alt="" ></a>
        <p class="text-light">doctors requests</p>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 settingimg text-center"><a href="add_delete.php"><img src="../img/setting4.png" alt="" ></a>
        <p class="text-light">add & delete</p>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 settingimg text-center"><a href="editemyacount.php"><img src="../img/setting1.png" alt="" ></a>
        <p class="text-light">edit my account</p>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 settingimg text-center"><a href="../collect/adminLogout.php"><img src="../img/setting2.png" alt="" ></a>
        <p class="text-light">log out</p>
      </div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="../jscript/plugin.js"></script>
</body>

</html>
