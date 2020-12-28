<?php

$cw = get_sub_field('image_img_cw');
if ($cw) {
  $w = get_sub_field('image_img_w');
  $wc = new WrapperClass($w, ''); 
}

$pc = new PhotoClass(get_sub_field('image_image'));
?>
<div class="image-area <?= ($cw) ? $wc->marginPadding() : ''?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
	<div class="grid-container <?= ($cw) ? $wc->wrapperSize() : '' ?>">
		<div class="cell small-12">
			<?= ($pc->imgurl()) ? '<div class="lazy cover image-content " data-src="' . $pc->imgurl() .'"></div>' : '';	?>
		</div>
	</div>
</div>