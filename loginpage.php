<?php include('loginPHPData/serverdata.php')?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cloud Computing - Future</title>
        <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    </head>
    <body>
    
        <header id="main-header">
            <div class="container">
                <h1> Cloud Computing - Login</h1>
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
        
        <!-- Title: Lab 7 Web security
             Author: Alena Denisova
             Date: 2020
             Availablity: https://moodle.city.ac.uk/course/view.php?id=32190 -->
        
        <section id="pagebanner">
            <div class="container">
                <h1>Login</h1>
            </div>
        </section>
     
        <form method="post" action="loginpage.php">
  	<?php include('loginPHPData/inputerror.php');?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
        
        <br>
        <footer id="main-footer">
            <p>Cloud computing information website &copy;2020 created by Walee Ahmed</p>
        </footer>
    </body>
</html>