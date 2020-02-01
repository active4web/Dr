	$('body').on('click','.CarouselItems .box4 .icon a',function(){
				var image_src = $(this).closest('.box4').find('img').attr('src');
				// alert('sd');
				$('.Carousel-wrapper').addClass('active');
				$('.Carousel-wrapper').find('.item').removeClass('active');
				$('.Carousel-wrapper').find('.carousel-indicators li').removeClass('active');
				$.each($('.Carousel-wrapper').find('img'),function(index,image){
					if($(image).attr('src') == image_src){
						$('.Carousel-wrapper').find('img').eq(index).closest('.item').addClass('active');
						$('.Carousel-wrapper').find('.carousel-indicators li').eq(index).addClass('active');
					}
				})
			});
			$('body').on('click','.Carousel-wrapper span.Close',function(){
				$('.Carousel-wrapper').removeClass('active');
			})
			$('#PopupCarousel').carousel({
				interval: false,
			});
