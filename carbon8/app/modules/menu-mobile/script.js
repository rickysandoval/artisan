(function(){
	function clickMenu(){
		$(".pull-menu").click(function(){
			if($(this).hasClass("is-open")){
				$(this).removeClass("is-open");
				$(".menu-mobile").removeClass("active");
				$(".header").removeClass("bg-scroll");
				$("body").removeClass("no-scroll");
				$(".header").addClass("pin-menu");
			}
			else{
				$(this).addClass("is-open");
				$(".menu-mobile").addClass("active");
				$(".header").addClass("bg-scroll");
				$("body").addClass("no-scroll");
				$(".header").removeClass("pin-menu");
			}
		});
		// $(".close").click(function(){
		// 	$(".pull-menu").removeClass("is-open");
		// 	$(".menu-mobile").removeClass("active");
		// 	$(".header").removeClass("bg-scroll");
		// 	$("body").removeClass("no-scroll");
		// 	$(".header").addClass("pin-menu");
		// })
		$(".menu-mobile .main-nav >ul >li").click(function(e){
			if($(this).find("ul").length > 0) {
				if( $(this).hasClass("active")){
					$(this).removeClass("active");
					$(this).find("ul").slideUp(300);

				}
				else{
					$(".menu-mobile .main-nav >ul >li").removeClass("active");
					$(".menu-mobile .main-nav >ul >li").find("ul").slideUp(300);
					$(this).addClass("active");
					$(this).find("ul").slideDown(300);
					return false;

				}
			}
		});
	}
	$(document).ready(function(){
		clickMenu();
	});
})();