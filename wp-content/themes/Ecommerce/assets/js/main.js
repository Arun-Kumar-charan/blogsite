/* ~~~~~~~~~~ sticky header ~~~~~~~~~~ */
jQuery("document").ready(function() {
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('header').addClass("sticky-header")
        } else {
            jQuery('header').removeClass("sticky-header")
        }
    })
});
/* ~~~~~~~~~~ sticky header ~~~~~~~~~~ */

/* ~~~~~~~~~~ header search and menu toggle ~~~~~~~~~~ */
jQuery(document).ready(function() {
    jQuery('.icon').click(function() {
        jQuery('.search-holder').toggleClass('expanded');
    });
    jQuery('.hamburger-nav').click(function() {
        jQuery('.header-section').toggleClass('mobile-menu-open');
    });
});

    

    
jQuery(document).ready(function(){ 

    
 jQuery(".banner-slider").owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText:['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    dots:false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    touchDrag: true,
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 6000,
    items:1,
    responsive:{
            0:{
            items:1,
            nav:true,
            dots:false,
           },
            768:{
            items:1,
            nav:true,
            dots:false,
           },
            992:{
            items:1,
           nav:true,
            dots:false,
          },
          1200:{
            items:1,
            nav:true,
            dots:false,
          }
        }
  });
    
 
    jQuery('#product-item-slider').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 6000,
    margin:40,
    nav:true,
    navText:['<img src="images/left-arrow.png" alt=""/>','<img src="images/right-arrow.png" alt=""/>'],
    dots:false,
    items:3,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    touchDrag: true,
    mouseDrag: true,
    smartSpeed:3000,
    responsive:{
            0:{
            items:1,
            nav:true,
            dots:false,
           },
           767:{
            items:1,
            nav:true,
            dots:false,
           },
            991:{
            items:2,
            nav:true,
            dots:false,
           },
            1199:{
            items:2,
            nav:true,
            dots:false,
          },
          1360:{
            items:3,
            nav:true,
            dots:false,
          }
        }
   }); 
    
    
  
    
    
        // Helper function for add element box list in WOW
        WOW.prototype.addBox = function(element) {
        this.boxes.push(element);
        };
           wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
        
         // Attach scrollSpy to .wow elements for detect view exit events,
          // then reset elements and add again for animation
          jQuery('.wow').on('scrollSpy:exit', function() {
            jQuery(this).css({
              'visibility': 'hidden',
              'animation-name': 'none'
            }).removeClass('animated');
            wow.addBox(this);
          });     
    
    
    
});        




jQuery(document).ready(function(){

  $('#search-menu').removeClass('toggled');

	$('#search-icon').click(function(e) {
		e.stopPropagation();
		$('#search-menu').toggleClass('toggled');
		$("#popup-search").focus();
	});
	
	$('#search-menu input').click(function(e) {
		e.stopPropagation();
	});

	$('#search-menu, body').click(function() {
		$('#search-menu').removeClass('toggled');
	});

});  


document.addEventListener("DOMContentLoaded", function(){
  var roller_0 = document.getElementById("text-roller");
  var roller_1 = document.getElementById("text-roller1");
  var roller_2 = document.getElementById("text-roller2");
  var roller_3 = document.getElementById("text-roller3");
  if (roller_0 != null) {
      var text_roller_0 = new TextRoller(roller_0);
      text_roller_0.start();
  }
  if (roller_1 != null) {
      var text_roller_1 = new TextRoller(roller_1);
      text_roller_1.start();
  }
  if (roller_2 != null) {
      var text_roller_2 = new TextRoller(roller_2);
      text_roller_2.start();
  }
  if (roller_3 != null) {
      var text_roller_3 = new TextRoller(roller_3);
      text_roller_3.start();
  }
});
  
function myfun(){

  var coustomprice = document.getElementById('coustomprice');
// alert (coustomprice);
  
  var giftCard = document.getElementById('giftCard');
  
    if(coustomprice.value!== '') {
      giftCard.disabled = true
      }
      if(coustomprice.value== ''){
        giftCard.disabled = false;
      }
      if(giftCard.value!==''){
        coustomprice.disabled = true
      }
      if(giftCard.value==''){
        coustomprice.disabled = false;
      }
      // else{
      //   coustomprice.disabled = false;
      // }
      
      // if(coustomprice.value==''){

      // }

    //   if(coustomprice.value== '') {
    //     giftCard.disabled = true
    //     } else 
    //     {
    //       coustomprice.disabled = false;
    //     }
      // if(giftCard.value !== '') {
      // coustomprice.disabled = true;
      // } else {
       
      //   coustomprice = false;
      // }
     

}
// function click() {
// var price = 0;
// var label1 = document.getElementById("modify_color");
// var label2 = document.getElementById("modify_pocket");
// var label3 = document.getElementById("modify_print");
// var label4 = document.getElementById("modify_backside");
// // function click() {
    
    
//     if(label1.checked == true ){
//         var cl1 =  parseInt(label1.value);
//         price= price +cl1;
//     num.value = price ;
//     } 
//     else{
        
//       price = price - parseInt(label1.value);
//         num.value = price;
        
//     }
// }

// $(document).ready(function(){
//   $checks = $(":checkbox");
//   $checks.on('change', function() {
//       var string = $checks.filter(":checked").map(function(i,v){
//           return this.value;
//       }).get().join(" ");
//       $('#result').val(string);
//   });
// });
//==================================================================================================================
