<?php
session_start();
if(!isset($_SESSION['sendyou'])){
  die("<h1>error....</h1>");
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>done</title>
   </head>
   <body>
     new we have your information , we will discover your cv and we will send you soon.
   </body>
 </html>
<?php
$_SESSION=array();
session_destroy();
 ?>
