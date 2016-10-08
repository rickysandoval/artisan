<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="canonical" href="<?= $this->CanonicalUrl; ?>"/>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700|Montserrat:400,700" rel="stylesheet">

	<meta name="description" content="<?= $this->pageDescription; ?>">
	<meta property="og:title" content="<?= $this->pageTitle; ?>"/>
	<meta property="og:description" content="<?= $this->pageDescription; ?>"/>
	<meta property="og:image" content="<?= $this->pageImageUrl; ?>"/>
	<meta property="og:url" content="<?= $this->CanonicalUrl; ?>"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />

	<meta name="google-site-verification" content="<?= $this->pageGoogleVerify; ?>"/>
	<?= $this->pageGoogleFonts; ?>

	<link rel="Shortcut Icon" href="<?=Yii::app()->baseUrl."/images/favicon.ico" ?>" type="image/x-icon"/>
	<!-- Slider -->
	<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl."/js/inc/jquery.bxslider.min.js" ?>"></script>
	<!-- Fancybox -->
	<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl."/fancybox/jquery.fancybox.js" ?>"></script>


	<?php
	foreach(Yii::app()->theme->info->cssfiles as $cssfile)
		Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->cssUrl($cssfile));
		Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->cssUrl(Yii::app()->theme->config->CHILD_THEME));
		Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->cssUrl('custom'));
		Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->cssUrl('../fancybox/jquery.fancybox.css'));
	?>

	<?php $this->widget('ext.wsiosorientationbugfix.iosorientationbugfix'); ?>

	<?php $this->widget('ext.wsgoogle.wspageviews'); ?>
	<?php echo $this->renderPartial("/site/_google",null,true); ?>


	<script>
	var baseUrl = "/lightspeed/themes/artisan/css/images/sliders/";
	var sliderUrls = ['home_slider1.jpg', 'home_slider2.jpg', 'home_slider3.jpg', 'home_slider6.jpg'];

	jQuery(document).ready(function($) {
		if ($('.bxslider')) {
			sliderUrls.forEach(function(pic) {
				$('.bxslider').append('<li><img src="' + baseUrl + pic + '">');
			});

			$('.bxslider').bxSlider({
				'mode': 'fade',
				'auto': true,
				'controls': false
			});
		}
	});

	</script>
</head>