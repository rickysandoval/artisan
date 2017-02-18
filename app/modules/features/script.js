(function(){
	function slideItem(){
		$(".mod-features .slideItem").slick({
			arrows:true,
			dots:false,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
    	{
	      breakpoint: 768,
	      settings: {
	      slidesToShow: 1,
	      slidesToScroll: 1
	     	}
    	}
 	 ]
		})
	}
	$(document).ready(function(){
		slideItem();
	});
})();