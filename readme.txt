**HTML & PHP FILE LOCATIONS**

The html and php files for the different pages of the website can be found on the main spread of the file. Im really sorry but i tried to place them in a seperate folder like the CSS files but for some odd reason, the link between pages would not work within filezilla and my text editor. File names: index.html,History.html, Future.html, quiz.html, loginpage.php, contactus.php, index.php (inputerror.php, logindata.php and serverdata.php can be found in loginPHPData folder)

** CSS FILE LOCATIONS **

The corresponding CSS files of the html and php files can be found in the CSS folder. You should see four files ( "contactstyle.css", "Loginstyle.css", "Quizstyle.css" and Style.css". They are somewhat similar but all of them have unique elements that can be used for the individual html files that they are linked with. File Names: contactstyle.css, loginstyle.css, quizstyle.css, style.css

** JAVASCRIPT AND CLIENT-SIDE JS**

The corresponding javascript files for the quiz page and slideshow can be found in the javascript folder of the zip file. The slideshow javascript is allows the page to have an interactive slideshow of pictures that they can go back and forth with buttons on the side and below the slideshow. This can be found on the home page.

The quiz javascript consists of two files: one for the questions and one for the quiz form/layout. The questions script files pretty much just stores the question that would be displayed and is seperated from the main quiz script file to declutter it. the the "quizgame.js" file holds all of the code needed to store the result of the game and to verify if the answers are correct or not. File names: contactValidation.js, quizname.js, quiz-questions.js and slideshow.js

** VALIDATION BEHAVIOUR**

The contact form that is found in the Contact us page should be able to only accept text for the Name form and the same goes with the login page. Filenames: logindata.php, inputerror.php, contactValidation.js

**Security**

The contact form that is found in the Contact us page should be able to only accept text for the Name form and the same goes with the login page. This will also stop any sql injections as only text is being allowed by the page. Filenames: inputerror.php, contactValidation.js