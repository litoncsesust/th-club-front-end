<?php

include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Nahid\JsonQ\Jsonq;

class ClubClass {
	public function __construct($id) {
		$this->id = $id;
		$this->q = new Jsonq(dirname(dirname(__FILE__)) . '/club/clubs.json');
	}

	public function club() {
		try {
			return $this->q->from('result')->get();

		} catch (\Nahid\JsonQ\Exceptions\ConditionNotAllowedException $e) {
		  return $e->getMessage();
		} catch (\Nahid\JsonQ\Exceptions\NullValueException $e) {
		  return $e->getMessage();
		}
	}

	public function singleClub() {
		try {
 			$res = $this->q->from('result')->where('id', $this->id)->get();

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
}