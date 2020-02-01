
jQuery( document).ready(function() {
    jQuery(".box19").mouseover(function(){
        jQuery(this).nextAll(".caption").css("opacity","0");
    });
    });
    jQuery( document).ready(function() {
        jQuery(".box19").mouseout(function(){
            jQuery(this).nextAll(".caption").css("opacity","0.8");
        });
        });

jQuery(".scrollTop").hide();

	// fade in #back-top
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 300) {
				jQuery('.scrollTop').fadeIn();
			} else {
				jQuery('.scrollTop').fadeOut();
			}
		});

		// scroll body to 0px on click
		jQuery('.scrollTop a').on( "click", function () {
			jQuery('body,html,header').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

    $( document).ready(function() {
        $(".carousel").carousel({
            interval:5000,
        
        });
    window.onscroll = function() {myFunction()};
    
    
    
    var header = document.getElementById("nav-b");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
                 
    });
     $('.toggle-dis').click();
     
   

     