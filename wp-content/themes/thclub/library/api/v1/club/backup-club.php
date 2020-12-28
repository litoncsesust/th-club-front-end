<?php

class SingleClubClass extends ApiCLass {
	public function __construct($id, $key) {
		$this->id = $id;
		$this->key = $key;
	}

	public function singleClub() {
		$token 	= $this->key->access_token;
		$url 		= $this->baseUrl() . 'club/' . $this->id;
		$r 			= $this->fetchClubApiData($token, $url, '');
		return $r->result;
	}
}