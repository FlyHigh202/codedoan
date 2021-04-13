<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/hoc bai/css/contact.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<title>Contact Form</title>
</head>
<?php
    require('./header.php');
?> 

<body>
      
    <div class="container text-center">
        <h1>Say Hello</h1>
        <h2>We are ready to serve you</h2>
    </div>
    <div class ="contact-form">
        <form id="contact-form" method="POST" action="/hoc bai/contact.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message" rows="4" required>
                </textarea><br>
                <input type="submit" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>
 
</body>
<?php
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $visistor_email= $_POST['email'];
   $message =$_POST['message'];

   $email_from ='nguyenlamkhoa89@gmail.com';
   $email_subject='New form submitted';
   $email_body ="User Name :$name.\n".
                  "User Email:$visistor_email.\n".
                     "User Message:$message.\n";
   $to='khoa.nl.909@aptechlearning.edu.vn';
   $headers ="From: $email_from \r\n";
   $headers ="Reply-To: $visistor_email \r\n";
   mail($to,$email_subject,$email_body,$headers);
}

?> 
</html>