(function(){
	var widthWin = $(window).width();
	function slideMobile (){
		$(".mod-team .row").slick({
			arrows:true,
			dots:true
		})
	}
	$(document).ready(function(){
		if(widthWin < 768) {
			slideMobile();

		}
	});
})();