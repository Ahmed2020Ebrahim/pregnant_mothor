<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>signup</title>
  <link rel='shortcut icon' type="image/x-icon" href="../img/3.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../style/hover-min.css">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="../style/animate.css">
  <link rel="stylesheet" href="../style/owl.carousel.css">
  <link rel="stylesheet" href="../style/owl.theme.default.min.css">
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
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
  <!--sign up section-->
  <div class="signupcont" id="signupid">
    <section class="container signup">
      <br><br><br>
      <div class="signuptitle text-center">
        <h3>SIGN UP</h3>
        <p>Sign up to have a services</p>
      </div><br><br><br>
      <div class="formcontainer">
        <form method="post" action="../collect/user_signup.php">
          <label for="#input1">your name :</label><br>
          <input id="input1" type="text" name="uname" placeholder="Your Name"
          value="<?=in_array('uname',$comeerror)?'':$comevalues[0];?>" ><br>
          <span style="color:red;"><?= in_array('uname',$comeerror)?'plase inter your name':''; ?></span><br>
          <label for="#input2">phone number :</label><br>
          <input id="input2" type="text" name="uphone" placeholder="Phone Number"
          value="<?=in_array('uphone',$comeerror)?'':$comevalues[1];?>"><br><br>
          <span style="color:red;"><?= in_array('uphone',$comeerror)?'plase inter your phone':''; ?></span><br>
          <div class="preg_date">
            <label for="exampleFormControlSelect1">month of pragrancy :</label>
            <select name="umonth" id="exampleFormControlSelect1">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select><br>
            <span style="color:red;"><?= in_array('umonth',$comeerror)?'plase inter your month':''; ?></span><br>
          </div>
          <div class="preg_date">
            <label for="exampleFormControlSelect1">week of pragrancy :</label>
            <select name="uweek" id="exampleFormControlSelect1">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select><br>
            <span style="color:red;"><?= in_array('uweek',$comeerror)?'plase inter your week':''; ?></span><br>
          </div>
          <label for="#input3">your password :</label><br>
          <input id="input3" type="password" name="upassword" placeholder="Password"
          value="<?=in_array('upassword',$comeerror)?'':$comevalues[4];?>"><br>
          <span style="color:red;"><?= in_array('upassword',$comeerror)?'plase inter your password ':''; ?></span><br>
          <input class="btn btn-lg btn-outline-primary" type="submit" name="submit" value="Sign up"><br>
        </form>
      </div>
    </section><br><br><br>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../jscript/owl.carousel.js"></script>
  <script src="../jscript/plugin.js"></script>
</body>
</html>
