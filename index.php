<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel='shortcut icon' type="image/x-icon" href="img/3.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/hover-min.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/animate.css">
  <link rel="stylesheet" href="style/owl.carousel.css">
  <link rel="stylesheet" href="style/owl.theme.default.min.css">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <span class="gotop">&uparrow;</span>
  <!--first nav-->
  <ul class="header" id="top">
    <li><a href="signup/sign_up.php" data-toggle="tooltip" data-placement="right" title="Sign up to get notifications">Sign
        Up</a>
      </li>
      <li class="text-light" ><a href="doctors_pages/doctor_signup.php">Sign up as doctor</a></li>
      <li class="right"><a href="doctors_pages/doctor_login.php">Doctor Login</a></li>
    <li class="right"><a href="users/user_login.php">Log in</a></li>
  </ul>
  <!--second nav-->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php"><img src="img/3.jpg" alt="logo"
        style="width: 80px; height: 80px;border-radius: 50%;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>
    <div class="insidenav collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link home hvr-underline-from-center" href="index.php">Home <span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-center" href="doctors_pages/doctors.php">Doctors</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle hvr-underline-from-center" href="" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Midecal information
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="monthssm">
              <a class="dropdown-item" href="informations_pages/month2info.php">month 2</a>
              <a class="dropdown-item" href="informations_pages/month3info.php">month 3</a>
              <a class="dropdown-item" href="informations_pages/month4info.php">month 4</a>
              <a class="dropdown-item" href="informations_pages/month5info.php">month 5</a>
              <a class="dropdown-item" href="informations_pages/month6info.php">month 6</a>
              <a class="dropdown-item" href="informations_pages/month7info.php">month 7</a>
              <a class="dropdown-item" href="informations_pages/month8info.php">month 8</a>
              <a class="dropdown-item" href="informations_pages/month9info.php">month 9</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-center" href="videos_pages/videos.php">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-center" href="frqquest_pages/frqquestions.php">FrqQuestions</a>
        </li>
      </ul>
      <!-- <a class="brand2 navbar-brand" href="index.php"><img src="img/logo2.jpg" alt="logo"
        style="width: 80px; height: 80px;border-radius: 50%;"></a> -->
    </div>
  </nav>

<!--slider1-->
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/header3.jpeg" style="width: 800px;height: 700px;" class="d-block w-100" alt="photo">
          <div class="carousel-caption d-none d-md-block">
            <h5>Happy and safe pragrancy</h5>
            <p>We care about you and your child</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/header.jpg" style="width: 800px;height: 700px;" class="d-block w-100" alt="photo">
          <div class="carousel-caption d-none d-md-block">
            <h5>Happy and safe pragrancy</h5>
            <p>We care about you and your child</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/header2.jpg" style="width: 800px;height: 700px;" class="d-block w-100" alt="photo">
          <div class="carousel-caption d-none d-md-block">
            <h5>Happy and safe pragrancy</h5>
            <p>We care about you and your child</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class=" " aria-hidden="true"><i class="fa fa-arrow-left arrowslider"></i></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="" aria-hidden="true"><i class="fa fa-arrow-right arrowslider"></i></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div><br><br><br>
  <!--about section-->
  <section class="about">
    <br><br><br>
    <div class="container">
      <div class="cord">
        <a href="#linked1" class="cardl d-block bg-darkpink text-light pl-3 py-1 mb-0.5" data-toggle="collapse">
          <span>+</span>Communicate with doctors
        </a>
        <div class="collapse show" id="linked1">
          <p class="insidecord">This site provides you with many ways<br>to communicate with specialist medical
            <br>professionals inside and
            outside your city.<br><a href="doctors_pages/doctors.php">see more...</a></p>
        </div>
        <hr class="m-0">
        <a href="#linked2" class="cardl d-block bg-darkpink text-light pl-3 py-1 mb-0.5" data-toggle="collapse">
          <span>+</span>Medical information
        </a>
        <div class="collapse" id="linked2">
          <p class="insidecord">This information contains medical information <br>such as medical tests that must be
            carried <br>out by the mother,
            symptoms that may affect <br>the mother every month and what treatment.<br>
            These parameters also contain the sport beneficial<br> to the mother and useful food and at specific times.
            <br></p>
        </div>
        <hr class="m-0">
        <a href="#linked3" class="cardl d-block bg-darkpink text-light pl-3 py-1 mb-0.5" data-toggle="collapse">
          <span>+</span>Videos
        </a>
        <div class="collapse " id="linked3">
          <p class="insidecord">The site provides you with many useful videos that <br>contain valuable information, and
            you can watch these<br>
            videos instead of reading it contains the same information.<br><a href="videos_pages/videos.php">see more...</a></p>
        </div>
        <hr class="m-0">
        <a href="#linked4" class="cardl d-block bg-darkpink text-light pl-3 py-1 mb-0.5" data-toggle="collapse">
          <span>+</span>Frequent Questions
        </a>
        <div class="collapse " id="linked4">
          <p class="insidecord">The site contains the most common questions<br> during pregnancy and contains their
            answers.<br><a href="frqquest_pages/frqquestions.php">see more...</a></p>
        </div>
        <hr class="m-0">
      </div>
    </div>
  </section><br><br><br>
  <!--doctor section-->
  <section class="doctor">
    <div class="title2 doc-title-animat animated title1">
      <h3>OUR DOCTORS</h3>
      <p>We have great doctors</p>
    </div><br><br><br>
    <div class="hello animated alert alert-pink">
      <p class="hellotitle">HELLO</p>
      <p>You can communicate with any of these doctors through the contact information given under eche image ...<br>You
        can
        also choose the doctor nearest you by your city.<br>and you can see all doctors in our
        website
        <a href="doctors_pages/doctors.php">from here...</a></p>
    </div><br><br>
    <div class="carousel-animate animated owl-carousel carousel-hand owl-theme">
      <div class="item">
        <div><img src="img/doctor.jpg" style="width: 100%;" alt="photo"></div>
        <div class="doctorinfo">
          <h3>name</h3>
          <p>Specialization</p>
          <p>address</p>
          <p><i class="fa fa-phone"></i>phone number</p>
          <p>social media</p>
        </div>
      </div>
      <div class="item">
        <div><img src="img/doctor.jpg" style="width: 100%;" alt="photo"></div>
        <div class="doctorinfo">
          <h3>name</h3>
          <p>Specialization</p>
          <p>address</p>
          <p><i class="fa fa-phone"></i>phone number</p>
          <p>social media</p>
        </div>
      </div>
      <div class="item">
        <div><img src="img/doctor.jpg" style="width: 100%;" alt="photo"></div>
        <div class="doctorinfo">
          <h3>name</h3>
          <p>Specialization</p>
          <p>address</p>
          <p><i class="fa fa-phone"></i>phone number</p>
          <p>social media</p>
        </div>
      </div>
      <div class="item">
        <div><img src="img/doctor.jpg" style="width: 100%;" alt="photo"></div>
        <div class="doctorinfo">
          <h3>name</h3>
          <p>Specialization</p>
          <p>address</p>
          <p><i class="fa fa-phone"></i>phone number</p>
          <p>social media</p>
        </div>
      </div>
      <div class="item">
        <div><img src="img/doctor.jpg" style="width: 100%;" alt="photo"></div>
        <div class="doctorinfo">
          <h3>name</h3>
          <p>Specialization</p>
          <p>address</p>
          <p><i class="fa fa-phone"></i>phone number</p>
          <p>social media</p>
        </div>
      </div>
      <div class="item">
        <div><img src="img/doctor.jpg" style="width: 100%;" alt="photo"></div>
        <div class="doctorinfo">
          <h3>name</h3>
          <p>Specialization</p>
          <p>address</p>
          <p><i class="fa fa-phone"></i>phone number</p>
          <p>social media</p>
        </div>
      </div>
      <div class="item">
        <div><img src="img/doctor.jpg" style="width: 100%;" alt="photo"></div>
        <div class="doctorinfo">
          <h3>name</h3>
          <p>Specialization</p>
          <p>address</p>
          <p><i class="fa fa-phone"></i>phone number</p>
          <p>social media</p>
        </div>
      </div>
    </div>
  </section><br><br><br>
  <!--medical informations-->
  <div class="minfo">
    <div class="container">
      <div class="title1 animated">
        <h3>Medical informations</h3>
        <p>Chose your week of pragrancy</p>
      </div>
      <br><br><br>
      <div class="note1 animated">
        <p class="notetitle1">HELLO</p>
        <p class="notecont1">
          you can chose your month from this list to get informations.<br>
          this informations provide you by sports you shoud do ,useful food and medical informations.
        </p>
      </div><br><br><br>
      <div class="allweeks animated">
        <div class="row">
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month2info.php">month2</a></h3>
          </div>
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month3info.php">month3</a></h3>
          </div>
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month4info.php">month4</a></h3>
          </div>
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month5info.php">month5</a></h3>
          </div>
        </div>
        <div class="row">
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month6info.php">month6</a></h3>
          </div>
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month7info.php">month7</a></h3>
          </div>
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month8info.php">month8</a></h3>
          </div>
          <div class="allcols col-lg-3 col-md-6">
            <h3><a href="informations_pages/month9info.php">month9</a></h3>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
  </div>
  <!--video section-->
  <section class="videosec">
    <span class="closevideo">&times;</span>
    <div class="videocont">
      <iframe class="vid" width="700" height="400" src="https://www.youtube.com/embed/v3RjeM0EwyI" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section>
  <!--videos-->
  <div class="videoscont">
    <div class="container">
      <br><br><br>
      <div class="title2 videotitle animated">
        <h3>Videos</h3>
        <p>Watch Sports Videos</p>
      </div>
      <br><br><br>
      <div class=" row">
        <div class="vidinfo animated col-md-6 col-sm-12">
          <h3>Sports Videos</h3>
          <p>The site provides you with many useful videos that
            contain valuable information, and you can watch these
            videos instead of reading it contains the same information.
          </p>
          <a href="videos_pages/videos.php">see all videos..</a>
        </div>
        <div class="vidself animated col-md-6 col-sm-12">
          <i class="play fa fa-play"></i>
          <img src="img/videoimg.jpg" style="width: 100%;" alt="video">
        </div>
      </div>
      <br><br><br>
    </div>
  </div><br><br><br>
  <!--frequst-->
  <div class="frequst">
    <div class="title1 animated text-center">
      <h3>Frequently Ask Questions</h3><br>
      <br><br><br><br>
    </div>
    <div class="frequstcont container">
            <div class="row fr">
                <div class="mulcol animated col-xl-6 col-lg-6 col-md-12 col-12">
                    <div>
                        <h3>Help! I’m feeling nervous about my pregnancy. What can I do?</h3>
                        <p>Don’t be afraid to reach out to others and express your concerns. “Talk with your partner, family or friends about how you are feeling. Keeping your feelings bottled up will only make you feel worse,” says the Office on Women’s Health (womenshealth.gov). Take time to speak to your partner, your family and friends and let them know you’re nervous. Building a support network now will help you throughout your pregnancy. Share your questions, concerns and excitement with your support network and you may be surprised how many mom friends and family members felt the same way you do now. And, chances are, those moms-in-the-know have advice you can use, too.<br>
                            Also, learn as much as you can about pregnancy. Check out books from your library, explore reputable medical resources online, and be sure to speak with your doctor. “By educating yourself, you will know what to expect and feel more in control,” assures the OWH.
                        </p>
                    </div>
                    <div>
                        <h3>Do I really need to take a prenatal vitamin??</h3>
                        <p>This is a good question for you and your doctor to discuss. But most OB-GYNs and pediatricians suggestion expectant moms take a prenatal vitamin containing folic acid throughout their pregnancy. As the U.S. Public Health Service explains, “all women capable of becoming pregnant (should) consume 400 micrograms of folic acid daily to prevent neural tube defects (NTDs).”</p>
                    </div>
                    <div>
                        <h3>How many appointments will I need throughout my pregnancy?</h3>
                        <p>Prenatal care during pregnancy is absolutely essential. “This consistent care can help keep you and your baby healthy, spot problems if they occur, and prevent problems during delivery,” explains the OWH.

Routine checkups usually occur:

Once each month, from week four through week 28

Twice a month, from week 28 through week 36

Weekly from week 36 until you give birth.
The above schedule may change slightly, depending on your pregnancy and your OB-GYN’s practice policies. Be sure to speak with you doctor for a complete schedule of your prenatal appointments.
</p>
                    </div>
                    <div>
                        <h3>How many ultrasounds will I have?</h3>
                        <p>Ultrasound exams can be performed at any point during pregnancy, but they aren’t always considered a routine prenatal test. Most OB-GYNs suggest moms-to-be have at least two:

The first test usually occurs during your first trimester as part of a biophysical profile (a prenatal ultrasound evaluation).

The second is typically scheduled between 18 and 20 weeks, “to look for signs of problems with the baby's organs and body systems and confirm the age of the fetus and proper growth,” says the OWH.
</p>
                    </div>
                </div>
                <div class="mulcol animated col-xl-6 col-lg-6 col-md-12 col-12">
                    <div>
                        <h3>When can I find out the gender of my baby?</h3>
                        <p>During your second-trimester ultrasound appointment, you may be able to learn the gender of your baby; generally between 18 and 20 weeks, according to the OWH.</p>
                    </div>
                    <div>
                        <h3>Can I still exercise during my pregnancy?</h3>
                        <p>The Office of Women’s Health reports that you can indeed exercise throughout your pregnancy. “Unless your doctor tells you not to, try to get at least two hours and 30 minutes of moderate-intensity aerobic activity a week,” the OWH advises.

To maximize the health benefits of working out during pregnancy, and to keep you and your baby safe, spread out your workouts throughout the week. “If you worked out regularly before pregnancy, you can keep up your activity level as long as your health doesn’t change and you talk to your doctor about your activity level throughout your pregnancy,” adds the OWH.
</p>
                    </div>
                    <div>
                        <h3>How much weight should I gain during pregnancy?</h3>
                        <p>“You should gain weight gradually during your pregnancy, with most of the weight gained in the last three months,” according to the USDA Center for Nutrition Policy and Promotion.

The government agency suggests women gain weight at the following rate:

1 to 4 pounds total during the first three months (first trimester)

2 to 4 pounds per month during the fourth to ninth months (second and third trimesters)
The total amount you gain during pregnancy depends on your weight at the time of conception. For women who maintained a healthy preconception weight, the USDA suggests gaining between 25 and 35 pounds. Be sure to speak with you doctor to find out what rate and amount of weight gain are right for you.
</p>
                    </div>
                    <div>
                        <h3>How will I know when it's time to go to the hospital?</h3>
                        <p>Clock your contractions to track when they start, how long they last and time between each. This is a good indicator of how soon the first stages of labor will start. “With true labor, contractions become regular, stronger and more frequent,” says the OWH. These contractions will also establish a regular pattern and not taper off or go away, even if you change position or alter your activity.

“If you ever are unsure if contractions are true labor, call your doctor,” recommends the OWH. A quick phone chat will ease your mind and help you understand if you need to stay home and wait a bit longer, or jump in the car and head to the hospital.

About Our Experts
Office on Women’s Health (womenshealth.gov)
Part of the U.S. Department of Health and Human Services, the Office on Women's Health provides leadership and coordination to improve the health of women and girls through policy, education and model programs.

American Academy of Pediatrics (AAP.org)
The AAP is medical organization composed of over 60,000 pediatricians committed to supporting and educating families with infants through young adults to better develop and maintain optimal physical, mental and social health and well-being.

U.S. Public Health Service (usphs.gov)
The Public Health Service is a government organization overseen by the Surgeon General that focuses on providing education and services to protect, promote and advance the health of U.S. citizens.

USDA Center for Nutrition Policy and Promotion (choosemyplate.gov)
The CNPP was established in 1994 to improve the nutrition and well-being of Americans; the USDA Food Guidance System is one of this government agency’s core programs.


Many pregnant women have a lot of questions for their obstetrician-gynecologists, especially if it's the first time they're expecting a child. A significant change is happening in a woman's body during this special period in her life, so it's no wonder so many of us have so many questions. Women want to know what's safe for their future baby, and themselves. They strive to understand in what ways their lives can continue as normal, and what aspects need to be changed for the time being.

Of course, many of the questions pregnant women ask are similar. They're concerned with what foods are safe to eat, which procedures to undergo, and what the basic no-nos are. To make sure that her own and her future baby's health are under no risk, every woman has to know the answers to all these questions. For example, she needs to know that it's better to stay away from eating sushi, always use sunblock, take necessary vitamins, sleep on the side, and avoid taking painkillers or sleeping pills. All these things are vital to remember for the healthy development of a baby.

So let us answer some of the most common pregnancy-related inquiries with the help of professional obstetricians and gynecologists, AKA OB-GYNs!
</p>
                    </div>
                </div>
            </div>
        </div>
  </div><br><br><br>
  
  <!--footer-->
    <footer class="container-fluid bg-darkblue py-5 px-5">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <a href="index.php"><img src="img/3.jpg" style="width:100px;height: 100px;border-radius: 50%; " alt="logo"></a>
        </div>
        <div class="col-md-4 col-sm-12 py-5">
          <a href="index.php" class="footerlink">Home</a><br><br>
          <a href="doctors_pages/doctors.php" class="footerlink">Doctors</a><br><br>
          <a href="videos_pages/videos.php" class="footerlink">Videos</a><br><br>
          <a href="frqquest_pages/frqquestions.php" class="footerlink">FrqQuestions</a><br><br>
        </div>
        <div class="col-md-4 col-sm-12">
          <div>
            <div class="note">
              <h3 class="notetitle">NOTE</h3>
              This website is mede just for helping you in pregrancy months , that does not mean you can deppend only on
              the information in the
              website , we just provide you by some useful information and some ways to make it easy to communicate with
              nearest doctors.
            </div>
          </div>
        </div>
      </div>
      <hr style="border: 0.5px solid white;">
      <p class="text-center text-light pt-5">Copyright &copy;
        <script>document.write(new Date().getFullYear());</script>
        All rights reserved | This website is made with <i class="fa fa-heart text-danger"></i> by
        <a href="" class="text-danger"><strong>Cs&nbsp;Team</strong></a>
      </p>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="jscript/owl.carousel.js"></script>
    <script src="jscript/plugin.js"></script>
  </body>

  </html>
