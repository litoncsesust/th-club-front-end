<?php

class CategoryListClass extends ApiClass {
	public function __construct() {
		$url = $this->baseUrl() . $this->apiVersion() . 'categories';
		$p_data = $this->fetchClubApiData('', $url, '');
		
		$p_file = dirname(dirname(__FILE__)) . '/category/categories.json';
		$products = fopen($p_file, 'w');
		fwrite($products, json_encode($p_data, true));
		fclose($products);
	}
}