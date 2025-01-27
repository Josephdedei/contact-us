<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "josephabeba@gmail.com";

if (mail($recipient, $subject, $message, $mailheader)) {
echo'

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>THANK YOU FOR CONTACTING US. GOD LOVES YOU.</h1>
      <p class="back">Go back to <a href="index.html">homepage</a>.</p>
      
    </div>
  </body>
  
</html>';
  } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request method.";
}
?> 


