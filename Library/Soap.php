<?php

namespace Library;

error_reporting(-1);
ini_set('display_errors', 'On');
ini_set('soap.wsdl_cache_enabled', 0);

class MySoap {
    
    /**
    * @author ug-code 
    * @date 2018.01.20
    * @result xml
    */
    public function init($username, $password, $url, $method, $payload) {

            try {

                $output = "";
                // Create new instance for the client
                $client = new \SoapClient($url, array('trace'    => 1,
                    'login'    => $username,
                    'password' => $password
                ));

                // Construct the payload to be used to invoke the service.
                // Invoke the service
                //$response = $client->findItemClass($payload);

                $client->{$method}($payload);

                // Process the response. In this example,  the content is copied to a variable that is displayed as output
                $dom                     = new \DOMDocument;
                $dom->preserveWhiteSpace = FALSE;
                $dom->loadXML($client->__getLastResponse());
                $dom->formatOutput       = TRUE;
                $dom->saveXml();
                $output     = $dom->saveXml();
            } catch (\Exception $e) {
                print "Exception: " . $e->getMessage();
            }
        return $output;
    }
  
}
