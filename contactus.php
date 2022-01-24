<!-- Title: Form to email
     Author: htmldog.com
     Date: 2020
     Availability: https://htmldog.com/techniques/formtoemail/
-->

<?php

if($_POST["submit"]) {
    $recipient="walee.ahmed@city.ac.uk";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html>
    <head>
        <title>Cloud Computing - Future</title>
        <link rel="stylesheet" type="text/css" href="css/contactstyle.css">
    </head>
    <body>
    
        <header id="main-header">
            <div class="container">
        <h1> Cloud Computing - Contact Us</h1>
            </div>
        </header>
        
        <nav id="navbar">
            <div class="container">
                <ul>
                    <li><a href="./index.html">Home Page</a></li>
                    <li><a href="history.html">History</a></li>
                    <li><a href="Future.html">Future</a></li>
                    <li><a href="loginpage.php">Login</a></li>
                    <li><a href="quiz.html">Quiz</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul> 
           </div>
        </nav>
        
        <section id="pagebanner">
            <div class="container">
                <h1>Contact Form</h1>
            </div>
        </section>
        
        <?=$thankYou ?>

    <form method="post" action="contactus.php" class="whole-form" name="contactform">
        <div class="form-info">
            <label>Name:</label>
            <input name="sender" type="text">
        </div>
        <div class="form-info">
            <label>Email address:</label>
            <input name="senderEmail" type="text">
        </div>
        <div class="form-info">
            <label>Message:</label>
            <textarea rows="5" cols="20" name="message" type="text">
            </textarea>
        </div>
        <input type="submit" name="submit">
    </form>
        
         <br>
        <footer id="main-footer">
            <p>Cloud computing information website created by Walee Ahmed</p>
        </footer>
    </body>
</html>