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
    input{width: 300px;border: 2px solid rgb(50,150,200);border-radius: 8px;padding: 8px 20px;}
  </style>
</head>
<body>

<h3 class="text-center py-3" style="color:turquoise">Edit My Account<br><?= $success ?></h3>

<div class="container">
  <form class="docsettings" action="../collect/userEdit.php" method="post" enctype="multipart/form-data">
    <label>your old Password : <span style="color:red;"><?=$passerror ?></span> </label><br>
    <input type="password" name="uoldpassword" value="" placeholder="old password"><br><br>
    <label>your name : </label><br>
    <input type="text" name="uname" value="" placeholder="your name"><br><br>
    <label>your phone : </label><br>
    <input type="text" name="uphone" value="" placeholder="your phone"><br><br>
    <label>your img : </label><br>
    <input type="file" name="uimg" value="" placeholder="your img"><br><br>

    <input class="btn btn-primary" type="submit" name="submit" value="edite">
  </form>
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="const_user/user_js.js"></script>
  <script src="const_user/editjs_js.js"></script>
</body>
</html>
