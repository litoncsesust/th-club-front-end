<?php

class PhotoClass {
  protected $p;
  
  public function __construct($p) {
    $this->p = $p;
  }
	
	public function imgurl() {
		return ($this->p) ? $this->p : '';
	}
	public function photo() {
		return ($this->p) ? "background-image: url('" . $this->p . "')" : '';
	}
	
	public function iniPhoto() {
		return $this->p ?? '';
	}
	
	public function hvrPhoto() {
		return $this->p ?? '';
	}
}