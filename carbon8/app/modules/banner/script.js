(function(){
	function slideBanner(){
		$(".mod-banner .slide-banner").slick({
			arrows:true,
			dots:true,
			autoplay:false
		})
	}
	$(document).ready(function(){
		slideBanner();
	});
})();