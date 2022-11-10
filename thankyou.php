<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    <div><a href="main.html"><img class="logo" src="bg/1.png"></a></div>


    <div class="thankyou">
        <?php 
             echo " Dear ".$_POST['name'].",<br> Thank you for sharing your valueable feedback. We will get back to you shortly. Also, you will receive the confirmation on the same on your email id: ".$_POST['email']." and also on your contact number: ".$_POST['phone']."." ;
         ?>
       
     </div>


  </body>
</html>
