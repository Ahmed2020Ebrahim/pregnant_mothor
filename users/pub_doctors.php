<?php
require '../constant/connect.php';
require 'const_user/header.php';

if(!isset($_SESSION['uID'])){
  header("Location: user_login.php");
  exit;
}
?>
<!--content-->
  <div class="allcontainers">

      <div class="doctorslide1">
          <div class="city">
              <h3>Doctors</h3>
          </div><br><br>
          <div class="container carousel-animate owl-carousel carousel-hand owl-theme">
            <?php
              $q="SELECT * FROM doctor WHERE dAgrement=1";
              if(!$res=mysqli_query($conn,$q)){
                echo mysqli_error($conn);
                exit;
              }

             ?>
             <?php while ($row=mysqli_fetch_assoc($res)) { ?>
              <div class="item">
                  <div><img src="<?= $row['dImg'] ?>" alt="photo"></div>
                  <div class="doctorinfo" style="font-size:15px;">
                      <h6><?= $row['dName'] ?></h6>
                      <p><i class="fa fa-home"></i><?= $row['dAddress'] ?></p>
                      <p><i class="fa fa-phone"></i><?= $row['dPhone'] ?></p>
                      <p><?= $row['dEmail'] ?></p>
                      <a href="../collect/docbook.php?doc=<?=$row['dID']?>&&user=<?=$uID ?>" class="btn btn-primary">Book</a>
                  </div>
              </div>
            <?php } ?>

          </div>
      </div><br><br>
  </div>
<?php require 'const_user/footer.php'; ?>
