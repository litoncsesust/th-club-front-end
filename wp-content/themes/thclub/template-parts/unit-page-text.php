<?php
$w = get_sub_field('text_pg_txt_w');
$t = get_sub_field('text_pg_txt_t');
$title = get_sub_field('text_pg_txt_title');
$anchor = get_sub_field('text_pg_txt_anchor');
$aname = get_sub_field('text_pg_txt_anchor_name');
$element = get_sub_field('text_pg_element');
$ct = get_sub_field('text_pg_txt_ct');
$wc = new WrapperClass($w, $b);
$tc = new TypographyClass($t, $title, $ct, $element, $anchor, $aname);
$pc = new PhotoClass(get_sub_field('text_pg_txt_bg_image'));

$page_test = '<div class="page-text-area ' . $wc->marginPadding() . '" ' . $wc->wrapperStyle() . '>';
	$page_test .= '<div class="grid-container ' . $wc->wrapperSize() . '">';
		$page_test .= '<div class="cell small-12">';
			$page_test .= '<div class="color-bg-white medium-bottom-padding medium-top-padding high-right-padding high-left-padding">';
				echo $page_test;
				$tc->title();
				$page_test = get_sub_field('text_pg_txt_subtitle') ? '<p class="subtitle">' . get_sub_field('text_pg_txt_subtitle') . '</p>' : '';
				$page_test .= get_sub_field('text_pg_txt_subtitle') ? '<div class="ReadMore"><div class="color-bg-white medium-top-padding high-right-padding"><a class="button-2 font-13 medium color-bg-flamingo color-text-white case-upper no-margin" href="#">Læs mere Om</a></div></div><div class="hideC medium-bottom-padding">'. get_sub_field('text_pg_txt_text') . '</div>' : '<div class=" medium-bottom-padding">'. get_sub_field('text_pg_txt_text') . '</div>';
			$page_test .= '</div>';
		$page_test .= '</div>';
	$page_test .= '</div>';
$page_test .= '</div>';
echo $page_test;