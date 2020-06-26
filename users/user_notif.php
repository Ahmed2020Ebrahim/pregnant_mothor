<?php require 'const_user/header.php';

if(!isset($_SESSION['uID'])){
  header("Location: user_login.php");
  exit;
}
?>
<br>
<div class="text-center">
  <h3 style="color:turquoise;"><span>4</span> th month notifications</h3>
  <br>
</div>
<div class="container">
  <div class="notif">
    <p class="notifnum">1</p>
    <div class="notifcont">
        <p class="notifbody">Congratulations you have passed <span>3</span> months .<br> now you are
        in <span>4</span> th month so you have some informations for this month <a href="user_page.php?inc=weekinfo">from here</a></p>
    </div>
  </div>
  <hr>
  <div class="notif">
    <p class="notifnum">2</p>
    <div class="notifcont">
        <p class="notifbody">Now you are in <span>4</span> th month , so you have some exercises to do <br>
         <a href="user_page.php?inc=mon_vid">from here</a></p>
    </div>
  </div>
</div>
<br>
<?php require 'const_user/footer.php'; ?>
