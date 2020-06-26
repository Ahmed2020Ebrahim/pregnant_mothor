
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
  <link rel="stylesheet" href="../style/style.css">
  <style media="screen">
    body{background-color: rgb(197, 26, 126)}
  </style>
</head>
<body>

  <div class="signupcont" id="signupid">
    <section class="container signup">
      <br><br><br>
      <div class="signuptitle text-center">
        <h3>SIGN UP AS A DOCTOR</h3>
        <p>if you are a doctor sign up to our site</p>
      </div><br><br><br>
      <div class="formcontainer">
        <form action="../collect/docSignup.php" method="post" enctype="multipart/form-data">
          <label for="#input1">your name :</label><br>
          <input id="input1" type="text" name="dName" placeholder="your Name"
          value="" required><br><br>

          <label for="#input2">phone number :</label><br>
          <input id="input2" type="text" name="dPhone" placeholder="Phone Number"
          value="" required><br><br>

          <label for="#input5">your email :</label><br>
          <input id="input5" type="email" name="dEmail" placeholder="email"
          value="" required><br>

          <label for="#input3">clinic address :</label><br>
          <input id="input3" type="text" name="dAddress" placeholder="clinic address"
          value="" required><br><br>

          <label for="#input6">your password :</label><br>
          <input id="input6" type="password" name="dPassword1" placeholder="Password"
          value="" required><br>

          <label for="#input7">repassword :</label><br>
          <input id="input7" type="password" name="dPassword2" placeholder="RePassword"
          value="" required><br><br>

          <div class="preg_date">
            <label for="#input4">send your cv :</label>
            <input type="file" name="dCV" required>
          </div><br><br>

          <input class="btn btn-lg btn-outline-primary" type="submit" name="submit" value="sign up"><br>
        </form>
        <p class="text-center text-light pt-5">Copyright &copy;
          <script>document.write(new Date().getFullYear());</script>
          All rights reserved | This website is made with <i class="fa fa-heart text-light"></i> by
          <a href="" class="text-light">CsTeam</a>
        </p>
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
