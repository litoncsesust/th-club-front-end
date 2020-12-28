<?php

class EditProductClass extends ApiCLass {
  public function __construct($data, $key) {
    $this->data   = $data;
    $this->key    = $key;
  }
  public function editProduct() {
    $token  = $this->key->access_token;
    $url    = $this->baseUrl() . $this->apiVersion() . 'product/' . $this->data['p_e_id'];
    $body   = array(
      'title' => isset($this->data['productProductTitle']) ? $this->data['productProductTitle'] : '',
      'user_id' => isset($this->key->id) ? (int)$this->key->id : '',
      'category_id' => isset($this->data['category']) ? (int)$this->data['category'] : '',
      'club_id' => isset($this->data['club']) ? (int)$this->data['club'] : '',
      'location' => isset($this->data['productLocation']) ? $this->data['productLocation'] : '',
      'address' => isset($this->data['productAddress']) ? $this->data['productAddress'] : '',
      'post_code' => isset($this->data['productPost']) ? (int)$this->data['productPost'] : '',
      'city' => isset($this->data['productCity']) ? $this->data['productCity'] : '',
      'expire_date' => isset($this->data['productExpireDate']) ? $this->data['productExpireDate'] : '',
      'total_number' => isset($this->data['productQuantity']) ? (int)$this->data['productQuantity'] : '',
      'initial_point' => isset($this->data['productPrice']) ? (int)$this->data['productPrice'] : '',
      'organizer' => isset($this->data['productOrganizer']) ? $this->data['productOrganizer'] : '',
      'description' => isset($this->data['productDescription']) ? $this->data['productDescription'] : '',
      'short_description' => isset($this->data['productDescription']) ? substr($this->data['productDescription'], 0, 120) : '',
      'seller_club' => isset($this->data['productSellerName']) ? $this->data['productSellerName'] : '',
      'seller_address' => isset($this->data['productSellerAddress']) ? $this->data['productSellerAddress'] : '',
      'seller_postcode' => isset($this->data['productSellerPost']) ? $this->data['productSellerPost'] : '',
      'seller_city' => isset($this->data['productSellerCity']) ? $this->data['productSellerCity'] : '',
      'seller_email' => isset($this->data['productSellerEmail']) ? $this->data['productSellerEmail'] : '',
      'seller_telephone' => isset($this->data['productSellerTelephone']) ? $this->data['productSellerTelephone'] : '',
      'seller_description' => isset($this->data['productSellerDescription']) ? $this->data['productSellerDescription'] : '',
      'product_image' => isset($this->data['product_image']) ? $this->data['product_image'] : '',      
    );

    $r = $this->fetchClubApiData($token, $url, $body, 'put');
    /*echo "<pre>";
  print_r($r);
  exit();*/
    
    if (strcmp($r->status, 'success') == 0) {
      $_SESSION['notice'] = 'Product has been updated successfully'; 
      $plc = new ProductsListClass();
      $plc->productListinData();
      wp_redirect(site_url('edit-product/' . $this->data['p_e_id']));
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