<?php 

if(isset($_POST['submit'])){
    $to = "itsolutions.kontakt@gmail.com";
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $output = $_POST['output'];
    $message = $name . " " . $from . " napisal: " . $_POST['message'];
    
    mail($to,$from,$message);
    }


?>
<!DOCTYPE html>
 <html style="scroll-behavior: smooth; scroll-padding-top: 50px;"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Strony internetowe, sklepy online, grafika</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="images/logofb.jpg">
        <meta property="og:description" content="Kliknij w link! Tworzymy strony www dla firm oraz osób prywatnych.">
        <link rel="icon" href="images/favicon.svg" sizes="48x48" type="image/svg">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1100px) and (max-width: 8000px)" href="stylesheet.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1px) and (max-width: 1099px)" href="stylesheet_mobile.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    <li><a href="#section" style="text-decoration: none; color:inherit;">O NAS</a></li>
    <li><a href="#oferta" style="text-decoration: none; color:inherit;">OFERTA</a></li>
    <li><a href="#portfolio" style="text-decoration: none; color:inherit;">PORTFOLIO</a></li>
    <li id="button" ><a href="#contact" style="text-decoration: none; color:inherit;">KONTAKT</a></li>
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
                <span class="typer" id="type-element" data-delay="270" data-words="STRONY WWW,GRAFIKA,DESIGN,SOCIAL MEDIA" data-colors="white"></span><p1>_</p1>
               </div>
               <div id="sprawdz"><a href="#oferta" id="img" style="text-decoration: none; color:inherit;">SPRAWDŹ OFERTĘ</a></div>
            </div>
        </div>
<div id="section" onclick="remove_menu()">
            <!-- <div id="text">
                <h1>O NAS</h1>
                <p>Jesteśmy grupą studentów kierunków informatycznych, którzy pasjonują się robieniem <strong>stron internetowych</strong>, social media'mi oraz grafiką komputerową od dawna. Stworzymy profesjonalną witrynę, grafikę oraz stronę na facebooku dla Twojej firmy, zgodną z aktualnymi trendami, zachęcającą do przeglądania.</p>
            </div>
            <div id="anim"></div> -->
        <div class="oNas">
            <div class="text">
            <h1>O NAS</h1>
            <p>Jesteśmy grupą studentów kierunków informatycznych, którzy pasjonują się robieniem <strong>stron internetowych</strong>, social media'mi oraz grafiką komputerową od dawna. Stworzymy profesjonalną witrynę, grafikę oraz stronę na facebooku dla Twojej firmy, zgodną z aktualnymi trendami, zachęcającą do przeglądania.</p>
            </div>
            <div class="ph"></div>
            
        </div>
        <div class="whyUs">
            
            <div class="ph1"></div>
            <div class="text text2">
            <h1>DLACZEGO MY?</h1>
            <p>W naszych projektach stawiamy na profesjonalizm, a więc na oryginalność, płynne działanie strony oraz szybkie ładowanie się jej, stronimy zatem od gotowych szablonów w kreatorach stron www. Każda tworzona przez nas strona jest optymalizowana pod kątem wyszukiwarek, a dodane do każdej strony narzędzie Google Analytics powie Ci, ile osób odwiedza Twoją witrynę! Po zakończonej współpracy oferujemy kompleksowe wsparcie techniczne oraz do 5 dowolnych poprawek! Nie wiesz, który pakiet jest dla Ciebie najlepszy? Napisz do nas!</p>
            </div>
            
        </div>
        <div class="naszStack">
            <div class="text">
            <h1>NASZ STACK</h1>
            <p>Do tworzenia <strong>stron internetowych</strong> z możliwością edycji treści wykorzystujemy sprawdzony CMS jakim jest <strong>Wordpress</strong>. <strong>Sklepy internetowe</strong> tworzymy w <strong>CMS</strong> do tego przeznaczonym jakim jest <strong>PrestaShop</strong>, lecz najlepszym rozwiązaniem według nas jest napisanie strony internetowej w czystym kodzie, co wyróżni ją na tle konkurencji! Do każdej strony dodajemy Google Analytics, które pozawala na obserwowanie ile osób odwiedza dziennie witrynę.</p>
            </div>
            <div class="ph2"></div>
            
        </div>
        
            



</div>

        
        <div id="stack" onclick="remove_menu()">
            <h6>CZYM SIĘ ZAJMUJEMY?</h6>
            <div id="offer">
<div class="holder"><div class="icon" id="grafika"></div><h7><strong>GRAFIKA</strong></h7><p6>Stworzymy grafikę dla Twojej firmy lub na konkretne wydarzenie.</p6></div>
<div class="holder"><div class="icon" id="strony_net"></div><h7><strong>STRONY INTERNETOWE</strong></h7><p6>Stworzymy stronę internetową dla Twojej firmy.</p6></div>
<div class="holder"><div class="icon" id="ads"></div><h7><strong>REKLAMY</strong> I ANIMACJE</h7><p6>Stworzymy reklamę statyczną lub animowaną dla Twojej firmy.</p6></div>
<div class="holder"><div class="icon" id="social_media"></div><h7><strong>SOCIAL MEDIA</strong></h7><p6>Stworzymy i poprowadzimy stronę Twojej firmy w mediach społecznościowych</p6></div>
<div class="holder"><div class="icon" id="zmiany_na_str"></div><h7>ODŚWIEŻENIE TWOJEJ STRONY</h7><p6>Unowocześnimy Twoją stronę oraz dodamy nowe elementy/funkcjonalności.</p6></div>
            </div>
            <h9>NASZE NARZĘDZIA</h9>
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
        <h2 id="oferta">OFERTA</h2>
   <div id="oferty" onclick="remove_menu()"> 
   <div id="pakiet10" class="pakiety" data-aos="zoom-out-up">
    <hr id="hr_ten">
    <img src="images/6-sklep.svg" alt="sklep" class="image firstimage" >
    <h3>SKLEP INTERNETOWY</h3>
    <h11 style="margin-bottom:15px;">od 1499 PLN</h11>
    <p5><strong>Twój spersonalizowany sklep internetowy</strong></p5>
    <p5>5 zakładek i 20 produktów</p5>
    <p5>Możliwość edycji oraz wsparcie techniczne</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: SKLEP INTERNETOWY.) ">WYBIERAM!</button></a>
</div>
<div id="pakiet1" class="pakiety" data-aos="zoom-out-up">
    <hr id="hr_one">
    <img src="images/1-odswiezenie.svg" alt="odswiezenie strony" class="image firstimage" >
    <h3>ODŚWIEŻENIE STRONY</h3>
    <h11 style="margin-bottom:15px;">od 99 PLN</h11>
    <p5>Dodanie elementów na stronę</p5>
    <p5><strong>Unowocześnienie strony</strong></p5>
    <p5>Dodanie nowych funkcjonalności</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: ODŚWIEŻENIE STRONY.) ">WYBIERAM!</button></a>
</div>
<div id="pakiet2" class="pakiety" data-aos="zoom-out-up">
    <hr id="hr_two">
    <img src="images/2-stronawww.svg" alt="strona www" class="image">
    <h3>TWOJA STRONA WWW</h3>
    <h11>od 599 PLN</h11>
    <p5>Indywidualna szata graficzna</p5>
    <p5>Hosting przez rok</p5>
    <p5>Do 5 dowolnych poprawek</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: TWOJA STRONA WWW.) ">WYBIERAM!</button></a>
</div>
<div id="pakiet3" class="pakiety" data-aos="zoom-out-up">
    <hr id="hr_three">
    <img src="images/3-grafika.svg"  alt="grafika" class="image">
    <h3>GRAFIKA</h3>
    <h11>od 49 PLN</h11>
    <p5>Logo Twojej firmy</p5>
    <p5>Grafika na konkretne wydarzenie</p5>
    <p5>Reklamy</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: GRAFIKA.) ">WYBIERAM!</button></a>
</div>
<div id="pakiet4" class="pakiety" data-aos="zoom-out-up">
    <hr id="hr_four">
    <img src="images/4-dod_elem.svg" alt="dodanie elementow" class="image">
    <h3>DODANIE ELEMENTÓW NA STRONĘ</h3>
    <h11>od 99 PLN</h11>
    <p5>Dodanie nowej funkcjonalności</p5>
    <p5>Zmiany w treści</p5>
    <p5>Zmiany w wyglądzie</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: DODANIE ELEMENTÓW NA STRONĘ.) ">WYBIERAM!</button></a>
</div>
<div id="pakiet5" class="pakiety" data-aos="zoom-out-up">
    <hr id="hr_five">
    <img src="images/5-socialmedia.svg"  alt="social-media" class="image scndimage">
    <h3>SOCIAL MEDIA</h3>
    <h11>od 599 PLN</h11>
    <p5>Facebook oraz Instagram</p5>
    <p5>Codzienne posty</p5>
    <p5>Indywidualne grafiki i reklamy</p5>
    <a href="#contact"><button class="wybieram" name="(Wybrany pakiet: SOCIAL MEDIA.) ">WYBIERAM!</button></a>
</div>
 <div id="portfolio" onclick="remove_menu()">
    <h9>PORTFOLIO</h9>
    <div id="katarzynawala" data-aos="fade-right"><a class="link" href="http://www.katarzynawala.pl/"></a></div>
    <div id="hegemon" data-aos="fade-left"><a class="link" href="http://www.hegemon.com.pl"></a></div>
<div id="angel-container" data-aos="fade-right"></div>
<div id="crissToddlers-container" data-aos="fade-left"></div>
</div>        
<div id="contact"onclick="remove_menu()">
<div id="kontener"onclick="remove_menu()">
    <h2>KONTAKT</h2>
    <form id="formularz" name="formularz" method="post" onsubmit="return validateForm()" action="" data-aos="zoom-in" data-aos-delay="450" >
        <label class="label-text" id="label-name" for="name">Imię:</label>  <input type="text" id="name" class="input-text" placeholder="Imię..." name="name" />
        <label class="label-text" id="label-email" for="email">Adres e-mail:</label> <input type="email" id="email" class="input-text" placeholder="e-mail..." name="email"/>
        <textarea id="message" cols="22" rows="22" placeholder="Twoja wiadomość..." name="message"></textarea>
        <input type="submit" id="submit-button" placeholder="Wyślij" value="Wyślij zapytanie!" name="submit">   
   </form>
</div>
</div> </div>
<footer onclick="remove_menu()">
    <p2>© 2020 ITSolutions. Wszystkie prawa zastrzeżone.</p2>
    <div id="socials">
        <a href="https://www.facebook.com/ITSolutionsPL/" style="margin:0% 5% 0% 0%;"><div id="fb"></div></a>
        <a href="https://www.linkedin.com/home/?originalSubdomain=pl" style="margin:0% 5% 0% 0%;"><div id="ig"></div></a>
        <a href="mailto:itsolutions.kontakt@gmail.com" style="margin:0% 5% 0% 0%;"><div id="mail"></div></a>
    </div>
</footer>
<script src="JS.js" async>

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  
    AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
  
    
  </script>
    </body>
</html>