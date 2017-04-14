$(document).ready(function(){  
  // navbar
  $('.desktop .item, .desktop .subitem').hover(function(){
    $(this).addClass('hover');
    $(this).find('.subnav:first').show();
  }, function(){
    $(this).removeClass('hover');
    $(this).find('.subnav').hide();
  });


  $('#gui-form-cart .gui-number input').attr('disabled', true);
  $('.cart_variant').toArray().forEach(function(el){ el.innerText = el.innerText.replace(/<br>/g, ''); });

  // gg fix 05/01/2017
  $('nav .item.sub').click(function() {
    if ($(window).width() < 767) {
      var element = $(this).find('.itemLink');
        var href = element.attr('href');      
        element.attr('href', '#');
        $('nav .itemLink').hide();
        element.show();
        $(this).addClass('view-subnav');
        
        $('nav .glyphicon-remove').show( 'fade', function(){
          element.attr('href', href);
        });
    }
  });  
  
  
  // responsive navigation
  $('.burger').click(function() {
    if ($(this).hasClass('open')) {
      $(this).add('header').add('.wrapper').removeClass('open').addClass('close');
    } else {
      $(this).add('header').add('.wrapper').removeClass('close').addClass('open');
    }
  });
  $('.wrapper').click(function() {
    if ($('.burger').hasClass('open')) {
      $('.burger').add('header').add('.wrapper').removeClass('open').addClass('close');
    }
  });     
  
  // zoombox
  $('.thumbs a').mousedown(function(){
    $('.images a').hide();
    $('.images a[data-image-id="' + $(this).attr('data-image-id') + '"]').css('display','block');
    $('.thumbs a').removeClass('active');
    $('.thumbs a[data-image-id="' + $(this).attr('data-image-id') + '"]').addClass('active');
  });
  
  // tabs
  $('.tabs a').click(function(){
    var tabs = $(this).closest('.tabs');
    var pages = $('.tabsPages');
    tabs.find('a').closest('li').removeClass('active');
    pages.find('.page').removeClass('active');
    $(this).closest('li').addClass('active');
    pages.find('.page.'+$(this).attr('rel')).addClass('active');
    return false;
  });
  
  // categories 
  $('.categories .category').hover(function(){
    $('.categories .category').addClass('hover');
    $(this).removeClass('hover');
  }, function(){
    $('.categories .category').removeClass('hover');
  });
  
  if(navigator.appVersion.indexOf("MSIE 7.")!=-1) {
    $('body').append('<div class="wsa-demobar">Your browser is out of date. We recommend <a class="link" href="www.google.com/chrome/â€Ž">Google Chrome</a> to download.</div>');
    $('body').css('marginTop', '42px');
  }

  var isSignedIn = $('.header__sign-in').text().trim() == 'Account';
  var hasHiddenAd = localStorage.getItem('hideRegisterBanner');
  if (!isSignedIn && !hasHiddenAd) {
     $('#marketingBanner').addClass('is-visible');
  }

  $('#marketingBanner').on('click', openMarketingModal);
  $('.marketing-modal__close').on('click', closeMarketingModal);
  $('.marketing-modal__overlay').on('click', closeMarketingModal);

  function openMarketingModal() {
    $('body').addClass('show-marketing-modal');
  }

  function closeMarketingModal() {
    $('body').removeClass('show-marketing-modal');
  }

  function sendGaEvent() {
    
  }

});

$(window).load(function(){
  sizing();
});
$(window).resize(function(){
  sizing();
});

function sizing() {
  if ($(window).width() > 1024) {
    // Description text (product hover)
    $('.product .image-wrap').mouseenter(function() {
      var descriptionHeight = $(this).find('img').outerHeight();
      var starsHeight = $(this).find('.description .stars').outerHeight();
      var cartHeight = $(this).find('.description .cart').outerHeight();
      var textHeight = descriptionHeight - starsHeight - cartHeight;
      $(this).find('.description .text').css('height', textHeight-60 + 'px');  
    });
  }
  if ($(window).width() > 992) {
    // tabs height
    var OptionHeight = $('.product-option').outerHeight();
    var PriceHeight = $('.product-price').outerHeight();
    var tabsTitle = $('.product-tabs .tabs a').outerHeight();
    var imgHeight = $('.product-img').outerHeight();
    
    var tabsHeight =  imgHeight - PriceHeight - OptionHeight - tabsTitle;  
    $('.product-tabs .page').css('maxHeight', tabsHeight + 'px');
  }
  if ($(window).width() < 767) {
    // reponsive 
    $('header.desktop').removeClass('desktop');
    $('header').addClass('mobile');

      
    $('nav .glyphicon-remove').click(function() {
      $('nav .item.sub').removeClass('view-subnav');
      $(this).hide();
      $('nav .itemLink').show();
    });
  }
  else {
    $('header.mobile').removeClass('mobile');
    $('header').addClass('desktop');
    $('header.mobile nav .item.sub').click(function() {
      var element = $(this).find('.itemLink');
      var href = element.attr("href");   
      element.attr("href", href);
    });
  }
}