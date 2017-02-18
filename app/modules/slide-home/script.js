(function(){
	function hoverItem(){
		$(".mod-slide-home .item").mouseenter(function (){
			var itemSlide = $(this).find(".info");
			var name = itemSlide.find("h3").text();
			var info = itemSlide.find("p").text();
			var toolRug = $(".mod-slide-home .info-rug").find(".box");
			// toolRug.find("h3").text(name);
			// toolRug.find("p").text(info);
			$(".mod-slide-home .info-rug").show();
		});
		$(".mod-slide-home ").mouseleave(function(){
			$(".mod-slide-home .info-rug").hide();
		});
		$(".mod-slide-home .slick-prev,.slick-next").mouseenter(function(){
			$(".mod-slide-home .info-rug").hide();
		});

	}
	function slideHome(){
		$(".mod-slide-home .slideHome").slick({
			arrows:true,
			dots:false,
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: true,
			centerPadding: 100,
			centerPaddingLeft: 50,
			centerPaddingRight: 300,
			responsive: [
			{
				breakpoint: 1500,
				settings: {
					centerPaddingLeft: 20,
					centerPaddingRight: 150,
				}
			},
			{
				breakpoint: 1200,
				settings: {
					centerPaddingLeft: -20,
					centerPaddingRight: 60,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: 0,
					centerPaddingLeft: 0,
					centerPaddingRight: 0
				}
			}
			],

		});
		$('.mod-slide-home .slideHome').on('afterChange', function(event, slick, currentSlide, nextSlide){
			var thisItem = $(this).find(".slick-active");
			var itemSlide = thisItem.find(".info");
			var name = itemSlide.find("h3").text();
			var info = itemSlide.find("p").text();
			var toolRug = $(".mod-slide-home .info-rug").find(".box");
			toolRug.find("h3").text(name);
			toolRug.find("p").text(info);
		});
		$('.mod-slide-home .slideHome').on('init', function(event, slick, direction){
			hoverItem();
		});

	}
	function closeAll() {
		$(document).click(function(e){
				if(!$(e.target).is(".mod-slide-home")){
					$(".btn-down").removeClass("active");
					$(".bottom-resource-detail").removeClass("active")
					$(".show-download-resources").slideUp(300);
				}

		});
	}
	$(document).ready(function(){
		slideHome();
		hoverItem();
		closeAll();
	});
})();