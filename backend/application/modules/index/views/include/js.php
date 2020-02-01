<script src="<?= DIR ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= DIR ?>assets/js/main.js"></script>
<script src="<?= DIR ?>assets/home_slider/demo/bootstrap-notify.min.js"></script><!-- plugin that turns standard Bootstrap alerts into "Growl-like" notifications (optional) -->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script><!-- syntax highlighting of source code (optional) -->
<script src="<?= DIR ?>assets/home_slider/jquery.loopslider.js"></script>



      <script src="<?= DIR ?>assets/OwlCarousel/docs/assets/vendors/highlight.js"></script>
	  <script src="<?= DIR ?>assets/OwlCarousel/docs/assets/js/app.js"></script>
<script>
		$(function(){
			$('.header-slider').loopslider({
				visibleItems: 1
				,step: 1
				,autoplay: false
				,autoplayInterval:5000
				,slideDuration: 800
				,pagination: false
				,navigation: true
			});

		});
		</script>

<script>
	$(document).ready(function() {
		$("#owl-demo").each(function() {
	  var owl = $('.owl-carousel');
	  $("#owl-demo").owlCarousel({
		margin: 10,
		autoplay:true,
		responsiveClass:true,

		responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:true
        }
    },
		autoplayTimeout:3000,
		autoplayHoverPause: true
	  });
	});
	})
  </script>

  <script>
 	$(document).ready(function() {

		$("#owl-demo-1").each(function() {
	  $("#owl-demo-1").owlCarousel({
		margin: 10,
		autoplay:true,
		responsiveClass:true,

		responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    },
		autoplayTimeout:4000,
		autoplayHoverPause: true
	  });
	});


	$("#owl-demo-2").each(function() {
	  $("#owl-demo-2").owlCarousel({
		margin: 10,
		autoplay:true,
		responsiveClass:true,

		responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    },
		autoplayTimeout:5000,
		autoplayHoverPause: true
	  });
	});


	})
  </script>
		<script>
	$(document).ready(function(){
  $(".abou").click(function(){
	$(".img-tab-about").prop("src","<?= base_url()?>uploads/site_setting/about_active.jpg");
	$(".img-tab-vision").prop("src","<?= base_url()?>uploads/site_setting/vision_no_active.png");
	$(".img-tab-message").prop("src","<?= base_url()?>uploads/site_setting/mission_no_active.png");
	$(".img-tab-goals").prop("src","<?= base_url()?>uploads/site_setting/goals_no_active.png");
  });
  $(".vis").click(function(){
	$(".img-tab-about").prop("src","<?= base_url()?>uploads/site_setting/about_no_active.png");
	$(".img-tab-vision").prop("src","<?= base_url()?>uploads/site_setting/vision_active.png");
	$(".img-tab-message").prop("src","<?= base_url()?>uploads/site_setting/mission_no_active.png");
	$(".img-tab-goals").prop("src","<?= base_url()?>uploads/site_setting/goals_no_active.png");
  });
  $(".mess").click(function(){
	$(".img-tab-about").prop("src","<?= base_url()?>uploads/site_setting/about_no_active.png");
	$(".img-tab-vision").prop("src","<?= base_url()?>uploads/site_setting/vision_no_active.png");
	$(".img-tab-message").prop("src","<?= base_url()?>uploads/site_setting/mission_active.png");
	$(".img-tab-goals").prop("src","<?= base_url()?>uploads/site_setting/goals_no_active.png");
  });

  $(".goal").click(function(){
	$(".img-tab-about").prop("src","<?= base_url()?>uploads/site_setting/about_no_active.png");
	$(".img-tab-vision").prop("src","<?= base_url()?>uploads/site_setting/vision_no_active.png");
	$(".img-tab-message").prop("src","<?= base_url()?>uploads/site_setting/mission_no_active.png");
	$(".img-tab-goals").prop("src","<?= base_url()?>uploads/site_setting/goals_active.png");
  });



});
		</script>
</body>

</html>
