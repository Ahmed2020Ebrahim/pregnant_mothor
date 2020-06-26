<div class="usersigncont">
<?php require 'const_user/header.php'; ?>

<?php
$usererrors="";
$passerrors="";
  if(isset($_GET['error'])){
    if($_GET['error']=="username"){
      $usererrors="inter username";
    }elseif($_GET['error']=="password"){
      $passerrors="wrong user name or password , plase try agin";
    }
  }
 ?>
 <h2 class="text-center text-primary pt-5">Doctor Login</h2>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-sm-10">
        <form class="usersingform" class="mt-5" action="../collect/docLogin.php" method="post">
          <label>User Name</label><br>
          <input type="text" name="dname" value="" placeholder="username" required=""><br>
          <small style="color: red;"><?= $usererrors ?></small>
          <br>
          <label>Password</label><br>
          <input type="password" name="dpassword" value="" placeholder="password" required=""><br>
          <small style="color: red;"><?= $passerrors ?></small>
          <br>
          <button type="submit" class="btn btn-primary" name="submit">log in</button><br><br>
          <p>if you do not have an account , you can make a <a href="">new account</a></p><br><br>
        </form>
      </div>
    </div>
  </div>
  <?php require 'const_user/footer.php'; ?>
</div>
