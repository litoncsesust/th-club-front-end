<?php
$cw = get_sub_field('headline_hd_cw');
if ($cw) {
	$w = get_sub_field('headline_hd_w');
	$wc = new WrapperClass($w, '');
}

$t = get_sub_field('headline_hd_t');
$title = get_sub_field('headline_hd_title');
$element = get_sub_field('headline_hd_element');
$ct = get_sub_field('headline_txt_ct');

$tc = new TypographyClass($t, $title, $ct, $element, '', '');
?>

<div class="hd-area <?= ($cw) ? $wc->marginPadding() : ''?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
	<div class="grid-container <?= ($cw) ? $wc->wrapperSize() : '' ?>">
		<?=	$tc->title(); ?>
	</div>
</div>