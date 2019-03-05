<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mail_from = $_POST['mail_from'];
	$message = $_POST['message'];

	$mail_to = "support@vratsa-bg.com";
	$headers = "From: ". $mail_from;
	$txt = "Hello, You have an e-mail from ".$uname.".\n\n".$message;

	mail($mail_to, $subject, $txt, $headers);
	header("Location: contact.php?mailsend");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Vratsa - City Like a Balkan</title>
</head>
<body>

    <!--NAVIGATION BAR-->

    <div class="dropdown">
        <input type="checkbox" id="checkbox_toggle">
        <label for="checkbox_toggle" class="hamburger">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
         </label>
        <nav>
          <ul>
          <li><a href="index.php">ОТНОСНО</a></li>
          <li><a href="landmarks.php">ЗАБЕЛЕЖИТЕЛНОСТИ</a></li>
        </ul>
          </nav>
      </div>
      
      <!-- CONTACT FORM -->

    <!-- POSTs back to the page's URL upon submit with a g-recaptcha-response POST parameter. -->
 
 	<form class="form" action="" method="post">
     <h1 class="wow fadeInUp">Свържете се <span>с нас</span></h1>
 		  <input type="text" class="name brdDown wow fadeInLeft" name="name" placeholder="Име" required="required"><br>
 		  <input type="text" class="mail brdDown wow fadeInRight" data-wow-delay=".3s"name="mail_from" placeholder="Имейл" required="required"><br>
 		  <input type="text" class="title brdDown wow fadeInLeft" data-wow-delay=".5s"name="subject" placeholder="Тема" required="required"><br>
 		  <textarea name="message" class="msg brdDown wow fadeInRight" data-wow-delay=".7s"placeholder="Съобщение" required="required" rows="5" cols="19"></textarea><br>
  </div>
 		<input type="submit" class="send btn wow jackInTheBox" data-wow-delay="1s"name="submit" value="Изпрати">
   </form>
      <p></p>

   <footer>
      <div class="socialm">
        <a href="#"><i class="fab fa-facebook socialm"></i></a>
        <a href="#"><i class="fab fa-instagram socialm"></i></a>
        <a href="#"><i class="fab fa-twitter-square socialm"></i></a>
      </div>
      <p class="mrg">vratsa-bg.com © 2018-2019</p>
      <p class="mrg">Vratsa, Bulgaria</p>
    </footer>
    <div class="infoDevs">
      <p class="txtDevs">Дизайн и разработка <a href="https://www.instagram.com/vgenovonhorizon/?hl=bg">Валентин Генов</a> и <a href="https://www.instagram.com/haji_bojo_whiskey/?hl=bg">Божидар Ангелов.</a></p>
      </div>

      <script src="js/wow.min.js"></script>
            <script>
            new WOW().init();
            </script>
</body>
</html>