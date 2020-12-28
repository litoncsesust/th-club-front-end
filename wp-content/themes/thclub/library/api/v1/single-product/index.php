<?php 
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Nahid\JsonQ\Jsonq;

class SingleProductClass  extends ApiCLass {
	public function __construct($key, $sku) {
		$this->sku = $sku;
		$this->key = $key;
	}
	public function singleProduct() {
		try {
			$q = new Jsonq(dirname(dirname(__FILE__)) . '/data/products.json');
			$res = $q->from('result')->where('sku', $this->sku)->get();

			if (sizeof($res) == 0) {
				//wp_redirect(site_url());
				//exit;
			} else {
				$return = '';
				foreach ($res as $key => $val) {
					$return = $val;
				}
				return $return;
			}
		} catch (\Nahid\JsonQ\Exceptions\ConditionNotAllowedException $e) {
		  return $e->getMessage();
		} catch (\Nahid\JsonQ\Exceptions\NullValueException $e) {
		  return $e->getMessage();
		}
	}
	public function deleteProduct() {
		$token 	= $this->key->access_token;
		$url 		= $this->baseUrl() . $this->apiVersion() . 'product/'.$this->sku ;
		
		$r = $this->fetchClubApiData($token, $url, '', 'delete');
		if (strcmp($r->status, 'success') == 0) {
			$_SESSION['notice'] = 'The Product successfully deleted';
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