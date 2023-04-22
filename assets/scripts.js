'use strict';

//This function is for nav bar to scroll

$(document).ready(function(){
  
        $(document).scroll(function() {
          var $nav = $("#mainNav");
          $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height() );
        })
 });

 //This function is for hover video banner
const clip = document.querySelectorAll(".hover-to-stop");
for (let i = 0; i < clip.length; i++) { clip[i].addEventListener("mouseenter", function (e) { clip[i].pause();
  }); clip[i].addEventListener("mouseout", function (e) { clip[i].play(); }); }


 


  
