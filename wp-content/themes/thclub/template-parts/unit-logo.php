<?php

$cw = get_sub_field('logo_lg_cw');
if ($cw) {
  $w = get_sub_field('logo_lg_w');
  $wc = new WrapperClass($w, ''); 
}

$lgs = get_sub_field('logo_lg_logo')
?>
<div class="logo-area <?= ($cw) ? $wc->marginPadding() : ''?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
	<div class="grid-container <?= ($cw) ? $wc->wrapperSize() : '' ?>">
		<div class="logo-slider">
			<?php foreach( $lgs as $lg ): ?>
			<div class="lazy cell contain logoheight" style="background-image: url(<?= $lg['url'] ?>)"></div>
			<?php endforeach; ?>
		</div>
	</div>
</div>