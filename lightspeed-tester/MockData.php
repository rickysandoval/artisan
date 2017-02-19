<?php

function getMockData($mockPage) {

	$categories = array(
		'349682' => array(
			'id' => 349682,
			'parent' => 0,
			'path' => array(
				0 => 349682
			),
			'depth' => 1,
			'type' => 'category',
			'url' => 'tribal',
			'title' => 'Tribal',
			'description' => '',
			'count' => 253,
			'subs' => array(
				'349683' => array(
					'id' => 349683,
					'parent' => 349682,
					'path' => array(
						0 => 349683,
						1 => 349682
					),
					'depth' => 2,
					'type' => 'category',
					'url' => 'tribal/scatter-size',
					'title' => 'Scatter Size',
					'description' => '',
					'count' => 128,
					'subs' => array(
						'349684' => array(
							'id' => 349684,
							'parent' => 349683,
							'path' => array(
								0 => 349684,
								1 => 349683,
								2 => 349682
							),
							'depth' => 3,
							'type' => 'category',
							'url' => 'tribal/scatter-size/4-x-6',
							'title' => '4 x 6',
							'description' => '',
							'count' => 50
						)
					)
				)
			)
		),
		'349690' => array(
			'id' => 349690,
			'parent' => 0,
			'path' => array(
				0 => 349690
			),
			'depth' => 1,
			'type' => 'category',
			'url' => 'contemporary',
			'title' => 'Contemporary',
			'description' => '',
			'count' => 285,
			'subs' => false
		),
		'349695' => array(
			'id' => 349695,
			'parent' => 0,
			'path' => array(
				0 => 349695
			),
			'depth' => 1,
			'type' => 'category',
			'url' => 'traditional',
			'title' => 'Traditional',
			'description' => '',
			'count' => 285,
			'subs' => false
		),
		'349699' => array(
			'id' => 349699,
			'parent' => 0,
			'path' => array(
				0 => 349699
			),
			'depth' => 1,
			'type' => 'category',
			'url' => 'transitional',
			'title' => 'Transitional',
			'description' => '',
			'count' => 285,
			'subs' => false
		)
	);

	$shop_settings = array(
		'account' => array(
			'tickets' => true,
			'password_strength' => 0
		)
	);

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
		'currency' => 'usd',
		'categories' => $categories,
		'blogs' => false,
		'brands' => false,
		'links' => array(
			'service' => array(
				0 => array (
					'url' => 'service/about',
					'title' => 'About us',
					'new_window' => false
				)
			),
			'powered_by' => array(
				0 => array(
					'new_window' => true,
					'url' => 'http://www.lightspeedhq.com',
					'title' => 'Lightspeed'
				)
			)
		),
		'tags' => false,
		'settings' => $shop_settings,
		'hallmarks' => false,
		'payments' => false
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
		'setting_brands' => 0,
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
		'setting_feedbackcompany' => '',
		'banners' => 0,
		'setting_homepagetags' => 0
	);

	function getTemplateUrl($mockPage) {
		$templates = array(
			'home' => 'pages/index.rain'
		);
		return $templates[$mockPage];
	}

	function getContent($mockPage) {
		if (file_exists('contents/'.$mockPage).'.html') {
			return file_get_contents('contents/'.$mockPage.'.html');
		} else {
			return false;
		}
	}

	return array(
		'shop' => $shop,
		'page' => $page,
		'theme' => $theme,
		'template' => getTemplateUrl($mockPage),
		'content' => getContent($mockPage),
		'headlines' => false,
		'categories' => false,
		'featured' => false
	);
}