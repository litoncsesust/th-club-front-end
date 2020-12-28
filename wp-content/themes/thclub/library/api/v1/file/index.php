<?php

class SingleFileDeleteClass extends ApiCLass {
	public function __construct($key, $file_name_id) {
		$this->key = $key;
		$this->file_name_id = $file_name_id;
		
	}

	
  public function delete() {
		$token 	= $this->key->access_token;
		$url 		= $this->baseUrl() . $this->apiVersion() . 'file/'.$this->file_name_id ;
		
		$result = $this->fetchClubApiData($token, $url, '', 'delete');
  	/*echo "<pre>";
		print_r($result);
		exit();*/
	
	}
}