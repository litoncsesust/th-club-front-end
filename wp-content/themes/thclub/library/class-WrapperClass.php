<?php

class WrapperClass {
  protected $w;
	protected $b;
  
  public function __construct($w, $b) {
    $this->w = $w;
    $this->b = $b;
  }

  public function wrapperSize() {
		return $this->w['wrapper_size'] ?? '';
  }

  public function backgroundColor() {
		return ($this->w['wrapper_color']) ? 'background-color:' . $this->w['wrapper_color'] . ';' : '';
	}

	public function topBottomBorder() {
		return ($this->w['border']) ? 'border-top:1px solid #bebbb9; border-bottom:1px solid #bebbb9' : '';
	}

	public function border() {
		return (isset($this->b['border'])) ? 'border-' . $this->b['border_position'] . ':' . $this->b['border_size'] . ' solid ' . $this->b['border_color'] . ';' : '';
	}

	public function wrapperStyle() {
		return ($this->backgroundColor() || $this->border() || $this->topBottomBorder()) ? 'style="' . $this->backgroundColor() . $this->border() . $this->topBottomBorder() . '"' : '';
	}

	public function margin() {
		return ($this->w) ? $this->w['margin_top'] . ' ' . $this->w['margin_bottom'] : '';
	}

	public function padding() {
		return ($this->w) ? $this->w['padding_top'] . ' ' . $this->w['padding_bottom'] : '';
	}

	public function marginPadding() {
		return ($this->margin() || $this->padding()) ? $this->margin() . ' ' .  $this->padding() : '';
	}
}