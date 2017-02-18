(function(){
	if($(window).width() < 520 ) {
		$('head').append('<meta name="viewport" content="width=480px">');
	}

	$(window).scroll(function(){
		if($(window).scrollTop()>0){
			$(".header").addClass("pin-menu");
		}else{
			$(".header").removeClass("pin-menu");
		}
	});
	$('input, textarea').placeholder();
	
})();