<?php
require 'const_user/header.php';
require "../constant/pathes.php";
if(!isset($_SESSION['uID'])){
  header("Location: user_login.php");
  exit;
}
$uID=$_SESSION['uID'];
$qvid="SELECT * FROM user WHERE uID='".$uID."'";
if(!$resvid=mysqli_query($conn,$q)){
  echo mysqli_error($conn);
  exit;
}
$rowvid=mysqli_fetch_assoc($resvid);
$uMonthvid=$rowvid['uMonth'];


?>
<br>
<div class="text-center">
  <h3 style="color:turquoise;"><span><?=$uMonthvid ?></span> th month notifications</h3>
  <br>
</div>
<div class="container">
  <div class="videosplayer col-lg-12 col-md-12 text-center">
      <iframe class="istyle" name="playifram"
          src=<?=$vidpages[$uMonth] ?> frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
  </div>


</div>
<br><br>
<?php require 'const_user/footer.php'; ?>
