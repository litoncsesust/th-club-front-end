<?php

class SingleUserClass extends ApiCLass {
	public function __construct($key) {
		$this->key = $key;
	}

	public function user() {
		$token 	= $this->key->access_token;
		/*echo "<pre>";
		print_r($token);
		exit;*/
		$url 		= $this->baseUrl() . $this->apiVersion() . 'user/' . $this->key->id;
		return $this->fetchClubApiData($token, $url, '');
	}
}