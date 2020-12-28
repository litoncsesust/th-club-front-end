<?php
$w = get_sub_field('button_btn_w');
$wc = new WrapperClass($w, '');
$bc = new ButtonClass(get_sub_field('button_btn_add'), 'a');
?>
<div class="button-area <?= $wc->marginPadding() ?>" style="<?= $wc->backgroundColor() ?>">
	<div class="grid-container <?= $wc->wrapperSize() ?>">
		<div class="color-bg-white medium-top-padding high-right-padding high-left-padding medium-bottom-padding">
			<?= $bc->buttonGroup() ?>
		</div>
	</div>
</div>