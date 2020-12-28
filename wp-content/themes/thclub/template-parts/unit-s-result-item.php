<li class="cell wow zoomIn high-bottom-margin" data-wow-delay="<?= $delay ?>ms">
	<div class="color-bg-white drop-shadow">
		<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>"><div class=" lazy cover tg-bg-image" style="background-image: url(<?= $thumb ?>"></div></a>
		<div class="p-info clearfix">
			<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="p-name font-condensed font-18 float-left color-text-darkgray"><?= $product['title'] ?></a>
			<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="p-price font-condensed font-15 float-right text-center color-bg-black color-text-white"><?= $product['initial_point'] ?> <br/>POINTS</a>
		</div>
		<div class="link-info clearfix">
			<span class="float-left">
				<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="p-link font-condensed font-18 color-text-gray">&rarr; <u>LÆS MERE</u></a>
			</span>
			<span class="float-right font-condensed font-18 color-text-gray">
				<?= $product['clubs']['name'] ?>
				<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="font-condensed font-18 color-text-secondary">&rarr; <u>LÆS MERE</u></a>
			</span>
		</div>
	</div>
</li>
 