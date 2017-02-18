(function(){
	function converHeightSpecial(){
		var heightItemSpecial = 0;
		$(".mod-collection-special .item").each(function(){
			var height = $(this).height();
			if(heightItemSpecial < height){ 
				heightItemSpecial = height;
			}
		});
		$(".mod-collection-special .item").height(heightItemSpecial);
	};
	$(window).load(function(){
		converHeightSpecial();
	});
	$(window).resize(function(){
		converHeightSpecial();
	});
})();