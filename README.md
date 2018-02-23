# php-soap

How to install the project
```
composer update
```


Basic Soap Project
example code
```
<?php

require 'vendor/autoload.php';

use \Library\MySoap;

$username = "";//username 
$password = "";//pasword e.g 123456 
$url      = "";// e.g ItemClassServiceV2.wsdl or http://site/?WSDL
$method   = "";// e.g getMyMethod
$payload  = [];// e.g item =>'value'

$my_soap = new MySoap();
print_r( $my_soap->init($username, $password, $url, $method, $payload));

```
