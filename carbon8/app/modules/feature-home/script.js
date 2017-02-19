(function(){
	function converHeightFeature(){
		var heightItemFeature = 0;
		$(".mod-feature-home .item").each(function(){
			console.log($(this).height());
			var height = $(this).height();
			if(heightItemFeature < height){ 
				heightItemFeature = height;
			}
		});
		$(".mod-feature-home .item").height(heightItemFeature);
	};
	function converHeightMin(){
		var heightItemMin = 0;
		$(".mod-feature-home .item-min").each(function(){
			var height = $(this).height();
			if(heightItemMin < height){ 
				heightItemMin = height;
			}
		});
		$(".mod-feature-home .item-min").height(heightItemMin);
	};
	$(window).load(function(){
		if($(window).width() > 767) {
			converHeightMin();
			converHeightFeature();
		}
		$(".service-feature .button").click(function(){
			if($(this).hasClass('active')) {
				$(this).removeClass('active');
				$(".info-service-rug").slideUp(300);
			}
			else{
				$(this).addClass('active');
				$(".info-service-rug").slideDown(300,function() {
					var items=$('.info-service-rug .row .item');
					var heightItemDo = 0;
					$(".info-service-rug .row ").each(function(){
						var height = $(this).height();
						var itemHeight = $(this).find(".item");
						itemHeight.height(height);
					});
					scrollToElement(".info-service-rug",700);
				});
			}
		});
		$(document).click(function(e){
			if(!$(e.target).is(".service-feature .button,.info-service-rug *,.info-service-rug")){
				$(".service-feature .button").removeClass('active');
				$(".info-service-rug").slideUp(300);
			}
		});
	});
})();
