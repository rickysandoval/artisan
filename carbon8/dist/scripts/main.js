function scrollToElement(a,b,c){b="undefined"!=typeof b?b:1e3,c="undefined"!=typeof c?c:0,element=$(a),offset=element.offset(),offsetTop=offset.top+c,$("html,body").animate({scrollTop:offsetTop-120},b)}function bzPopup(a){if("undefined"==typeof $.magnificPopup)return alert("bzPopupContent: Không tìm thấy thư viện magnificPopup"),!1;var b=$.extend({rel:"",type:"inline",width:700,removeDelay:300,closeOnBg:!0,effect:"bizFromTop",beforeOpen:function(){this.st.mainClass=b.effect},elementParse:function(a){},change:function(){},resize:function(){},open:function(){},beforeClose:function(){},close:function(){},afterClose:function(){},markupParse:function(a,b,c){},updateStatus:function(a){},imageLoadComplete:function(){},parseAjax:function(a){},ajaxContentAdded:function(){}},a),c=$(b.rel);return c.length>0?(c.css({maxWidth:b.width}),void $.magnificPopup.open({removalDelay:b.removeDelay,callbacks:{beforeOpen:b.beforeOpen,elementParse:b.elementParse,change:b.change,resize:b.resize,open:b.open,beforeClose:b.beforeClose,close:b.close,afterClose:b.afterClose,markupParse:b.markupParse,updateStatus:b.updateStatus,imageLoadComplete:b.imageLoadComplete,parseAjax:b.parseAjax,ajaxContentAdded:b.beforeOpen},items:{src:b.rel,type:"inline"},closeOnBgClick:b.closeOnBg})):(alert("bzPopupContent: Không tìm thấy nội dung!"),!1)}!function(){$(window).width()<520&&$("head").append('<meta name="viewport" content="width=480px">'),$(window).scroll(function(){$(window).scrollTop()>0?$(".header").addClass("pin-menu"):$(".header").removeClass("pin-menu")}),$("input, textarea").placeholder()}(),Object.defineProperty(String.prototype,"format",{value:function(){var a=arguments;return this.replace(/\{\{|\}\}|\{(\d+)\}/g,function(b,c){return"{{"===b?"{":"}}"===b?"}":a[c]})}}),$.fn.bzAccordion=function(a,b){var c=this.find(".item-quest");b&&(c.first().find("h3").addClass("active"),c.first().find(".info").show()),c.find("h3").click(function(){$(this).hasClass("active")?($(this).removeClass("active"),$(this).parent().find(".info").slideUp(200)):(a&&$.each(c.find("h3"),function(a,b){$(b).removeClass("active"),$(b).removeClass("active"),$(b).parent().find(".info").slideUp(200)}),$(this).addClass("active"),$(this).parent().find(".info").slideDown(200))})},function(){function a(){$(".mod-banner .slide-banner").slick({arrows:!0,dots:!0,autoplay:!1})}$(document).ready(function(){a()})}(),function(){function a(){var a=0;$(".mod-fall-sale .item").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-fall-sale .item").height(a)}$(window).load(function(){a()})}(),function(){function a(){$(".part-wrap .row .item");$(".part-wrap .row ").each(function(){var a=$(this).height(),b=$(this).find(".item");b.height(a)})}$(window).load(function(){a()}),$(window).resize(function(){a()})}(),function(){function a(){$(".mod-features .slideItem").slick({arrows:!0,dots:!1,slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1}}]})}$(document).ready(function(){a()})}(),function(){function a(){var a=0;$(".mod-contact .item").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-contact .item").height(a)}function b(){$(".mod-contact .menu-location").find("li").click(function(){var a=$(this).index();$(".mod-contact .menu-location").find("li").removeClass("active"),$(this).addClass("active"),$(".mod-contact .tab-content .item-location").removeClass("active"),$(".mod-contact .tab-content .item-location").eq(a).addClass("active")})}$(window).load(function(){a(),b()})}(),function(){function a(){$(".mod-slide-home .item").mouseenter(function(){var a=$(this).find(".info");a.find("h3").text(),a.find("p").text(),$(".mod-slide-home .info-rug").find(".box");$(".mod-slide-home .info-rug").show()}),$(".mod-slide-home ").mouseleave(function(){$(".mod-slide-home .info-rug").hide()}),$(".mod-slide-home .slick-prev,.slick-next").mouseenter(function(){$(".mod-slide-home .info-rug").hide()})}function b(){$(".mod-slide-home .slideHome").slick({arrows:!0,dots:!1,slidesToShow:1,slidesToScroll:1,centerMode:!0,centerPadding:100,centerPaddingLeft:50,centerPaddingRight:300,responsive:[{breakpoint:1500,settings:{centerPaddingLeft:20,centerPaddingRight:150}},{breakpoint:1200,settings:{centerPaddingLeft:-20,centerPaddingRight:60}},{breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1,centerPadding:0,centerPaddingLeft:0,centerPaddingRight:0}}]}),$(".mod-slide-home .slideHome").on("afterChange",function(a,b,c,d){var e=$(this).find(".slick-active"),f=e.find(".info"),g=f.find("h3").text(),h=f.find("p").text(),i=$(".mod-slide-home .info-rug").find(".box");i.find("h3").text(g),i.find("p").text(h)}),$(".mod-slide-home .slideHome").on("init",function(b,c,d){a()})}function c(){$(document).click(function(a){$(a.target).is(".mod-slide-home")||($(".btn-down").removeClass("active"),$(".bottom-resource-detail").removeClass("active"),$(".show-download-resources").slideUp(300))})}$(document).ready(function(){b(),a(),c()})}(),function(){function a(){$(".pull-menu").click(function(){$(this).hasClass("is-open")?($(this).removeClass("is-open"),$(".menu-mobile").removeClass("active"),$(".header").removeClass("bg-scroll"),$("body").removeClass("no-scroll"),$(".header").addClass("pin-menu")):($(this).addClass("is-open"),$(".menu-mobile").addClass("active"),$(".header").addClass("bg-scroll"),$("body").addClass("no-scroll"),$(".header").removeClass("pin-menu"))}),$(".menu-mobile .main-nav >ul >li").click(function(a){if($(this).find("ul").length>0){if(!$(this).hasClass("active"))return $(".menu-mobile .main-nav >ul >li").removeClass("active"),$(".menu-mobile .main-nav >ul >li").find("ul").slideUp(300),$(this).addClass("active"),$(this).find("ul").slideDown(300),!1;$(this).removeClass("active"),$(this).find("ul").slideUp(300)}})}$(document).ready(function(){a()})}(),function(){function a(){var a=0;$(".mod-faq .item").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-faq .item").height(a),$(".mod-faq .box").height(a-130)}function b(){e>767&&$(".mod-faq .question h3").click(function(){$(".mod-faq .question h3").removeClass("active"),$(this).addClass("active");var a=$(this).find("span").text(),b=$(this).parent().find(".info p").text(),c=$(".mod-faq .answer");c.find("h3").text(a),c.find("p").text(b)})}function c(){768>e&&$(".mod-faq .question").bzAccordion(!0,!0)}function d(){$(".mod-faq .box").mCustomScrollbar()}var e=$(window).width();$(window).load(function(){a(),b(),c(),setTimeout(function(){d()},500)})}(),function(){function a(){$(".mod-team .row").slick({arrows:!0,dots:!0})}var b=$(window).width();$(document).ready(function(){768>b&&a()})}(),function(){$(".mod-story").slick()}(),function(){function a(){var a=0;$(".mod-feature-home .item").each(function(){console.log($(this).height());var b=$(this).height();b>a&&(a=b)}),$(".mod-feature-home .item").height(a)}function b(){var a=0;$(".mod-feature-home .item-min").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-feature-home .item-min").height(a)}$(window).load(function(){$(window).width()>767&&(b(),a()),$(".service-feature .button").click(function(){$(this).hasClass("active")?($(this).removeClass("active"),$(".info-service-rug").slideUp(300)):($(this).addClass("active"),$(".info-service-rug").slideDown(300,function(){$(".info-service-rug .row .item");$(".info-service-rug .row ").each(function(){var a=$(this).height(),b=$(this).find(".item");b.height(a)}),scrollToElement(".info-service-rug",700)}))}),$(document).click(function(a){$(a.target).is(".service-feature .button,.info-service-rug *,.info-service-rug")||($(".service-feature .button").removeClass("active"),$(".info-service-rug").slideUp(300))})})}(),function(){function a(){var a=0;$(".mod-collection-special .item").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-collection-special .item").height(a)}$(window).load(function(){a()}),$(window).resize(function(){a()})}(),function(){function a(){var a=0;$(".mod-designers .item").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-designers .item").height(a)}$(window).load(function(){a()}),$(window).resize(function(){a()})}(),function(){function a(){var a=0;$(".mod-clean .item").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-clean .item").height(a)}$(window).load(function(){a()})}(),function(){function a(){var a=0;$(".mod-location .item").each(function(){var b=$(this).height();b>a&&(a=b)}),$(".mod-location .item").height(a)}function b(){$(".mod-location .item").click(function(){$(".mod-location .item").removeClass("active"),$(this).addClass("active")})}$(window).load(function(){a(),b()})}();