(function(){
	function converHeightClean(){
		var heightItemClean = 0;
		$(".mod-clean .item").each(function(){
			var height = $(this).height();
			if(heightItemClean < height){ 
				heightItemClean = height;
			}
		});
		$(".mod-clean .item").height(heightItemClean);
	};
	$(window).load(function(){
		converHeightClean();
	});
})();