<?php 
    if (isset($_POST['Submit'])) {
        $to_email="Claus.Portfolio@outlook.com";
        $subject= "Contacting";
        $firstname = $_POST['firstname'];
        $lastname=$_POST['lastname'];
        $from_email=$_POST['email'];
        $message=$_POST['message'];
        $msg= "<b>From</b>: ".$firstname." ".$lastname." <br><b>Email</b>: ".$from_email."<br><b>Message</b>:<br>".$message;
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
        $headers .= "From: Portfolio-contact";
        mail($to_email,$subject,nl2br($msg),$headers);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact me</title>
        <link rel="stylesheet" href="stylesheet.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
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
        <Header>
            <h1>Portfolio</h1>
        </Header>
        <div class="topnav">
            <a href="Homepage.php">Home</a>
            <a href="projekter.php">Projects</a>
            <a href="about_me.php">About Me</a>
            <a href="#" class="active">Contact Me</a>
        </div>
        <br>
        <div>
            <h2 class="overskrift">Contact Me</h2>
        </div>
        <form method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name">

            <label for="mailaddr">Email Address</label>
            <input type="text" name="email" id="mailaddr" placeholder="Your@Email.com">

            <label for="msg">Message</label>
            <textarea name="message" id="msg" cols="30" rows="10" placeholder="Your message to me.."></textarea>

            <input type="submit" value="submit" name="Submit">
        </form>
        <footer>
        <div class="row">
            <div class="colum">
                <p><b>Made by</b>: Claus Dimon</p>
            </div>
            <div class="colum">
                <p><b>Contact Phonenr</b>: <a href="tel:+4581754402">+45 81 75 44 02</a></p>
            </div>
            <div class="colum">
                <p>&copy;<?php
                    $fromYear = 2019; 
                    $thisYear = (int)date('Y'); 
                    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Portfolio
                </p>
            </div>
        </div>
    </footer>
    </body>
</html>