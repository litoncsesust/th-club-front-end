<?php
$c = get_sub_field('banner_pc_cw');
if ($c) {
	$w = get_sub_field('banner_pc_bw');
	$wc = new WrapperClass($w, '');
}
$bh = get_sub_field('pc_banner_height');
if(get_sub_field('pc_enabled')) : ?>
<div class="slider-area <?= ($c) ? $wc->marginPadding() : '' ?>" <?= ($c) ? $wc->wrapperStyle() : '' ?>>
	<div class="banner grid-container <?= (count(get_sub_field('pc_cover_content')) > 1) ? ' top-slider ' : '' ?><?= ($c) ? $wc->wrapperSize() : '' ?>" style="opacity: 0">
 		<?php
		if(have_rows('pc_cover_content')):
		while (have_rows('pc_cover_content')) : the_row();
		$pc = new PhotoClass(get_sub_field('pc_image'));
		$sbc = new ButtonClass(get_sub_field('pc_link'), 'a');
		?>
		<div class="relative lazy cell cover <?= $bh ?>" style="background-image: url(<?= $pc->imgurl() ?>)">
			<div class="absolute slider-text text-center">
				<?= get_sub_field('pc_text') ? '<h2 class="wow slideInDown font-50 case-upper color-text-white medium-bottom-margin">' . get_sub_field('pc_text') . '</h2>' : '' ?>
				<div class="font-headline font-16 wow slideInUp"><?php $sbc->buttonSingle() ?></div>
			</div>
		</div>
		<?php
		endwhile;
		endif; 
		?>
	</div>
</div>
<?php
endif;