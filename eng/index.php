<!-- <?php 
if(isset($_POST['submit'])){
    $to = "itsolutions.kontakt@gmail.com";
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $output = $_POST['output'];
    $message = $name . " " . $from . " napisal: " . $_POST['message'];
    mail($to,$from,$message);
    }
?> -->
<!DOCTYPE html>
 <html style="scroll-behavior: smooth; scroll-padding-top: 50px;"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ITSolutions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="images/logofb.jpg">
        <meta property="og:description" content="Kliknij w link! Tworzymy strony www dla firm oraz osób prywatnych.">
        <link rel="icon" href="images/favicon.svg" sizes="48x48" type="image/svg">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1100px) and (max-width: 8000px)" href="stylesheet.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1px) and (max-width: 1099px)" href="stylesheet_mobile.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171397768-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171397768-1');

  function validateForm() {
  let input_email = document.forms["formularz"]["email"].value;
  if (input_email=="" || input_email == null) {
    alert("Proszę wpisać swój adres mailowy :) ");
    return false;
  }
  else 
  {
    alert("Dziękujemy za kontakt!");
  }
} 
</script>
        <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
        <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    </head>
    <body onload="preload()" >
        <div id="preloader">
            <div class="loader">
                <span class="spanix">{</span><span class="spanix">}</span>
              </div>
        </div>
<img src="images/logo.png" style="display:none;"/>
<div id="container">
            <div id="header">
<div id="logo" onclick="remove_menu()"></div>

<div id="list" onclick="menu()"   >
<ul id="unord_list">
    <li><a href="#section" style="text-decoration: none; color:inherit;">ABOUT</a></li>
    <li><a href="#oferta" style="text-decoration: none; color:inherit;">OFFER</a></li>
    <li><a href="#portfolio" style="text-decoration: none; color:inherit;">PORTFOLIO</a></li>
    <li id="button" ><a href="#contact" style="text-decoration: none; color:inherit;">CONTACT</a></li>
    <li id="Polish"><a class="flag" href="https://itsweb.pl/"></a></li>
    <li id="English"><a  class="flag" href="https://itsweb.pl/eng"></a></li>
</ul>
</div>
         </div>
         <!-- <div class="success">
         <div class="successImg"></div>
         <h33>Sukces!</h33>
         <p33>Email został wysłany. <br> Dziękujemy za kontakt!</p33>
         <button class="successButton">Powrót</button>
         </div> -->
            <div id="nav" onclick="remove_menu()">
                <div id="aside">
                <span class="typer" id="type-element" data-delay="270" data-words="WEBSITES,GRAPHICS,DESIGN,SOCIAL MEDIA" data-colors="white"></span><p1>_</p1>
               </div>
               <div id="sprawdz"><a href="#oferta" id="img" style="text-decoration: none; color:inherit;">CHECK THE OFFER</a></div>
            </div>
        </div>
        <div id="section" onclick="remove_menu()">
            <div id="text">
                <h1>ABOUT US</h1>
                <p>We are a group of friends interested in creating <strong>websites</strong>, social medias and graphic design for a long time. We will create proffesional website, graphics or fanpage on facebook for your business. Check out our portfolio and contact us, let's start working together! </p>
            </div>
            <div id="anim"></div>
        </div>
        <div id="stack" onclick="remove_menu()">
            <h6>WHAT DO WE OFFER?</h6>
            <div id="offer">
<div class="holder"><div class="icon" id="grafika"></div><h7><strong>GRAPHICS</strong></h7><p6>We will create graphics for your company or for a specific event.</p6></div>
<div class="holder"><div class="icon" id="strony_net"></div><h7><strong>WEBSITES</strong></h7><p6>We will create website for your business.</p6></div>
<div class="holder"><div class="icon" id="ads"></div><h7><strong>ADS</strong> AND ANIMATIONS</h7><p6>We will create a static or animated advertisement for your company.</p6></div>
<div class="holder"><div class="icon" id="social_media"></div><h7><strong>SOCIAL MEDIA</strong></h7><p6>We will create and run your company's website on social media.</p6></div>
<div class="holder"><div class="icon" id="zmiany_na_str"></div><h7>REFRESH YOUR WEBSITE</h7><p6>We will modernize your website and add new elements/functionalities.</p6></div>
            </div>
            <h9>OUR STACK:</h9>
            <div id="our_stack">
                 <div class="carousel-el" id="adobe"></div>
                 <div class="carousel-el" id="wordpress"></div>
                 <div class="carousel-el" id="javascript"></div>
                 <div class="carousel-el" id="html5"></div>
                 <div class="carousel-el" id="css3"></div>
                 <div class="carousel-el" id="jquery"></div>
                 <div class="carousel-el" id="photoshop"></div>
                 <div class="carousel-el" id="php"></div>
                 <div class="carousel-el" id="nodejs"></div>
                 <div class="carousel-el" id="sass"></div>
                 <div class="carousel-el" id="presta"></div>
                 <div class="carousel-el" id="mongo"></div>
                 <div class="carousel-el" id="woo"></div>
            </div>
        </div>
        <h2 id="oferta">OFFER</h2>
   <div id="oferty" onclick="remove_menu()"> 
   <div id="pakiet10" class="pakiety">
    <hr id="hr_ten">
    <img src="images/6-sklep.svg" class="image firstimage" >
    <h3>ONLINE SHOP</h3>
    <h11 style="margin-bottom:15px;">FROM $599</h11>
    <p5><strong>Your personalized online shop</strong></p5>
    <p5>5 subpages and 20 products</p5>
    <p5>Editable website and technical support</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: SKLEP INTERNETOWY.) ">WYBIERAM!</button></a>
</div>
<div id="pakiet1" class="pakiety">
    <hr id="hr_one">
    <img src="images/1-odswiezenie.svg" class="image firstimage" >
    <h3>REFRESH YOUR WEBSITE</h3>
    <h11 style="margin-bottom:15px;">from $35</h11>
    <p5>Add elements on website</p5>
    <p5><strong>Modernize website</strong></p5>
    <p5>Add new functionalities</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: ODŚWIEŻENIE STRONY.) ">CHOOSE!</button></a>
</div>
<div id="pakiet2" class="pakiety" >
    <hr id="hr_two">
    <img src="images/2-stronawww.svg" class="image">
    <h3>YOUR WEBSITE</h3>
    <h11>from $180</h11>
    <p5>Individual graphic design</p5>
    <p5>Hosting for one year</p5>
    <p5>Up to 5 corrections</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: TWOJA STRONA WWW.) ">CHOOSE!</button></a>
</div>
<div id="pakiet3" class="pakiety">
    <hr id="hr_three">
    <img src="images/3-grafika.svg" class="image">
    <h3>GRAPHICS</h3>
    <h11>from $18</h11>
    <p5>Logo of your company</p5>
    <p5>Graphics on specific event</p5>
    <p5>Ads</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: GRAFIKA.) ">CHOOSE!</button></a>
</div>
<div id="pakiet4" class="pakiety">
    <hr id="hr_four">
    <img src="images/4-dod_elem.svg" class="image">
    <h3>ADD ELEMENTS TO YOUR WEBSITE</h3>
    <h11>from $18</h11>
    <p5>Add new functionalities</p5>
    <p5>Changes in content</p5>
    <p5>Changes in design</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: DODANIE ELEMENTÓW NA STRONĘ.) ">CHOOSE!!</button></a>
</div>
<div id="pakiet5" class="pakiety">
    <hr id="hr_five">
    <img src="images/5-socialmedia.svg"  class="image scndimage">
    <h3>SOCIAL MEDIA</h3>
    <h11>from $200</h11>
    <p5>Facebook and Instagram</p5>
    <p5>Everyday posts</p5>
    <p5>Individual graphics and posts</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: SOCIAL MEDIA.) ">CHOOSE!</button></a>
</div>
 <div id="portfolio" onclick="remove_menu()">
    <h9>PORTFOLIO</h9>
    <div id="katarzynawala"><a class="link" href="http://www.katarzynawala.pl/"></a></div>
    <div id="hegemon"><a class="link" href="http://www.hegemon.com.pl"></a></div>
<div id="angel-container"></div>
<div id="crissToddlers-container"></div>
</div>        
<div id="contact"onclick="remove_menu()">
<div id="kontener"onclick="remove_menu()">
    <h2>CONTACT</h2>
    <form id="formularz" method="post" name="formularz" data-netlify="true" onsubmit="return validateForm()">
        <label class="label-text" id="label-name" for="name">Name:</label>  <input type="text" id="name" class="input-text" placeholder="Name..." name="name" />
        <label class="label-text" id="label-email" for="email">e-mail adress:</label> <input type="email" id="email" class="input-text" placeholder="e-mail..." name="email"/>
        <textarea id="message" cols="22" rows="22" placeholder="Your message..." name="message"></textarea>
        <input type="submit" id="submit-button" placeholder="Send request!" value="Send request!" name="submit">   
   </form>
</div>
</div> </div>
<footer onclick="remove_menu()">
    <p2>© 2020 ITSolutions. All rights reserved.</p2>
    <div id="socials">
        <a href="https://www.facebook.com/ITSolutionsPL/" style="margin:0% 5% 0% 0%;"><div id="fb"></div></a>
        <a href="https://www.linkedin.com/in/bartosz-gromek-80a484184/" style="margin:0% 5% 0% 0%;"><div id="ig"></div></a>
        <a href="mailto:itsolutions.kontakt@gmail.com" style="margin:0% 5% 0% 0%;"><div id="mail"></div></a>
    </div>
</footer>
<script src="JS.js" async></script>
    </body>
</html>