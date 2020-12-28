<?php

class TypographyClass {
  protected $t;
	protected $title;
	protected $element;
	protected $anchor;
	protected $aname;
  
  public function __construct($t, $title, $ct, $element, $anchor, $aname) {
    $this->t = $t;
    $this->title = $title;
    $this->ct = $ct;
    $this->element = $element;
    $this->anchor = $anchor;
    $this->aname = $aname;
  }

	public function fontStyle() {
		return $this->t['font_color'] . ' ' . $this->t['font_font'] . ' ' . $this->t['font_size'] . ' ' . $this->t['font_case'];
	}

	public function fontAlign() {
		return $this->t['font_align'] ?? '';
	}

	public function fontTag() {
		return $this->t['font_tag'] ?? '';
	}

	public function anchor() {
		return $this->anchor ?? '';
	}
	public function aname() {
		return $this->aname ?? '';
	}

	public function title() {
		if ($this->ct) {
			echo (($this->anchor() && $this->title) ? '<div class="cell '. $this->fontAlign() .'"><' . $this->fontTag() . ' ><a id="' . ($this->aname()) . '" name="' . ($this->aname()) . '" class="' . $this->fontStyle() .' no-margin">' . $this->title . '</a></' . $this->fontTag() . '></div>' : (($this->anchor() || $this->title) ? '<div class="cell '. $this->fontAlign() .'"><' . $this->fontTag() . ' class="' . $this->fontStyle() .' no-margin">' . $this->title . '</' . $this->fontTag() . '></div>' : ''));
		} else {
			echo (($this->anchor() && $this->title) ? '<div class="cell '. $this->fontAlign() .'"><' . $this->element . ' ><a id="' . ($this->aname()) . '" name="' . ($this->aname()) . '" class="no-margin">' . $this->title . '</a></' . $this->element . '></div>' : (($this->anchor() || $this->title) ? '<div class="cell '. $this->fontAlign() .'"><' . $this->element . ' class="no-margin">' . $this->title . '</' . $this->element . '></div>' : ''));
		}
	}
}