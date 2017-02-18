(function(){
	function converHeightDesigner(){
		var heightItemDesigner = 0;
		$(".mod-designers .item").each(function(){
			var height = $(this).height();
			if(heightItemDesigner < height){ 
				heightItemDesigner = height;
			}
		});
		$(".mod-designers .item").height(heightItemDesigner);
	};
	$(window).load(function(){
		converHeightDesigner();
	});
	$(window).resize(function(){
		converHeightDesigner();
	});
})();