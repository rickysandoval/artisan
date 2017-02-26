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
			'url' => 'category',
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
					'url' => 'category',
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
							'count' => 50,
							'url' => 'category'
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
		),
		'legal' => array('mode' => 'normal'),
		'social' => array(
			'facebook' => true,
			'pinterest' => true,
			'twitter' => false,
			'google' => false,
			'google_publisher' => '',
			'addthis' => false,
			'vk' => false
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
			),
			'more' => array(
				0 => array(
					'new_window' => false,
					'url' => 'service/about',
					'title' => 'About Us'
				),
				1 => array(
					'new_window' => false,
					'url' => 'service/faqs',
					'title' => 'FAQs'
				),
				2 => array(
					'new_window' => false,
					'url' => 'service/store-policies',
					'title' => 'Store Policies'
				)
			)
		),
		'tags' => false,
		'settings' => $shop_settings,
		'hallmarks' => false,
		'payments' => false,
		'currency2' => array(
			'url' => 'session/currency/usd',
			'symbol' => '$',
			'code' => 'USD',
			'title' => 'United States Dollar',
			'active' => true
		)
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
			'quantity' => 1,
			'images' => array(
				0 => 2758889,
				1 => 2759236
			),
			'stock' => array(
				'available' => true,
				'on_stock' => true,
				'track' => true,
				'allow_outofstock_sale' => false,
				'level' => 60,
				'minimum' => 1,
				'maximum' => 60,
				'delivery' => array(
					'title' => '5 - 7 days'
				)
			),
			'options' => false,
			'variants' => false,
			'custom' => false,
			'unit' => false,
			'specs' => false,
			'discounts' => false,
			'discount_rules' => false,
			'reviews' => false,
			'tags' => false,
			'bundles' => false,
			'related' => false
		)
	);

	$collection = array(
		'filters' => array(
			'page' => 1,
			'sort' => 'asc',
			'limit' => 12,
			'mode' => 'grid',
			'min' => 0,
			'max' => 8000,
			'brand' => 0,
			'search' => false,
			'custom' => false
		),
		'internal' => array(
			'url' => 'category',
			'page' => 1
		),
		'search' => false,
		'page_next' => 2,
		'limit' => 12,
		'page' => 1,
		'pages' => 2,
		'image' => 0,
		'content' => '',
		'description' => '',
		'products' => $products,
		'title' => '6 x 9',
		'sorts' => array(
			'default' => array(
				'id' => 'default',
				'title' => 'Default'
			),
			'lowest' => array(
				'id' => 'lowest',
				'title' => 'Lowest Price'
			)
		),
		'brands' => array(
			0 => array(
				'id' => 0,
				'title' => 'All brands'
			),
			1 => array(
				'id' => 202934,
				'title' => 'Tufenkian'
			)
		),
		'price_min' => 0,
		'price_max' => 8000
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
		'breadcrumbs' => array(
			0 => array(
				'url' => 'category',
				'title' => 'contemporary'
			),
			1 => array(
				'url' => 'category',
				'title' => '6 x 9'
			),
			2 => array(
				'url' => 'product',
				'title' => 'Coventry, Light Natural: 6\' x 9\''
			)
		),
		'cart' => $cart,
		'back' => false,
		'account' => true,
		'recent' => false,
		'compare' => false,
		'messages' => false,
		'search' => ''
	);

	$theme = array(
		'body_google_webfonts' => 'Merriweather',
		'headings_google_webfonts' => 'Montserrat',
		'setting_brands' => 0,
		'setting_newsletter' => 0,
		'social_facebook' => 'https://www.facebook.com/artisanrugscb/?ref=aymt_homepage_panel',
		'social_google' => '',
		'social_instagram' => 'https://www.instagram.com/artisanruggallery/',
		'social_pinterest' => 'https://www.pinterest.com/artisanruggalle/',
		'social_tumblr' => '',
		'social_twitter' => 'https://twitter.com/artisanrug',
		'social_youtube' => '',
		'contact_description' => 'The Artisan Rug Gallery offers bespoke solutions to your home designs – ranging from exceptional contemporary pieces, to traditional weavings.',
		'contact_email' => 'jeff@artisanruggallery.com',
		'contact_name' => 'Artisan Rug Gallery',
		'contact_phone' => '3038250064',
		'setting_kiyoh' => '',
		'setting_feedbackcompany' => '',
		'banners' => 0,
		'setting_homepagetags' => 0,
		'product_image_fit' => 1,
		'setting_reviews' => 0,
		'show_amount_of_products_on_productpage' => 0,
		'folding_sidebar_menu' => 1
	);

	function getTemplateUrl($mockPage) {
		$templates = array(
			'home' => 'pages/index.rain',
			'product' => 'pages/product.rain',
			'category' => 'pages/collection.rain',
			'textpage' => 'pages/textpage.rain'
		);
		if (array_key_exists($mockPage, $templates)) {
			return $templates[$mockPage];
		} else {
			return $templates['textpage'];
		}
	}

	function getContent($mockPage) {
		if (file_exists(dirname(__FILE__).'/contents/'.$mockPage.'.html')) {
			return file_get_contents(dirname(__FILE__).'/contents/'.$mockPage.'.html');
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
		'featured' => false,
		'product' => $products[0],
		'collection' => $collection,
		'textpage' => array(
			'title' => $mockPage,
			'content' => getContent($mockPage)
		)
	);
}