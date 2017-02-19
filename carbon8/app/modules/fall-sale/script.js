(function(){
	function converHeightDo(){
		var heightItemDo = 0;
		$(".mod-fall-sale .item").each(function(){
			var height = $(this).height();
			if(heightItemDo < height){ 
				heightItemDo = height;
			}
		});
		$(".mod-fall-sale .item").height(heightItemDo);
	};
	$(window).load(function(){
		converHeightDo();
	});
})();