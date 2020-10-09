var preloaderel = document.querySelector('#preloader');

window.onload = function()
{
  document.getElementById("preloader").className="preloader-js";
  setTimeout(function(){
    
    preloaderel.classList.add('preloader-hidden');

},3000);
}


window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
    document.getElementById("header").className = "afterScroll";
    document.getElementById("logo").className = "logoafter";
    

    if(window.innerWidth > 1099)
    {
      document.getElementById("list").className = "listafter";
    }
  
   var lista = document.getElementById("list");

   if(lista.classList.contains("cancel") || lista.classList.contains("cancel_white"))
   {
     lista.className = "cancel";
   }
   else{
     lista.className = "listafter";
   }

    document.getElementById("button").className = "next";
    
  } else {
    document.getElementById("header").className = "";
    document.getElementById("logo").className = "";
 

    var lista = document.getElementById("list");

   if(lista.classList.contains("cancel_white") || lista.classList.contains("cancel"))
   {
     lista.className = "cancel_white";
   }
   else{
     lista.className = "";
   }

    document.getElementById("button").className = "";
  }
};

function remove_menu()
{
 
  var lista = document.getElementById("unord_list");
  lista.classList.remove("afterclick");
  var przycisk = document.getElementById("list");
  if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {

 przycisk.className = "listafter";
 }
 else
 {
 
   przycisk.className = " ";
 }
  
};


function menu() {
  var lista = document.getElementById("unord_list");
 lista.classList.toggle("afterclick");
 var przycisk = document.getElementById("list");

 if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
   
  
przycisk.classList.toggle("cancel");


}
else
{
  przycisk.classList.toggle("cancel_white");
} 
}


let wybierzBtns = document.getElementsByClassName("wybieram");


function wybieram(wybierzBtn) 
{

  wybierzBtn.addEventListener("click", () => 
  {
    let kontent = wybierzBtn.getAttribute("name");
    let textArea = document.querySelector("textarea");

    textArea.innerHTML = kontent;

  })
}

  for( let i=0; i < wybierzBtns.length ; i++){
    wybieram(wybierzBtns[i]);
}

$(document).ready(function(){
  
  $("a").on('click', function(event) {

    
    if (this.hash !== "") {
      
      event.preventDefault();

     
      var hash = this.hash;

    
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        
        window.location.hash = hash;
      });
    } 
  });
});


