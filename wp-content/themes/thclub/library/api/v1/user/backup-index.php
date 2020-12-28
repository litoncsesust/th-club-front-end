<?php

class SingleUserClass extends BaseClass {
	public function __construct($key) {
		$this->key = $key;
	}

	private function accessToken() {
		return array(
			'headers' => array(
				'Content-type' => 'application/json',
				'Authorization' => $this->key->access_token
			)
		);
	}
	
	public function user() {
		$url = $this->baseUrl() . 'user/' . $this->key->id;
		if(wp_remote_get($url, $this->accessToken() )['response']['code'] != 404){
			$u_response = wp_remote_get($url, $this->accessToken() );
			$u_data = wp_remote_retrieve_body($u_response);
			return json_decode($u_data, true);
		}
	}
}