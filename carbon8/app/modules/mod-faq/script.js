(function(){
	var windowFaq = $(window).width();
	function converHeightfaq(){
		var heightItemFaq = 0;
		$(".mod-faq .item").each(function(){
			var height = $(this).height();
			if(heightItemFaq < height){ 
				heightItemFaq = height;
			}
		});
		$(".mod-faq .item").height(heightItemFaq);
		$(".mod-faq .box").height(heightItemFaq-130);
	};
	function clickQuest(){
		if(windowFaq > 767) {
			$(".mod-faq .question h3").click(function(){
				$(".mod-faq .question h3").removeClass("active");
				$(this).addClass("active");
				var title= $(this).find("span").text();
				var desc = $(this).parent().find(".info p").text();
				var answer = $(".mod-faq .answer");
				answer.find("h3").text(title);
				answer.find("p").text(desc);
			});
		}
	}
	function collap(){
		if(windowFaq < 768)  {
			$(".mod-faq .question").bzAccordion(true,true);
		}
	}
	function scroll() {
		$(".mod-faq .box").mCustomScrollbar();
	}
	$(window).load(function(){
		converHeightfaq();
		clickQuest();
		collap();
		setTimeout(function(){
			scroll();
		},500)
	});
})();