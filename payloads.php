<?php

//############## PUSH BRAZE ##################
//**** with campaign_key 
$body = [
	'aps' => [
		'alert' => $message,
		'sound' => 'default',
		'content-available' => 1,
	],
	'campaign_key' => 'SOME_CODE',
	'ab_uri' => 'sdmx://lista-promocao/I%20Love%20Promo',
	'ab' => [
		'c' => '<null>'
	]
];

//**** without campaign_key
$body = [
	'aps' => [
		'alert' => $message,
		'sound' => 'default',
		'content-available' => 1,
	],
	'ab_uri' => 'sdmx://lista-promocao/I%20Love%20Promo',
	'ab' => [
		'c' => '<null>'
	]
];



//############## PUSH Localytics ##################

//**** with campaign_key
$body = [
	'aps' => [
		'alert' => $message,
		'sound' => 'default',
		'content-available' => 1,
	],
	'campaign_key' => 'SOME_CODE',
	'll_deep_link_url' => 'sdmx://lista-promocao/I%20Love%20Promo',
	'll' => [
		'ca' => 609909,
		'cr' => 652113,
		'pj' => 23637101,
		'test_mode' => 0
	]
];

//**** without campaign_key
$body = [
	'aps' => [
		'alert' => $message,
		'sound' => 'default',
		'content-available' => 1,
	],
	'll_deep_link_url' => 'sdmx://lista-promocao/I%20Love%20Promo',
	'll' => [
		'ca' => 609909,
		'cr' => 652113,
		'pj' => 23637101,
		'test_mode' => 0
			]
];


####### STATUS

$body = [
	'action' => 'status',
	'value' => [
		'orderDate' => 1524087608478,
		'orderNumber' => 215889467,
		'orderStatus' => 'CAN'
	],
	'aps' => [
		'alert' => 'Tu pedido #9467 en el restaurante Pruebas Liz (OFFERS no tocar) fue cancelado. Te pedimos disculpas, y te invitamos a intentar con otro restaurante',
		'content-available' => 1,
	],
	'll' => [ 'ca' => 609909,
			  'cr' => 652113,
			]
];
?>



// Deeplinks

sdmx://lista-promocao/I%20Love%20Promo
sdmx://search-restaurants/Italianni%27s
sdmx://quickfilter/Max%2045%20min
sdmx://restaurant/<uuid_restaurant>
