(function(){
	function converHeightContact(){
		var heightItemContact = 0;
		$(".mod-contact .item").each(function(){
			var height = $(this).height();
			if(heightItemContact < height){ 
				heightItemContact = height;
			}
		});
		$(".mod-contact .item").height(heightItemContact);
	};
	function clickItem (){
		$(".mod-contact .menu-location").find("li").click(function(){
			var index = $(this).index();
			$(".mod-contact .menu-location").find("li").removeClass("active");
			$(this).addClass("active");
			$(".mod-contact .tab-content .item-location").removeClass("active");
			$(".mod-contact .tab-content .item-location").eq(index).addClass("active");
		});
	}
	$(window).load(function(){
		converHeightContact();
		clickItem();
	});
})();
