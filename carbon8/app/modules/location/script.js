(function(){
	function converHeightLoca(){
		var heightItemDo = 0;
		$(".mod-location .item").each(function(){
			var height = $(this).height();
			if(heightItemDo < height){ 
				heightItemDo = height;
			}
		});
		$(".mod-location .item").height(heightItemDo);
	};
	function clickItem (){
		$(".mod-location .item").click(function(){
			$(".mod-location .item").removeClass("active");
			$(this).addClass("active");
		});
	}
	$(window).load(function(){
		converHeightLoca();
		clickItem();
	});
})();