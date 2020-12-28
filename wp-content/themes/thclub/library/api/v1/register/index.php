<?php

class RegisterClass extends ApiCLass {
  public function __construct($data) {
    $this->data = $data;
  }
  public function register() {
    $url = $this->baseUrl() . $this->apiVersion() . 'register';
    $body = array(
      'email'             => isset($this->data['txtEmail']) ? $this->data['txtEmail'] : '',
      'password'          => isset($this->data['txtPassword']) ? $this->data['txtPassword'] : '',
      'name'              => isset($this->data['txtCompanyName']) ? $this->data['txtCompanyName'] : '',
      'telephone'         => isset($this->data['txtTelephone']) ? $this->data['txtTelephone'] : '',
      'cvr_number'        => isset($this->data['txtCVR']) ? $this->data['txtCVR'] : '',
      'address'           => isset($this->data['txtAddress']) ? $this->data['txtAddress'] : '',
      'post_code'         => isset($this->data['txtPost']) ? $this->data['txtPost'] : '',
      'city'              => isset($this->data['txtCity']) ? $this->data['txtCity'] : '',
      'profile_picture'   => isset($this->data['file_path']) ?  array( 'file_path' => $this->data['file_path'], 'file_name'=> $this->data['file_name'] )  : '',
      'short_description' => isset($this->data['txtDescription']) ? $this->data['txtDescription'] : '',
      'point'             => isset($this->data['user_point']) ? $this->data['user_point'] : '',
    );

    $r = $this->fetchClubApiData('', $url, $body, 'post');
   /* echo "<pre>";
    print_r($r);
    exit;*/
    
    if (strcmp($r->status, 'success') == 0) {
      $_SESSION['clubKey'] = $r->result;
      $_SESSION['notice'] = 'Du er blevet registreret og logget ind.';
      wp_redirect(site_url());
      exit;
    } else {
      $notice = '';
      if(is_object($r->result) || is_array($r->result)){
        foreach ($r->result as $key => $value) {
          $notice .= ucfirst($key) . ': ' . $value[0] . '<br/>';
        }
      }else{
        $notice .= $r->result . '<br/>';
      }
      $_SESSION['notice'] = $notice; 
    }
  }
}