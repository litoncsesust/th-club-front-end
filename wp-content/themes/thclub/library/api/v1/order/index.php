<?php

class OrderClass extends ApiCLass {
	public function __construct($key) {
		$this->key = $key;
	}

	public function myorder() {
		$token 	= $this->key->access_token;
		$url 		= $this->baseUrl() . $this->apiVersion() . 'myorders/' . $this->key->id;
		return $this->fetchClubApiData($token, $url, '');
	}
}