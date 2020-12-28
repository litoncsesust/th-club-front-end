<?php

class ButtonClass {
  protected $btn;
	protected $tag;
  
  public function __construct($btn, $tag) {
    $this->btn = $btn;
    $this->tag = $tag;
  }

	public function buttonGroup() {
		if ($this->btn):
			foreach ($this->btn as $key => $value) {
 				echo ($value['button']['button_link_type'] == 'popup' && $value['button']['button_link']) ? '<' . $this->tag . ' class="' . $value['button']['button_style'] . '" data-open="' . $postid . 'Modal" >' . $value['button']['button_link']['title'] . '</' . $this->tag. '>' : ((!$value['button']['button_link_file'] && $value['button']['button_link']) ? '<' . $this->tag . ' class="' . $value['button']['button_style'] . '" href="' . $value['button']['button_link']['url'] . '" target="' . isset($value['button']['button_link']['target']) . '">' . $value['button']['button_link']['title'] . '</' . $this->tag. '>' : (($value['button']['button_link_file'] && $value['button']['button_file']) ? '<' . $this->tag . ' class="' . $value['button']['button_style'] . '" href="' . $value['button']['button_file']['url'] . '" target="' . isset($value['button']['button_file']['target']) . '">' . $value['button']['button_file']['title'] . '</' . $this->tag. '>' : false));
 			}
		endif;
	}

	public function buttonSingle() {
 		echo (isset($this->btn['button_link_type']) == 'popup' && isset($this->btn['button_link'])) ? '<' . $this->tag . ' class="' . $this->btn['button_style'] . '" data-open="' . $postid . 'Modal" >' . $this->btn['button_link']['title'] . '</' . $this->tag. '>' : ((!$this->btn['button_link_file'] && $this->btn['button_link']) ? '<' . $this->tag . ' class="' . $this->btn['button_style'] . '" href="' . $this->btn['button_link']['url'] . '" target="' . isset($this->btn['button_link']['target']) . '">' . $this->btn['button_link']['title'] . '</' . $this->tag. '>' : (($this->btn['button_link_file'] && $this->btn['button_file']) ? '<' . $this->tag . ' class="' . $this->btn['button_style'] . '" href="' . $this->btn['button_file']['url'] . '" target="' . isset($this->btn['button_file']['target']) . '">' . $this->btn['button_file']['title'] . '</' . $this->tag. '>' : false));
 	}
}