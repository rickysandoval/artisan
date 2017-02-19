<?php

function getMockData($mockPage) {

	$shop = array(
		'name' => 'Artisan Rug Gallery',
		'title' => 'Artisan Rug Gallery | The finest handmade rugs for your home.',
		'description' => 'We source the highest quality handmade rugs from around the world. Showrooms in Denver and Crested Butte.',
		'keywords' => 'Rugs, Handmade, Art, Carpet, Weaving',
		'languages' => array(
			'us' => array(
				'code' => 'us'
			)
		),
		'language' => 'us',
		'currencies' => array(
			'usd' => array(

			)
		),
		'currency' => 'usd'
	);

	$products = array(
		0 => array(
			'id' => 6389460,
			'vid' => 10205277,
			'image' => 2758889,
			'brand' => false,
			'code' => '008701',
			'ean' => '',
			'sku' => '',
			'score' => false,
			'price' => array(
				'price' => 5550,
				'price_incl' => 5550,
				'price_excl' => 5550,
				'price_old' => 0
			),
			'url' => 'part.html',
			'title' => "Coventry, Light Natural: 6' x 9'",
			'fulltitle' => "Coventry, Light Natural: 6' x 9'",
			'variant' => "Coventry, Light Natural: 6' x 9'",
			'description' => '<p>Style: Coventry</p> <p>Size: 5\'6" x 8\'6" </p> <p>Color: Light Natural</p> <p>Content: Tibetan Wool</p> <p>Origin: Nepal</p>',
			'stock' => array(
				'available' => true,
				'on_stock' => true,
				'allow_outofstock_sale' => false
			),
			'quantity' => 1
		)
	);

	$cart = array(
		'products' => $products,
		'total' => array(
			'price' => 5550,
			'price_incl' => 5550,
			'price_excl' => 5550,
			'price_old' => 0,
			'price_old_incl' => 0,
			'price_old_excl' => 0

		)
	);

	$page = array(
		'title' => 'Artisan Rug Gallery | The finest handmade rugs for your home.',
		'breadcrumbs' => false,
		'cart' => $cart,
		'back' => false,
		'account' => false,
		'recent' => false,
		'compare' => false,
		'messages' => false,
		'search' => ''
	);

	$theme = array(
		'body_google_webfonts' => 'Montserrat',
		'headings_google_webfonts' => 'Montserrat',
		'settings_brands' => 0,
		'setting_newsletter' => 0,
		'social_facebook' => 'https://www.facebook.com/artisanrugscb/?ref=aymt_homepage_panel',
		'social_google' => '',
		'social_instagram' => 'https://www.instagram.com/artisanruggallery/',
		'social_pinterest' => 'https://www.pinterest.com/artisanruggalle/',
		'social_tumblr' => '',
		'social_twitter' => '',
		'social_youtube' => '',
		'contact_description' => 'The Artisan Rug Gallery offers bespoke solutions to your home designs – ranging from exceptional contemporary pieces, to traditional weavings.',
		'contact_email' => 'jeff@artisanruggallery.com',
		'contact_name' => 'Artisan Rug Gallery',
		'contact_phone' => '3038250064',
		'setting_kiyoh' => '',
		'setting_feedbackcompany' => ''
	);

	return array(
		'shop' => $shop,
		'page' => $page,
		'theme' => $theme
	);
}