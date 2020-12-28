<?php

class CreateProductClass extends ApiCLass {
  public function __construct($data, $key) {
    $this->data   = $data;
    $this->key    = $key;
  }
  public function createProduct() {
    $token  = $this->key->access_token;
    $url    = $this->baseUrl() . $this->apiVersion() .'product';
    $body = array(
      'user_id' => isset($this->key->id) ? (int)$this->key->id : '',
      'category_id' => isset($this->data['category']) ? (int)$this->data['category'] : '',
      'club_id' => isset($this->data['club']) ? (int)$this->data['club'] : '',

      'initial_point' => isset($this->data['productPrice']) ? (int)$this->data['productPrice'] : '',
      'total_number' => isset($this->data['productQuantity']) ? (int)$this->data['productQuantity'] : '',
      'offer_date' => isset($this->data['productOfferDate']) ? $this->data['productOfferDate'] : '',
      'book_by_date' => isset($this->data['productExpireDate']) ? $this->data['productExpireDate'] : '',

      'title' => isset($this->data['productProductTitle']) ? $this->data['productProductTitle'] : '',
      'short_description' => isset($this->data['productShortDescription']) ? substr($this->data['productShortDescription'], 0, 120) : '',
      
      'headline' => isset($this->data['productHeadline']) ? $this->data['productHeadline'] : '',
      'description' => isset($this->data['productDescription']) ? $this->data['productDescription'] : '',

      /*'expire_date' => isset($this->data['productExpireDate']) ? $this->data['productExpireDate'] : '',
      'purchase_notice' => isset($this->data['purchaseNotice']) ? substr($this->data['purchaseNotice'], 0, 120) : '',*/

      'seller_club' => isset($this->data['productSellerName']) ? $this->data['productSellerName'] : '',
      'seller_address' => isset($this->data['productSellerAddress']) ? $this->data['productSellerAddress'] : '',
      'seller_postcode' => isset($this->data['productSellerPost']) ? $this->data['productSellerPost'] : '',
      'seller_city' => isset($this->data['productSellerCity']) ? $this->data['productSellerCity'] : '',
      
      'seller_email' => isset($this->data['productSellerEmail']) ? $this->data['productSellerEmail'] : '',
      'seller_telephone' => isset($this->data['productSellerTelephone']) ? $this->data['productSellerTelephone'] : '',
      'contact_person' => isset($this->data['productContactPerson']) ? $this->data['productContactPerson'] : '',

      'product_image' => isset($this->data['product_image']) ? $this->data['product_image'] : '',   
    );
    
    $r = $this->fetchClubApiData($token, $url, $body, 'post');
    
    if (strcmp($r->status, 'success') == 0) {
      //$_SESSION['notice'] = 'You can pick up your bike here at this and this time'; 
      $plc = new ProductsListClass();
      $plc->productListinData();
      wp_redirect(site_url('my-products'));
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