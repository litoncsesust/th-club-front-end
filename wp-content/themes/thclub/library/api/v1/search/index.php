<?php
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Nahid\JsonQ\Jsonq;

class SearchClass {
  public function search() {
    $q = new Jsonq(dirname(dirname(__FILE__)) . '/data/products.json');
   
    try {
      $title = (isset($_GET['title'])) ? strtolower($_GET['title']) : '';
      $category_id = (isset($_GET['category'])) ? $_GET['category'] : '';
      $club_id = (isset($_GET['club'])) ? $_GET['club'] : '';
      $search_op = ($title) ? 'contains' : '!=';
      $category_op = ($category_id) ? '=' : '!='; 
      $club_op = ($club_id) ? '=' : '!='; 

      $res = $q->from('result')
        //->where('title', $search_op, $title)
        ->where('s_title', $search_op, $title)
        //->where('description', $search_op, $title)
        ->where('category_id', $category_op, $category_id)
        ->where('club_id', $club_op, $club_id)
        ->get(); 

      return $res;
    } catch (\Nahid\JsonQ\Exceptions\ConditionNotAllowedException $e) {
      return $e->getMessage();
    } catch (\Nahid\JsonQ\Exceptions\NullValueException $e) {
      return $e->getMessage();
    }
  }
}