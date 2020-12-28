<?php

class BaseClass {
	public function baseUrl() {
    return 'http://test.bordingvista.com/api.th-club.com/';
  }

  public function apiVersion() {
    return 'api/v1/';
  }

	private function accessToken() {
		return 'cHJTUnROcjc4UGxoOUVIYVd3ajNCV2U4aVRFajdNTFo1aHk0eFU2WUwxSFJTS1JVRG9ydFBRNU1FREhI5d00f92361e5b';
	}

	public function accessHeaders() {
		return array(
			'headers' => array(
				'Content-type' => 'application/json',
				'Authorization' => $this->accessToken()
			)
		);
	}

	public function response($response) {
		$res = json_decode($response['body']);
		if ($res->status == 'fail') {
		  $sfmessages = '';
		  if(is_array($res->result)){
		    foreach ($res->result as $key => $value) {
		      $sfmessages .= ucfirst($key) . ': ' . $value[0] . '<br/>';
		    }
			}else{
				$sfmessages .= $res->result . '<br/>';
			}
 		  return $sfmessages; 
		} else {
		  return $res; 
		}
 	}

}