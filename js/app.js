$(document).ready(function(){
 //main slider
 $('#main-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
    navText:['Prev','Next'],
    items: 1,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    smartSpeed: 1000,
    responsive:{
        0:{
           
        },
        600:{
          
        },
        1000:{
           
        }
      }
  })
    
});



 //team slider
 $('#team-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    smartSpeed: 2000,
    margin:24,
    responsive:{
        0:{
          items:1,
          nav:false,
        },
        768:{
            items:2,
        },
        1000:{
           items:2,
           center:true,
        }
      }
  });