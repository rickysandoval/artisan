function sizing(){if($(window).width()>1024&&$(".product .image-wrap").mouseenter(function(){var e=$(this).find("img").outerHeight(),a=$(this).find(".description .stars").outerHeight(),i=$(this).find(".description .cart").outerHeight(),t=e-a-i;$(this).find(".description .text").css("height",t-60+"px")}),$(window).width()>992){var e=$(".product-option").outerHeight(),a=$(".product-price").outerHeight(),i=$(".product-tabs .tabs a").outerHeight(),t=$(".product-img").outerHeight(),s=t-a-e-i;$(".product-tabs .page").css("maxHeight",s+"px")}$(window).width()<767?($("header.desktop").removeClass("desktop"),$("header").addClass("mobile"),$("nav .glyphicon-remove").click(function(){$("nav .item.sub").removeClass("view-subnav"),$(this).hide(),$("nav .itemLink").show()})):($("header.mobile").removeClass("mobile"),$("header").addClass("desktop"),$("header.mobile nav .item.sub").click(function(){var e=$(this).find(".itemLink"),a=e.attr("href");e.attr("href",a)}))}$(document).ready(function(){function e(){$("body").addClass("show-marketing-modal"),console.log("Click Banner"),"function"==typeof ga&&ga("send","event","Promos","openBanner","New Location")}function a(){$("body").removeClass("show-marketing-modal")}function i(){}$(".desktop .item, .desktop .subitem").hover(function(){$(this).addClass("hover"),$(this).find(".subnav:first").show()},function(){$(this).removeClass("hover"),$(this).find(".subnav").hide()}),$("#gui-form-cart .gui-number input").attr("disabled",!0),$(".cart_variant").toArray().forEach(function(e){e.innerText=e.innerText.replace(/<br>/g,"")}),$("nav .item.sub").click(function(){if($(window).width()<767){var e=$(this).find(".itemLink"),a=e.attr("href");e.attr("href","#"),$("nav .itemLink").hide(),e.show(),$(this).addClass("view-subnav"),$("nav .glyphicon-remove").show("fade",function(){e.attr("href",a)})}}),$(".burger").click(function(){$(this).hasClass("open")?$(this).add("header").add(".wrapper").removeClass("open").addClass("close"):$(this).add("header").add(".wrapper").removeClass("close").addClass("open")}),$(".wrapper").click(function(){$(".burger").hasClass("open")&&$(".burger").add("header").add(".wrapper").removeClass("open").addClass("close")}),$(".thumbs a").mousedown(function(){$(".images a").hide(),$('.images a[data-image-id="'+$(this).attr("data-image-id")+'"]').css("display","block"),$(".thumbs a").removeClass("active"),$('.thumbs a[data-image-id="'+$(this).attr("data-image-id")+'"]').addClass("active")}),$(".tabs a").click(function(){var e=$(this).closest(".tabs"),a=$(".tabsPages");return e.find("a").closest("li").removeClass("active"),a.find(".page").removeClass("active"),$(this).closest("li").addClass("active"),a.find(".page."+$(this).attr("rel")).addClass("active"),!1}),$(".categories .category").hover(function(){$(".categories .category").addClass("hover"),$(this).removeClass("hover")},function(){$(".categories .category").removeClass("hover")}),-1!=navigator.appVersion.indexOf("MSIE 7.")&&($("body").append('<div class="wsa-demobar">Your browser is out of date. We recommend <a class="link" href="www.google.com/chrome/â€Ž">Google Chrome</a> to download.</div>'),$("body").css("marginTop","42px"));var t="Account"==$(".header__sign-in").text().trim(),s=localStorage.getItem("hideRegisterBanner");t||s||$("#marketingBanner").addClass("is-visible"),$("#marketingBanner").on("click",e),$(".marketing-modal__close").on("click",a),$(".marketing-modal__overlay").on("click",a),$("#registerPromo").on("click",a)}),$(window).load(function(){sizing()}),$(window).resize(function(){sizing()});