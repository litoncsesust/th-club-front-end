<?php

class SingleProductAPIClass extends ApiCLass {
	public function __construct($key, $id) {
		$this->key = $key;
		$this->id = $id;
	}

	public function singleProductFromAPI() {
		$token 	= $this->key->access_token;
		$url 		= $this->baseUrl() . $this->apiVersion() .'product/' . $this->id;
		$q 			= $this->fetchClubApiData($token, $url, '');
		/*echo "<pre>";
    print_r($q);
    exit;*/
    if (strcmp($q->status, 'fail') == 0) {
      wp_redirect(site_url('my-products'));
      exit;
    } else{
			return $q->result;
    }
	}
}