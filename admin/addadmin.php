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

<?php
$comeerror=array();
  $comevalues=array("","","","","");
  if(isset($_GET['errors'])){
    $comeerror=explode(",",$_GET['errors']);
  }
  if(isset($_GET['values'])){
    $comevalues=explode(",",$_GET['values']);
  }
 ?>

<body class="bg-dark">
  <div class="container pt-5">
    <div class="editetitle text-center text-light">
      <h1>Add Admin</h1>
      <p>inter the required information</p>
    </div>
    <form class="editforms  text-center pt-5" action="../collect/add_admin.php" method="post">
      <input type="text" id="adminname" name="adname" value="<?=in_array('userName',$comeerror)?'':$comevalues[0];?>"
       placeholder="admin name"><br><span style="color:red;"><?= in_array('adname',$comeerror)?'plase inter admin name':''; ?></span><br><br>
      <input type="email" id="adminemail" name="ademail" value="<?=in_array('userName',$comeerror)?'':$comevalues[1];?>"
       placeholder="admin email"><br><span style="color:red;"><?= in_array('ademail',$comeerror)?'plase inter admin email':''; ?></span><br><br>
      <input type="text" id="adminphone" name="adphone" value="<?=in_array('userName',$comeerror)?'':$comevalues[2];?>"
       placeholder="phone number"><br><span style="color:red;"><?= in_array('adphone',$comeerror)?'plase inter admin phone':''; ?></span><br><br>
      <input type="text" id="adminaddress" name="adaddress" value="<?=in_array('userName',$comeerror)?'':$comevalues[3];?>"
       placeholder="admin address"><br><span style="color:red;"><?= in_array('adaddress',$comeerror)?'plase inter admin address':''; ?></span><br><br>
      <input type="password" id="adminpassword" name="adpassword" value="<?=in_array('userName',$comeerror)?'':$comevalues[4];?>"
       placeholder="admin password"><br><span style="color:red;"><?= in_array('adpassword',$comeerror)?'plase inter admin password':''; ?></span>
         <br><br>
      <input type="submit" class="aditsubmit" name="submit" value="submit">
    </form>
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="../jscript/plugin.js"></script>
</body>

</html>
