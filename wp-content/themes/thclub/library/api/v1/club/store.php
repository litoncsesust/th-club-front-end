<?php

class ClubsListClass extends ApiClass {
	public function __construct() {
		$url = $this->baseUrl() . $this->apiVersion() . 'clubs';
		$p_data = $this->fetchClubApiData('', $url, '');
		
		$p_file = dirname(dirname(__FILE__)) . '/club/clubs.json';
		$products = fopen($p_file, 'w');
		fwrite($products, json_encode($p_data, true));
		fclose($products);
	}
}