<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <!-- this is top bar -->
   <?php include ('top_bar.php');?>
    <!-- headr -->
    <?php include ('header.php');?>
    
    <div class="container">  
  <form class="contact-form" action="contactform.php" method="post">
    <h3>Contact Form</h3>
    <h4>Ask us for any questions</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name">
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="mail" >
    </fieldset>
    <fieldset>
      <input placeholder="Subject" type="text" name="subject" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" >Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="#" target="_blank" >Abdelhamid Touil</a></p>
  </form>
</div>
</body>
<?php include ('footer.php');?>
</html>