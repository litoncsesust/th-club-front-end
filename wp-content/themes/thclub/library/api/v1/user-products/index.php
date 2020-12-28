<?php 
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Nahid\JsonQ\Jsonq;

class UserProductsClass {
	public function __construct($user) {
		$this->user = $user;
	}
	public function userProducts() {
		try {
			$q = new Jsonq(dirname(dirname(__FILE__)) . '/data/products.json');
			return $q->from('result')->where('user_id', $this->user)->get();

		} catch (\Nahid\JsonQ\Exceptions\ConditionNotAllowedException $e) {
		  return $e->getMessage();
		} catch (\Nahid\JsonQ\Exceptions\NullValueException $e) {
		  return $e->getMessage();
		}
	}
}