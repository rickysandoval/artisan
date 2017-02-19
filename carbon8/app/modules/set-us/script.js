(function(){
	function converHeightUs(){
		var items=$('.part-wrap .row .item');
		var heightItemDo = 0;
		$(".part-wrap .row ").each(function(){
			var height = $(this).height();
			var itemHeight = $(this).find(".item");
			itemHeight.height(height);
		});
	};
	$(window).load(function(){
		converHeightUs();
	});

	$(window).resize(function(){
		converHeightUs();
	});
})();