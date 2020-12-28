<?php 
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Nahid\JsonQ\Jsonq;

class ParamClass {
	protected $category;
  protected $club;

  public function __construct($category, $club) {
  	$this->category = $category;
    $this->club = $club;
  }

	public function params() {
		try {
			$q = new Jsonq(dirname(dirname(__FILE__)) . '/data/products.json');
			$params = $q->from('result')->select('category_id', 'club_id')->get();
			
			$categoryId = array();
			$clubId = array();
			
			foreach ($params as $param) {
        $categoryId[] = $param['category_id'];
				$clubId[] = $param['club_id'];
			}

			$uniqueCategoryId = array_unique($categoryId);
			$uniqueClubId = array_unique($clubId);

			$return['category'] = $uniqueCategoryId;
			$return['club'] = $uniqueClubId;

			return $return;
		} catch (\Nahid\JsonQ\Exceptions\ConditionNotAllowedException $e) {
		  return $e->getMessage();
		} catch (\Nahid\JsonQ\Exceptions\NullValueException $e) {
		  return $e->getMessage();
		}
	}
}	