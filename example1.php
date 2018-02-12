<?php

require 'vendor/autoload.php';

use \Library\MySoap;

$username = "";//username 
$password = "";//pasword e.g 123456 
$url      = "";// e.g ItemClassServiceV2.wsdl or http://site/?WSDL
$method   = "findItemClass";// e.g getMyMethod
$payload  = [
	'findCriteria' => [
	    'fetchStart'       => '0',
	    'fetchSize'        => '-1',
	    'filter'           => [
	        'group' => [
	            'upperCaseCompare' => 'false',
	            'item'             => [
	                'upperCaseCompare' => 'false',
	                'attribute'        => 'ItemClassId',
	                'operator'         => '=',
	                'value'            => '300000001878275'
	            ],
	        ],
	    ],
	    'excludeAttribute' => 'false'
	],
	'findControl'  => [
	    'retrieveAllTranslations' => 'false'
	],
	];

$my_soap = new MySoap();
print_r( $my_soap->init($username, $password, $url, $method, $payload));
