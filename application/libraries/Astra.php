<?php
	class Astra {
		protected $_ci;

		function __construct() {
			$this->_ci = &get_instance(); //Untuk Memanggil function load, dll dari CI. ex: $this->load, $this->model, dll
		}

		function call($url) {
		    
		    Header('Content-Type: application/json');
		    Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
            Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
            Header('Access-Control-Allow-Methods: GET'); //method allowed
			if ($url != NULL) {
                $ch= curl_init();
        		curl_setopt_array($ch, array(
        			CURLOPT_URL => $url,
        			CURLOPT_RETURNTRANSFER  => true,
        			CURLOPT_FOLLOWLOCATION  => true,
        			CURLOPT_CONNECTTIMEOUT  => 30,
        			CURLOPT_SSL_VERIFYPEER  => false,
        			CURLOPT_USERAGENT       => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)',
        			CURLOPT_COOKIESESSION   => false,
        			CURLOPT_CUSTOMREQUEST   => 'GET',
        		));
        		$output = curl_exec($ch);
        		curl_close($ch);
        		return $output;
				
			} else {
			    return "URL Cannot be NULL";
			}
		}
		
		function call_capella($url) {
		    
		    Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
            Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
            Header('Access-Control-Allow-Methods: GET'); //method allowed
			if ($url != NULL) {
                $ch= curl_init();
        		curl_setopt_array($ch, array(
        			CURLOPT_URL => $url,
        			CURLOPT_RETURNTRANSFER  => true,
        			CURLOPT_FOLLOWLOCATION  => false,
        			CURLOPT_CONNECTTIMEOUT  => 30,
        			CURLOPT_SSL_VERIFYPEER  => false,
        			CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        			CURLOPT_USERAGENT       => 'PostmanRuntime/7.28.4',
        			CURLOPT_COOKIESESSION   => TRUE,
        			CURLOPT_CUSTOMREQUEST   => 'GET',
        			CURLOPT_HTTPHEADER => array(
                        'Authorization: Basic Z3Vlc3Q6cGVybWlzaQ=='
                    ),
        		));
        		$output = curl_exec($ch);
        		curl_close($ch);
        		return $output;
				
			} else {
			    return "URL Cannot be NULL";
			}
		}
		
		
	}
?>