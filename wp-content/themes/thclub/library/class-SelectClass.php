<?php

class SelectClass {
	protected $make;
	protected $label;
	protected $data;
	protected $pre;
	protected $required;

	public function __construct($make, $label, $data, $pre, $required) {
		$this->make = $make;
		$this->label = $label;
		$this->data = $data;
		$this->pre = $pre;
		$this->required = $required;
	}

	public function generateSelect() {
		$select = '<div class="cell samll-12 medium-6 large-6">';
		$select .= '<select name="' . $this->make . '" id="'.strtolower($this->make).'-id" ' . (($this->required) ? 'required' : '') . '>';
		$select .= '<option disabled value="" selected hidden>' . $this->label . '</option>';
		//$select .= '<option value="all">Alle</option>';
		foreach ($this->data as $maker) {
			if ($this->pre == $maker){
				$select .= '<option value="' . $maker . '" selected="selected">' . $this->pre . '</option>';
			} else {  
				$select .= '<option value="' . $maker . '">' . $maker . '</option>';
			}
		}
		$select .= '</select>';
		$select .= '</div>';
		return $select;
	}
}