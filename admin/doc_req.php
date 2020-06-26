<?php
require "../constant/connect.php";
session_start();
if(!isset($_SESSION['adID'])){
  header("Location:admin_login.php");
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
  <link rel="stylesheet" href="style.css">

</head>
<body class="bg-dark">

<?php
$q="SELECT * FROM doctor WHERE dAgrement=0";
if(! $res=mysqli_query($conn,$q)){
  echo mysqli_error($conn);
}
 ?>

 <div class="editetitle text-center text-light mt-3">
   <h1>Doctor Requests</h1>
 </div>

 <?php
     while ($row=mysqli_fetch_assoc($res)) {
  ?>

 <div class="container py-4 px-2">
   <div class="bg-primary py-2 px-3 text-light">
     name    : <?= $row['dName'] ?><br>
     phone   : <?= $row['dPhone'] ?><br>
     address : <?= $row['dAddress'] ?><br>
     email   : <?= $row['dEmail'] ?><br>
     cv   : <a href="<?= $row['dCV'] ?>" download="<?= $row['dName'] ?>" class="text-light bg-dark px-2"> download cv </a>
     <br><br>
     <a href="accept.php?dID=<?=$row['dID'] ?>&&dEmail=<?=$row['dEmail'] ?>" class="btn btn-light" value="">accept</a>
     <a href="refuse.php?dID=<?=$row['dID'] ?>" class="btn btn-light" value="">refuse</a>
   </div>
 </div>

 <?php
    }
  ?>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="../jscript/plugin.js"></script>
</body>

</html>
