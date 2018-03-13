jQuery(document).ready(function($) {
	  
	  $('a').click(function(){

		  $('.popup-menu').hide();
		
  		})
  		
  		
  
		
  		$(document).scroll(function() {
			var y = $(this).scrollTop();
			if (y > 800) {
			    $('#buttonOpenMenu').fadeIn();
			  } else {
		    $('#buttonOpenMenu').fadeOut();
		  }
		})
		
		  $('.btnMobileMenu').click(function(){

		  $('.popup-menu').show();
		
  		})
  		
  
		
	    
});