<?php

class ProductsListClass extends ApiClass {
	public function __construct() {
		
	}

	public function productListinData(){
		$url = $this->baseUrl() . $this->apiVersion() . 'products';
		$p_data = $this->fetchClubApiData('', $url, '');

		$p_file = dirname(dirname(__FILE__)) . '/data/products.json';
		$products = fopen($p_file, 'w');
		fwrite($products, json_encode($p_data, true));
		fclose($products);
	}
}