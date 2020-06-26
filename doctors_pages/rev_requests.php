<?php
require "../constant/connect.php";
if(!isset($_SESSION['dID'])){
  header("Location:doctor_login.php");
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
<body>
 <div class="editetitle text-center text-light mt-3">
   <h1 class="text-primary">Booking Requests</h1>
 </div>

<?php
$rdID=$_SESSION["dID"];
$qreq="SELECT * FROM bookrequest WHERE dID='".$rdID."' and reqAgrement=0";
if(!$reqres=mysqli_query($conn,$qreq)){
  echo mysqli_error($conn);
  exit;
}
 ?>
 <?php while($reqrew=mysqli_fetch_assoc($reqres)){
   $pregid=$reqrew['uID'];
   $reqID=$reqrew['reqID'];
   $qpreg="SELECT * FROM user WHERE uID='".$pregid."'";
   if(!$pregres=mysqli_query($conn,$qpreg)){
     echo mysqli_error($conn);
     exit;
   }
   $pregrow=mysqli_fetch_assoc($pregres);



    ?>
   <div class="container py-4 px-2">
     <div class="bg-primary py-2 px-3 text-light">
       name    : <?= $pregrow['uName'] ?><br>
       phone   : <?= $pregrow['uPhone'] ?><br><br>
       <a href="reed.php?id=<?=$pregrow['uID']?>&&req=<?=$reqID?>" class="btn btn-light">select as reed</a>
     </div>
   </div>


<?php } ?>







  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="../jscript/plugin.js"></script>
</body>

</html>
