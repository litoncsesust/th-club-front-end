<?php 
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Nahid\JsonQ\Jsonq;

class ProductsClass {
	public function products() {
		try {
			$q = new Jsonq(dirname(dirname(__FILE__)) . '/data/products.json');
			return $q->from('result')->sortBy('isFeatured', 'desc')->get();

 		} catch (\Nahid\JsonQ\Exceptions\ConditionNotAllowedException $e) {
		  return $e->getMessage();
		} catch (\Nahid\JsonQ\Exceptions\NullValueException $e) {
		  return $e->getMessage();
		}
	}
}