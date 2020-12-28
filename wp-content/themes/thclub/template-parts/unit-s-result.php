<?php
$cw = get_sub_field('sr_cw');
if ($cw) {
$w = get_sub_field('sr_w');
$wc = new WrapperClass($w, '');
}
$p = new ProductsClass();
$sc = new SearchClass();
$url = new BaseClass();
$products = (isset($_GET['title']) || isset($_GET['category']) || isset($_GET['club'])) ? $sc->search() : '';
?>
<div class="sr-area color-bg-light <?= ($cw) ? $wc->marginPadding() : ''?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
	<div class="grid-container no-padding <?= ($cw) ? $wc->wrapperSize() : '' ?>">
		<ul id="s-result" class="grid-x grid-padding-x small-up-2 medium-up-3 large-up-3 align-center no-margin no-padding">
			<?php if(isset($_GET['title']) || isset($_GET['category']) || isset($_GET['club'])) { ?>
				<?php
				$delay = 150;
				foreach ($products as $product) {
					$thumb = (isset($product['files'][0]['file_path'])) ? $url->baseUrl() . $product['files'][0]['file_path'] : get_template_directory_uri() . '/dist/assets/images/product-placeholder.jpg';
					?>
					<li class="cell wow zoomIn high-bottom-margin" data-wow-delay="<?= $delay ?>ms">
						<div class="color-bg-white drop-shadow">
							<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>"><div class=" lazy cover tg-bg-image" style="background-image: url(<?= $thumb ?>"></div></a>
							<div class="p-info clearfix">
								<span class="p-name float-left">
									<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class=" font-condensed font-17 color-text-darkgray"><?= $product['title'] ?></a>
									<p class="no-margin font-12"><?= $out = strlen($product['short_description']) > 60 ? substr($product['short_description'],0,60)."..." : $product['short_description'] ?></p>
								</span>
								<span class="p-price float-right">
									<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="font-condensed font-15 text-center color-bg-black color-text-white"><?= $product['initial_point'] ? str_replace(",", ".", number_format($product['initial_point'])) : '' ?> <br/>POINTS</a>
								</span>
							</div>
							<div class="link-info clearfix">
								<span class="float-left">
									<p class="font-condensed p-date no-bottom-margin"><?= $product['offer_date'] ?></p>
									<p class="no-margin font-12"><?= $product['book_by_date'] ?></p>
								</span>
								<span class="float-right">
									<p class="font-condensed no-margin text-center"><?= $product['clubs']['name'] ?></p>
									<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="button gplink font-condensed font-16 color-bg-primary no-margin">LÆS MERE</a>
								</span>
							</div>
						</div>
					</li>
					<?php $delay += 50;
					}
				} else {
					$delay = (int)150;
					foreach ($p->products() as $product) {
						$thumb = (isset($product['files'][0]['file_path'])) ? $url->baseUrl() . $product['files'][0]['file_path'] : get_template_directory_uri() . '/dist/assets/images/product-placeholder.jpg';
						?>
						<li class="cell wow zoomIn high-bottom-margin" data-wow-delay="<?= $delay ?>ms">
							<div class="color-bg-white drop-shadow">
								<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>"><div class=" lazy cover tg-bg-image" style="background-image: url(<?= $thumb ?>"></div></a>
								<div class="p-info clearfix">
									<span class="p-name float-left">
										<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class=" font-condensed font-17 color-text-darkgray"><?= $product['title'] ?></a>
										<p class="no-margin font-12"><?= $out = strlen($product['short_description']) > 60 ? substr($product['short_description'],0,60)."..." : $product['short_description'] ?></p>
									</span>
									<span class="p-price float-right">
										<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="font-condensed font-15 text-center color-bg-black color-text-white"><?= $product['initial_point'] ? str_replace(",", ".", number_format($product['initial_point'])) : '' ?> <br/>POINTS</a>
									</span>
								</div>
								<div class="link-info clearfix">
									<span class="float-left">
										<p class="font-condensed p-date no-bottom-margin"><?= $product['offer_date'] ?></p>
										<p class="no-margin font-12"><?= $product['book_by_date'] ?></p>
									</span>
									<span class="float-right">
										<p class="font-condensed no-margin text-center"><?= $product['clubs']['name'] ?></p>
										<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="button gplink font-condensed font-16 color-bg-primary no-margin">LÆS MERE</a>
									</span>
								</div>
							</div>
						</li>
						<?php $delay += 50;
						}
						if (count($p->products()) > 6){
						?>
							<div class="wow zoomIn font-condensed font-18 text-center" id="loadMore">SE FLERE<br>&darr;</div>
						<?php } 
					}?>
				</ul>
			</div>
		</div>