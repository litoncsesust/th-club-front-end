<?php

class LoginClass extends BaseClass  {
  public function __construct($data) {
    $this->data = $data;
  }
  public function login() {
    $url = $this->baseUrl() . $this->apiVersion() . 'login';
    $response = wp_remote_post( $url, array(
      'method'      => 'POST',
      'timeout'     => 45,
      'redirection' => 5,
      'httpversion' => '1.0',
      'blocking'    => true,
      'headers'     => array(
        'Authorization' => 'cHJTUnROcjc4UGxoOUVIYVd3ajNCV2U4aVRFajdNTFo1aHk0eFU2WUwxSFJTS1JVRG9ydFBRNU1FREhI5d00f92361e5b',
      ),
      'body'        => array(
        'email'     => isset($this->data['loginEmail']) ? $this->data['loginEmail'] : '',
        'password'  => isset($this->data['loginPassword']) ? $this->data['loginPassword'] : '',
      ),
      'cookies'     => array()
      )
    );
    
    return $this->response($response);
  }
}