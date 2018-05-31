<?php

session_start();

if((isset($_SESSION['remember'])) && ($_SESSION['remember'] == true))
{
    header('Location: close.php');
    exit();
}

?>

<!DOCTYPE HTML>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale-1.0" />
    <title>ASP.NET MVC</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta name="description" content="Everything you want to know about ASP.NET MVC is here... Welcome and enjoy.">
    <meta name="keywords" content="ASP.NET MVC, .NET, MVC, Model-View-Controller, framework, Microsoft" >
    <meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1" >
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet"/>
    <script type="text/javascript">

        var myIndex = 0;
        carousel();

       

        function carousel() {
            var i;
            var x = document.getElementsByClassName("slides");

            for (i = 0; i < x.length; i++) { x[i].style.display = "none"; }
            myIndex++;

            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";

            setTimeout(carousel, 5000);
        }


        function zegar() {
            now = new Date();
            var hours = now.getHours();
            var min = now.getMinutes();
            var sec = now.getSeconds();

            if (hours < 10) hours = "0" + hours;
            if (min < 10) min = "0" + min;
            if (sec < 10) sec = "0" + sec;

            var dzien = now.getDate();
            var miesiac = now.getMonth() + 1;
            var rok = now.getFullYear();

            if (dzien < 10) dzien = "0" + dzien;
            if (miesiac < 10) miesiac = "0" + miesiac;

            document.getElementById('czas').innerHTML = hours + ":" + min + ":" + sec + " | " + dzien + "." + miesiac + "." + rok + "r.";

            setTimeout("zegar()", 1000);
        }

   
    </script>


</head>


<body onload="carousel() ; zegar() ; alert('The site was created as a final work on the subject of Internet technologies\n                                    Opole University of Technology    \n                                    Szczepan Paszkiel, PhD Eng. ');">


    <div class="all">

        <div class="half">
            <div id="title">ASP.NET MVC</div>
            <a href="#basic"><div class="rectanglebig">Basic information</div></a>
            <a href="#tools"><div class="rectanglesmall">Background</div></a>
            <a href="#gallery"><div class="rectanglesmall">Diagrams</div></a>
            <a href="#study"><div class="rectanglesmall">View engines</div></a>
            <div style="clear:both;"></div>
            <a href="#links"><div class="rectanglebig">Learn more</div></a>
        </div>
        <div class="half">
            <div id="slideshow" style="width:570px; height:265px;" />
            <img class="slides" src="slides/slide1.jpg" style="width:100%; height:100%">
            <img class="slides" src="slides/slide2.jpg" style="width:100%; height:100%">
            <img class="slides" src="slides/slide3.png" style="width:100%; height:100%">

        </div>
        <a href="#survey"><div class="rectanglebig">Sources</div></a>
        <a href="#contact"><div class="rectanglesmaller">Contact</div></a>
        <a href="#login"><div class="rectanglesmaller">Login</div></a>
        <a href="#registration"><div class="rectanglesmaller">Registration</div></a>
    </div>
    <div style="clear:both;"></div>
    <div id="footer">
        <div id="czas"></div>
        Paulina Wuczkowska - Informatyka &copy; 	| 2018r.
    </div>
    <script type="text/javascript"></script>
    <div class="all">

        <div class="content">


            <h1 id="basic">WHAT IS ASP .NET MVC?</h1>

            The ASP.NET MVC is a web application framework developed by Microsoft, which implements the model�view�controller (MVC) pattern.
            <br/>
            It is open-source software, apart from the ASP.NET Web Forms component which is proprietary.
            <br/>
            In the later versions of ASP.NET, ASP.NET MVC, ASP.NET Web API, and ASP.NET Web Pages (a platform using only Razor pages) will merge into a unified MVC 6.
            

        </div>
      
            <div class="content">

                <div id="MenuRozmiaru">
                    <div id="w1" class="lit selected">A</div>
                    <div id="w2" class="lit">A</div>
                    <div id="w3" class="lit">A</div>
                </div>

                <h1 id="tools">BACKGROUND</h1>
                Based on ASP.NET, ASP.NET MVC allows software developers to build a web application as a composition of three roles: Model, View and Controller.
                <br />
                The MVC model defines web applications with 3 logic layers:
                <br />

                Model (business layer) <br />
                View (display layer) <br />
                Controller (input control) <br /> <br />

                A model represents the state of a particular aspect of the application. A controller handles interactions and updates the model to reflect a change in state of the application, and then passes information to the view.
                <br />
                A view accepts necessary information from the controller and renders a user interface to display that information.
                <br />

                In April 2009, the ASP.NET MVC source code was released under the Microsoft Public License (MS-PL).

                "ASP.NET MVC framework is a lightweight, highly testable presentation framework that is integrated with existing ASP.NET features. Some of these integrated features are master pages and membership-based authentication. The MVC framework is defined in the System.Web.Mvc assembly."

                The ASP.NET MVC framework couples the models, views, and controllers using interface-based contracts, thereby allowing each component to be tested independently.
                <br /> <br />
                <h3> Apache License 2.0 release </h3>
                <br />
                In March 2012, Scott Guthrie announced on his blog that Microsoft had released part of its web stack (including ASP.NET MVC, Razor and Web API) under an open source license (Apache License 2.0).

                Guthrie wrote that
                <br />"Doing so will enable a more open development model where everyone in the community will be able to engage and provide feedback on code checkins, bug-fixes, new feature development, and build and test the products on a daily basis using the most up-to-date version of the source code and tests."
                <br /> <br />

                The source code now resides on CodePlex. ASP.NET Web Forms was not included in this initiative for various reasons.
                <br /><br />
            </div>

            <div class="content">

                <h1 id="gallery">GALLERY</h1><div style="clear:both;"></div>
                <a href="releasehistory.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/releasehistory.png)"></div>
                        <h2>ASP. NET MVC - Release history</h2>
                    </div>
                </a>
                <a href="releasehistorycore.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/releasehistorycore.png)"></div>
                        <h2>ASP.NET Core MVC - Release history</h2>
                    </div>
                </a>
                <a href="mvclook.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/mvclook.jpg)"></div>
                        <h2>What does MVC look like?</h2>
                    </div>
                </a>
                <div style="clear:both;"></div>
                <a href="designpatterns.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/designpatterns.png)"></div>
                        <h2>Presenter - View - Model</h2>
                    </div>
                </a>
                <a href="mvcwork.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/mvcwork.png)"></div>
                        <h2>How does it look in practice</h2>
                    </div>
                </a>
                <a href="mvcframework.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/mvcframework.gif)"></div>
                        <h2>MVC framework</h2>
                    </div>
                </a>
                <div style="clear:both;"></div>
                <a href="visual.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/visual.png)"></div>
                        <h2>Use Visual Studio to code</h2>
                    </div>
                </a>

                <a href="frameworkarchitecture.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/frameworkarchitecture.png)"></div>
                        <h2>.NET framework 4.5 Architecture</h2>
                    </div>
                </a>
                <a href="overview.html">
                    <div class="galleryframe">
                        <div class="gallerypicture" style="background-image: url(pictures/overview.png)"></div>
                        <h2>ASP.NET MVC Overview</h2>
                    </div>
                </a>
                <div style="clear:both;"></div>
            </div>
            
                <div class="content">

                    <h1 id="study">View engines</h1>
                    <br />
                    The view engines used in the ASP.NET MVC 3 and MVC 4 frameworks are Razor and the Web Forms.
                    <br />
                    Both view engines are part of the MVC 3 framework. By default, the view engine in the MVC framework uses Razor .cshtml and .vbhtml, or Web Forms .aspx pages to design the layout of the user interface pages onto which the data is composed.
                    However, different view engines can be used. Additionally, rather than the default ASP.NET Web Forms postback model,
                    any interactions are routed to the controllers using the ASP.NET Routing mechanism. Views can be mapped to different URLs.
                    <br /> <br />

                    Other view engines:
                    <br />

                    The MVCContrib library contains 8 alternate view engines. Brail, NDjango, NHaml, NVelocity, SharpTiles, Spark, StringTemplate and XSLT.
                    <br />
                    The StringTemplate View Engine utilizes a .NET port of the Java templating engine, StringTemplate.
                    <br />
                    Spark is a view engine for the ASP.NET MVC (and the Castle Project MonoRail) frameworks.
                    <br />
                    NDjango is a port of the Django web framework's templating language to .NET. It is written in F# and comes with Visual Studio extension including full Intellisense support
                    <br />
                    Naked Objects for .NET is an implementation of the naked objects pattern using ASP.NET MVC
                </div>

                <div class="content">

              

                    <h1 id="links">Learn more </h1>
                    <ul>
                        <a href="https://www.asp.net/mvc" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>Microsoft website about ASP .NET MVC
                        </a></li>

                        <a href="https://en.wikipedia.org/wiki/ASP.NET_MVC" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li> Wikipedia
                        </a></li>

                        <a href="https://www.youtube.com/watch?v=E7Voso411Vs" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>ASP.NET MVC Tutorial for Beginners on Youtube
                        </a></li>

                        <a href="https://app.pluralsight.com/player?author=scott-allen&name=aspdotnet-mvc5-fundamentals-m1-introduction&mode=live&clip=0&course=aspdotnet-mvc5-fundamentals" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>Pluralsight course
                        </a></li>

                        <a href="https://msdn.microsoft.com/en-us/library/dd381412(v=vs.108).aspx" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>Microsoft website about ASP .NET MVC
                        </a></li>

                        <a href="https://www.youtube.com/watch?v=zWFoZb6EiwU" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>"Learn ASP NET MVC 5 Complete Tutorial 2018 COMPLETE" on Youtube
                        </a></li>
                    </ul>

                </div>

                <div class="content">

                    <h1 id="survey">Sources:</h1>Sites that I used:
                    <br />

                    <ul>

                        <a href="https://en.wikipedia.org/wiki/ASP.NET_MVC#See_also" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>ttps://en.wikipedia.org/wiki/ASP.NET_MVC#See_also
                        </a></li>


                        <a href="https://www.asp.net/mvc" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>https://www.asp.net/mvc
                        </a></li>


                        <a href="http://phpmvcframework.blogspot.com/" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>http://phpmvcframework.blogspot.com/
                        </a></li>


                        <a href="https://www.asp.net/mvc/overview/controllers-and-routing" onmouseover="this.style.color='darkblue'" style="color:white;" onmouseout="this.style.color='white';">
                            <li>http://phpmvcframework.blogspot.com/
                        </a></li>

                    </ul>
                </div>

                <div class="contenttwo">

                    <h1 id="contact">CONTACT </h1>
                <form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 </td>
</tr>
</table>
</form>
                </div>
                <div class="contenttwo">
                    <h1 id="login">LOGIN </h1>
                    <form action="zaloguj.php" method="post">
                        Login: <br /> <input type="text" name="login" /> <br />
                        Password: <br /> <input type="password" name="password" /> <br /> <br />
                        <input type="submit" value="Submit" />
                    </form>
                    <?php

                    if(isset($_SESSION['error']))
                    echo $_SESSION['error'];

                    ?>

                    
                </div>
  

            </div>



         <div class="contenttwo">
             <h1 id="registration">REGISTRATION </h1>
     
                <form action="rejestracja.php" method="post">
                Nickname: <br /> <input type="text" name="nick" /><br />
                <?php

                if (isset($_SESSION['e_nick']))
                {
                echo '<div class ="error">'.$_SESSION['e_nick'].'</div>';
                unset($_SESSION['e_nick']);
                }

                ?>
                E-mail: <br /> <input type="text" name="email" /><br />

                <?php
                 if(isset($_SESSION['e_email']))
                 
                 { 
                 echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                 unset($_SESSION['e_email']);
                 }

                ?>
                Password: <br /> <input type="password" name="pass1" /><br />

                
                <?php
                 if(isset($_SESSION['e_pass']))
                 
                 { 
                 echo '<div class="error">'.$_SESSION['e_pass'].'</div>';
                 unset($_SESSION['e_pass']);
                 }

                ?>

                Repeat password: <br /> <input type="password" name="pass2" /><br />

                <label>
                    <input type="checkbox" name="regulamin" /> I accept the terms and conditions
                </label>

                <?php
                 if(isset($_SESSION['e_regulamin']))
                 
                 { 
                 echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                 unset($_SESSION['e_regulamin']);
                 }

                ?>


               <div class="g-recaptcha" data-sitekey="6LdCe1UUAAAAAEfxMtSHb29cuhipr0OadlNtP4AE"></div>
               
                <br />

                <input type="submit" value="Register" />

            </form>

     </div>
    </div>

  

    

</body >
</html >