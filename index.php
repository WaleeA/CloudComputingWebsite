<!DOCTYPE html>
<html>
    <head>
        <title>Cloud Computing</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    
        <header id="main-header">
            <div class="container">
        <h1> Cloud Computing</h1>
            </div>
        </header>
        
        <nav id="navbar">
            <div class="container">
                <ul>
                    <li><a href="index.html">Home</a></li>
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
                <h1>Welcome</h1>
            </div>
        </section>
        
        <!-- Title: Slideshow/Carousel 
             Author: W3Schools.com
             Date: 2020
             Availablity: https://www.w3schools.com/howto/howto_js_slideshow.asp
        -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/mainCCimg1.png" style="width:100%">
                <div class="captext">Image by <a href="https://www.fastmetrics.com/blog/tech/what-is-cloud-computing/"> Fastmetrics.com </a></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/mainCCimg2.jpg" style="width:100%">
                <div class="captext">Image by <a href="https://towardsdatascience.com/battle-of-cloud-computing-f52c2840986f"> Towardsdatascience.com</a></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/mainCCimg3.jpg" style="width:100%">
                <div class="captext">Image by <a href="https://www.testpreptraining.com/tutorial/introduction-to-cloud-computing/">Testpreptraining.com</a></div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        
        <div class="container">
            <p style="text-align:center">Cloud computing is the delivery of on-demand computing                   
            services -- from applications to storage and processing power - -
                typically over the internet and on a pay-as-you-go basis.</p>
            <br>
            <br>
            <p style="text-align:center">
                Companies of all different sizes and backgrounds can use cloud
                computing for various reasons such as server hosting, email and 
                virtual desktops. An example of this being video game makers are
                using the cloud to deliver online games to millions of players
                around the world.</p>
        </div>
        <br>
        <footer id="main-footer">
            <p>Cloud computing information website &copy;2020 created by Walee Ahmed</p>
        </footer>
        <script src="javascript/slideshow.js"></script>
    </body>
</html>