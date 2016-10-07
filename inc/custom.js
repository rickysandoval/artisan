$(document).ready(function()  {

	// Responsive based display
	if($(window).width() < 767) {
		$('.breadcrumbs').parent().removeClass('span9').addClass('span12');
		$('#shoppingcart').hide();
		if(!$('body').hasClass('product-page')){
			$('#customcart').parent().hide();
		}

		//$('span.search_advanced a').text("Advanced Search").css({ color: '#131313', 'text-transform': 'none' });
		$('#searchentry').append("<a class='carticon' href='/cart/index'><img src='/themes/brooklyn-copy/css/images/shoppingcartlight.png' ></a>");
	}

});