<?php
$url = new BaseClass();
$mp = new UserProductsClass($_SESSION['clubKey']->id);
$mp = $mp->userProducts();
/*echo "<pre>";
  print_r(count($mp));
  exit();*/
if ( isset($_POST['btnDeleteProduct']) ) { 
	$sp = new SingleProductClass($_SESSION['clubKey'], $_POST['product_sku']);
	$deleteProduct = $sp->deleteProduct();
}
?>

<div class="m-s-area large-top-margin">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-up-2 medium-up-3 large-up-3 align-center">
			<?php	foreach ($mp as $product) {
			$thumb = (isset($product['files'][0]['file_path'])) ? $url->baseUrl() . $product['files'][0]['file_path'] : get_template_directory_uri() . '/dist/assets/images/products/p1.jpg';
			?>
			<div class="cell wow slideInUp high-bottom-margin" data-wow-delay="150ms">
				<div class="color-bg-white drop-shadow">
					<div class="lazy cover tg-bg-image" style="background-image: url(<?= $thumb ?>"></div>
					<div class="p-info clearfix">
						<span class="p-name float-left">
							<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class=" font-condensed font-17 color-text-darkgray"><?= $product['title'] ?></a>
							<p class="font-condensed no-bottom-margin"><?= $product['offer_date'] ?></p>
							<p class="no-margin font-12"><?= $product['book_by_date'] ?></p>
						</span>
						<span class="p-price float-right">
							<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="font-condensed font-15 text-center color-bg-black color-text-white"><?= $product['initial_point'] ? str_replace(",", ".", number_format($product['initial_point'])) : '' ?> <br/>POINTS</a>
						</span>
					</div>
					<div class="link-info clearfix">
						<span class="float-left">
							<a href="<?= site_url() ?>/product/<?= $product['sku'] ?>" class="p-link font-condensed font-18 color-text-gray">&rarr; <u>SE PRODUKT</u></a>
							<a href="<?= site_url() ?>/edit-product/<?= $product['id'] ?>" class="p-link font-condensed font-18 color-text-gray">&rarr; <u>REDIGER</u></a>
						</span>
						<form method="post" action="<?= get_the_permalink() ?>">
							<input type="hidden" value="<?= $product['sku'] ?>" name="product_sku">
							<input id="create" class="hollow button small warning float-right font-condensed font-18 color-text-primary" type="submit" name="btnDeleteProduct" value="Delete">
						</form>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>