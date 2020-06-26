<?php
session_start();
if (!isset($_SESSION['adID'])) {
  header("Location:admin_login.php");
  exit;
}
$errorch="";
if(isset($_GET['chpasserror'])){
  if($_GET['chpasserror']==1){
    $errorch="error oldpassword";
  }elseif ($_GET['chpasserror']==2) {
    $errorch="configer your password";
  }elseif ($_GET['chpasserror']==0) {
    $errorch="successfully edit";
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
  <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="../style/animate.css">
  <link rel="stylesheet" href="../style/owl.carousel.css">
  <link rel="stylesheet" href="../style/owl.theme.default.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body class="bg-dark">
  <div class="container pt-5">
    <div class="editetitle text-center text-light">
      <h1>Edite My Account</h1>
      <p>you can't edite your information accept your password</p>
      <p><?=$errorch?></p>
    </div>
    <form class="editforms  text-center pt-5" action="../collect/adminEdit.php" method="post">
      <input type="password" required id="password" name="adoldpassword" value="" placeholder="inter your old password"><br><br>
      <input type="password" required id="newpassword" name="adnewpassword" value="" placeholder="inter your new password"><br><br>
      <input type="password" required id="newpassword" name="readpassword" value="" placeholder="inter your new password again"><br><br>
      <input type="submit" class="aditsubmit" name="submit" value="edite">
    </form>
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="../jscript/plugin.js"></script>
</body>

</html>
