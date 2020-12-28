<?php
	$url = new BaseClass();

	$p = new SingleProductAPIClass($_SESSION['clubKey'], url_last_part());
	$sp = $p->singleProductFromAPI();
/*	echo "<pre>";
	print_r($url->baseUrl());
	exit;*/
	$product_images = $sp->files;
	$c = new ClubClass($sp->club_id);
	$cp = $c->singleClub();
?>

<?php 
if ( isset($_POST['btnEditProduct']) ) { 
	if(isset($_FILES)){
		$file_product = [];
		foreach($_FILES['product_img']['name'] as $key => $val){
			if($val){
				$file_product[$key]['file_name'] = $val;
			}
		}
		foreach($_FILES['product_img']['tmp_name'] as $key => $val){
			if($val){
				$filename  = $val;
				$handle    = fopen($filename, "r");
				$data      = fread($handle, filesize($filename));
				$file_product[$key]['file_path'] = base64_encode($data);
			}
		}
			$_POST['product_image'] = $file_product;
	}
	/*echo "<pre>";
	print_r($_POST);
	exit();*/
	$ep = new EditProductClass($_POST, $_SESSION['clubKey']);
	$ep->editProduct();
}	
?>

<?php if (isset($_SESSION['notice'])) { ?>
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell small-12 medium-9 large-9 text-center">
				<div class="callout medium-top-margin font-condensed case-upper font-18 notice color-text-primary color-bg-transparent wow pulse" data-closable>
					<?= $_SESSION['notice'] ?>
					<?php unset($_SESSION['notice']); ?>
					<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php
$category = new CategoryClass('');
$category = $category->category();

$club = new ClubClass('');
$club = $club->club(); 
?>
<form id="product" action="<?= site_url('edit-product/' . $sp->id ) ?>" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="page-title bottom-border extra-top-padding extra-bottom-padding">
		<div class="grid-container">
			<div class="cell text-center">
				<?php the_title('<h1 class="wow slideInUp font-35 font-headline case-upper line-height no-margin">', '</h1>'); ?>
			</div>
		</div>
		<div class="grid-container">
			<div class="grid-x align-center">
				<div class="cell small-12 medium-9 large-9 extra-top-margin">
					<div id="cc" class="grid-x grid-padding-x ">
						<div class="cell samll-12 medium-6 large-6">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">PRODUKT</h4>
							<select name="category" id="category-id" required="">
								<option disabled="" value="" selected="" hidden="">VÆLG KATEGORI</option>
								<?php foreach ($category as $key => $value) { ?>
									<?php if ($sp->category_id == $value['id']) { ?>
										<option value="<?= $value['id'] ?>" selected><?= $value['name'] ?></option>
									<?php } else { ?>
										<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="cell samll-12 medium-6 large-6">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">AFSENDER</h4>
							<select name="club" id="club-id" required="">
								<option disabled="" value="" selected="" hidden="">VÆLG FIRMA</option>
								<?php foreach ($club as $key => $value) { ?>
									<?php if ($sp->club_id == $value['id']) { ?>
										<option value="<?= $value['id'] ?>" selected><?= $value['name'] ?></option>
									<?php } else { ?>
										<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="create-product extra-top-margin extra-bottom-margin">
		<div class="grid-container" data-equalizer data-equalize-on="medium" id="r-form">
			<div id="product-grid" class="grid-x grid-padding-x" method="post">
				<div class="cell small-12 medium-6 large-4">
					<div class="selling" data-equalizer-watch="r-form">
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">GENEREL INFO</h4>
						<div class="form-label-group">
						<p class="condensed">UPLOAD BILLEDE</p>
						<ul class="p-thumb">
							<?php if($product_images){ foreach ($product_images as $key => $val) {	?>
							<li class="relative">
								<img src="<?=$url->baseUrl().''.$val->file_path ?>" alt="<?= $sp->title ?>">
								<a class="trash editproduct absolute contain center-center top color-bg-white"></a>
							</li>
							<!-- <input type="hidden" name="existence_img[]" value="<?= $val->file_path ?>"> -->
							<?php } } ?>
						</ul>
							<!-- <button id="up-logo" type="button" class="button hollow secondary expanded">VÆLG FIL</button> -->
							<input type="file" name="product_img[]" id="profile-btn" class="outline">
							<div id=filesContainer class="form-label-group"></div>
							<button id="addFile" class="button hollow secondary expanded bold"> Tilføj ekstra billede </button>
						</div>
						<div class="form-label-group">
							<input type="text" id="productOfferDate" name="productOfferDate" class="form-control required" value="<?= isset($_POST['productOfferDate']) ? $_POST['productOfferDate'] : $sp->offer_date ?>" placeholder="Dato / periode" required>
							<label for="productOfferDate">Dato / periode</label>
						</div>
						<div class="form-label-group">
							<input type="text" id="productExpireDate" name="productExpireDate" class="form-control" value="<?= isset($_POST['productExpireDate']) ? $_POST['productExpireDate'] : $sp->book_by_date ?>" placeholder="Bestil inden">
							<label for="productExpireDate">Bestil inden</label>
						</div>
						
					
					<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">ANTAL</h4>
					<div class="form-label-group">
						<input type="text" id="productQuantity" name="productQuantity" class="form-control required" placeholder="STK." value="<?= isset($_POST['productQuantity']) ? $_POST['productQuantity'] : $sp->total_number ?>"	autocomplete="off" required>
						<label for="productQuantity">STK.</label>
					</div>
					<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">ANGIV POINT</h4>
					<div class="form-label-group">
						<select class="form-control form-control-lg" id="productPrice" name="productPrice">
							<option disabled="" value="" selected="" hidden="">VÆLG Point</option>
							<option value="10" <?= ($sp->initial_point == 10) ? 'selected' : '' ?>>10 POINTS</option>
							<option value="20" <?= ($sp->initial_point == 20) ? 'selected' : '' ?>>20 POINTS</option>
							<option value="30" <?= ($sp->initial_point == 30) ? 'selected' : '' ?>>30 POINTS</option>
							<option value="40" <?= ($sp->initial_point == 40) ? 'selected' : '' ?>>40 POINTS</option>
							<option value="50" <?= ($sp->initial_point == 50) ? 'selected' : '' ?>>50 POINTS</option>
							<option value="60" <?= ($sp->initial_point == 60) ? 'selected' : '' ?>>60 POINTS</option>
							<option value="70" <?= ($sp->initial_point == 70) ? 'selected' : '' ?>>70 POINTS</option>
							<option value="80" <?= ($sp->initial_point == 80) ? 'selected' : '' ?>>80 POINTS</option>
							<option value="90" <?= ($sp->initial_point == 90) ? 'selected' : '' ?>>90 POINTS</option>
							<option value="100" <?= ($sp->initial_point == 100) ? 'selected' : '' ?>>100 POINTS</option>
						</select>
						<!-- <input type="number" id="productPrice" name="productPrice" class="form-control required" placeholder="ANGIV PRIS" value="<?= isset($_POST['productPrice']) ? $_POST['productPrice'] : $sp->initial_point ?>"	autocomplete="off" required>
						<label for="productPrice">PRIS</label> -->
					</div>
				</div>
			</div>
			<div class="cell small-12 medium-6 large-4">
				<div class="upload-logo" data-equalizer-watch="r-form">
					<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">VISNING PÅ FORSIDE</h4>
					<div class="form-label-group">
							<input type="text" id="productProductTitle" name="productProductTitle" class="form-control required" value="<?= isset($_POST['productProductTitle']) ? $_POST['productProductTitle'] : $sp->title ?>" placeholder="PRODUKT NAVN" autocomplete="off" required>
							<label for="productProductTitle">PRODUKT NAVN</label>
						</div>
					<div class="form-label-group">
						<textarea rows="14" cols="50" id="productShortDescription" name="productShortDescription" class="form-control" placeholder="KORT BESKRIVENDE TEKST"><?= isset($_POST['productShortDescription']) ? $_POST['productShortDescription'] : $sp->short_description ?></textarea>
						<label class="form-check-label" for="productShortDescription">KORT BESKRIVENDE TEKST</label>
					</div>
					<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">VISNING PÅ UNDERSIDE</h4>
					<div class="form-label-group">
						<input type="text" id="productHeadline" name="productHeadline" class="form-control required" value="<?= isset($_POST['productHeadline']) ? $_POST['productHeadline'] : $sp->headline ?>" placeholder="Overskrift" autocomplete="off" required>
						<label for="productHeadline">Overskrift</label>
					</div>
					<div class="upload-logo" data-equalizer-watch="r-form">
						<div class="form-label-group">
							<textarea rows="14" cols="50" id="productDescription" name="productDescription" class="form-control" placeholder="BESKRIVENDE TEKST"><?= isset($_POST['productDescription']) ? $_POST['productDescription'] : $sp->description ?></textarea>
							<label class="form-check-label" for="productDescription">BESKRIVENDE TEKST</label>
						</div>
					</div>
				</div>
			</div>
			<div class="cell small-12 medium-6 large-4">
				<div class="seller relative" data-equalizer-watch="r-form">
					<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">SÆLGER</h4>
					<div class="form-label-group">
						<input type="text" id="productSellerName" name="productSellerName" class="form-control required" value="<?= isset($_POST['productSellerName']) ? $_POST['productSellerName'] : $sp->seller_club ?>" placeholder="FIRMA" autocomplete="off" required>
						<label for="productSellerName">FIRMA</label>
					</div>
					<div class="form-label-group">
						<input type="text" id="productSellerAddress" name="productSellerAddress" class="form-control" value="<?= isset($_POST['productSellerAddress']) ? $_POST['productSellerAddress'] : $sp->seller_address ?>" placeholder="ADRESSE">
						<label for="productSellerAddress">ADRESSE</label>
					</div>
					<div class="grid-x grid-margin-x">
						<div class="cell small-12 medium-4 large-4">
							<div class="form-label-group">
								<input type="text" id="productSellerPost" name="productSellerPost" class="form-control" value="<?= isset($_POST['productSellerPost']) ? $_POST['productSellerPost'] : $sp->seller_postcode ?>" placeholder="POST NR." autocomplete="off">
								<label for="productSellerPost">POST NR.</label>
							</div>
						</div>
						<div class="cell small-12 medium-8 large-8"><div class="form-label-group">
							<input type="text" id="productSellerCity" name="productSellerCity" class="form-control" placeholder="BY" value="<?= isset($_POST['productSellerCity']) ? $_POST['productSellerCity'] : $sp->seller_city  ?>" autocomplete="off">
							<label for="productSellerCity">BY</label>
						</div>
					</div>
				</div>
				<div class="form-label-group">
						<input type="text" id="productContactPerson" name="productContactPerson" class="form-control required" value="<?= isset($_POST['productContactPerson']) ? $_POST['productContactPerson'] : $sp->contact_person ?>" placeholder="Kontaktperson" required>
						<label for="productContactPerson">Kontaktperson</label>
					</div>
				<div class="form-label-group">
					<input type="email" id="productSellerEmail" name="productSellerEmail" class="form-control required" value="<?= isset($_POST['productSellerEmail']) ? $_POST['productSellerEmail'] : $sp->seller_email ?>" placeholder="Email" required>
					<label for="productSellerEmail">Email</label>
				</div>
				<div class="form-label-group">
					<input type="text" id="productSellerTelephone" name="productSellerTelephone" class="form-control" value="<?= isset($_POST['productSellerTelephone']) ? $_POST['productSellerTelephone'] : $sp->seller_telephone ?>" placeholder="TLF NR.">
					<label for="productSellerTelephone">TLF NR.</label>
				</div>
		
				<input type="hidden" name="p_e_id" value="<?= $sp->id ?>">
				<input id="create" class="absolute bottom no-margin font-18 font-condensed button expanded color-bg-primary" type="submit" name="btnEditProduct" value="GEM">
			</div>
		</div>
	</div>
</div>
</div>
</form>
<script>
	var user_id = '<?= $_SESSION['clubKey']->id ?>';
</script>