<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    body {font-family: Arial, Helvetica, sans-serif;}
    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

   
    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>

<?php

    if (isset($_POST["submit"])) {
        $name        = $_POST['firstname'];
        $lname       = $_POST['lastname'];
        $msg         = $_POST['subject'];
        $formcontent = "First Name : $name\n
                        Last Name : $lname \n 
                        Message: $msg \n";
        $recipient   = "TEST-E-MAIL@TEST.COM";
        $subject     = "CONTACT FORM";
        $mailheader  = "From: $name <$email> \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo "The email message was sent.";
    }

?>

</body>
</html>
