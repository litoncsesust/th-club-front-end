<?php

class EditProfileClass extends BaseClass {
  public function __construct($data, $key) {
    $this->data = $data;
    $this->key = $key;
  }
  public function profile() {
    $url = $this->baseUrl() . 'user/' . $this->key->id;
    $response = wp_remote_post( $url, array(
      'method'      => 'POST',
      'timeout'     => 60,
      'headers'     => array(
        'Authorization' => $this->key->access_token
      ),
      'body'        => array(
        'email'             => isset($this->data['txtEmail']) ? $this->data['txtEmail'] : '',
        'password'          => isset($this->data['txtPassword']) ? $this->data['txtPassword'] : '',
        'name'              => isset($this->data['txtCompanyName']) ? $this->data['txtCompanyName'] : '',
        'telephone'         => isset($this->data['txtTelephone']) ? $this->data['txtTelephone'] : '',
        'cvr_number'               => isset($this->data['txtCVR']) ? $this->data['txtCVR'] : '',
        'address'           => isset($this->data['txtAddress']) ? $this->data['txtAddress'] : '',
        'post_code'         => isset($this->data['txtPost']) ? $this->data['txtPost'] : '',
        'city'              => isset($this->data['txtCity']) ? $this->data['txtCity'] : '',
        'profile_img'       => '',
        'short_description' => isset($this->data['txtDescription']) ? $this->data['txtDescription'] : '',
        'point'             => isset($this->data['user_point']) ? $this->data['user_point'] : '',
      ),
      'cookies'     => array()
      )
    );
    
    return $this->response($response);
  }
}