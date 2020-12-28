<?php

class ProductsArchiveClass extends BaseClass {
	public function __construct() {
		if(wp_remote_get($this->baseUrl() . 'products', $this->accessHeaders() )['response']['code'] != 404){
			$p_response = wp_remote_get($this->baseUrl() . 'products', $this->accessHeaders() );
			$p_data = wp_remote_retrieve_body( $p_response );
			$p_data = json_decode($p_data, true);

			$p_file = dirname(dirname(__FILE__)) . '/data/products.json';
			$products = fopen($p_file, 'w');
 			fwrite($products, json_encode($p_data, true));
			fclose($products);

			echo 'Success';
 		}
	}
}