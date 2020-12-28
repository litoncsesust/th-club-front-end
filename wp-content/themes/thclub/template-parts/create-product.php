<?php
if ( isset($_POST['btnCreateProduct']) ) {
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
$cr = new CreateProductClass($_POST, $_SESSION['clubKey']);
$cr->createProduct();
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
<form id="product" action="<?= get_the_permalink() ?>" method="post" autocomplete="off" enctype="multipart/form-data">
	<div class="page-title bottom-border high-top-padding high-bottom-padding">
		<div class="grid-container">
			<div class="cell text-center">
				<?php the_title('<h1 class="wow slideInUp font-35 font-headline case-upper line-height no-margin">', '</h1>'); ?>
			</div>
		</div>
		<div class="grid-container">
			<div class="grid-x align-center">
				<div class="cell small-12 medium-9 large-9 high-top-margin">
					<div id="cc" class="grid-x grid-padding-x ">
						<div class="cell samll-12 medium-6 large-6">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">PRODUKT</h4>
							<select name="category" id="category-id" required="">
								<option disabled="" value="" selected="" hidden="">VÆLG KATEGORI</option>
								<?php foreach ($category as $key => $value) { ?>
								<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="cell samll-12 medium-6 large-6">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">AFSENDER</h4>
							<select name="club" id="club-id" required="">
								<option disabled="" value="" selected="" hidden="">VÆLG FIRMA</option>
								<?php foreach ($club as $key => $value) { ?>
								<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="create-product large-top-padding large-bottom-padding">
		<div class="grid-container" data-equalizer data-equalize-on="medium" id="r-form">
			<div id="product-grid" class="grid-x grid-padding-x" method="post">
				<div class="cell small-12 medium-6 large-4">
					<div class="selling" data-equalizer-watch="r-form">
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">GENEREL INFO</h4>
						<div class="form-label-group">
							<p class="condensed">UPLOAD BILLEDE</p>
							<!-- <button id="up-logo" type="button" class="button hollow secondary expanded">VÆLG FIL</button> -->
							<input type="file" name="product_img[]" id="profile-btn" class="outline">
							<div id=filesContainer class="form-label-group"></div>
							<button id="addFile" class="button hollow secondary expanded bold"> Tilføj ekstra billede </button>
						</div>
						<div class="form-label-group">
							<input type="text" id="productOfferDate" name="productOfferDate" class="form-control required" value="<?= isset($_POST['productOfferDate']) ? $_POST['productOfferDate'] : '' ?>" placeholder="Dato / periode" required>
							<label for="productOfferDate">Dato / periode</label>
						</div>
						<div class="form-label-group">
							<input type="text" id="productExpireDate" name="productExpireDate" class="form-control" value="<?= isset($_POST['productExpireDate']) ? $_POST['productExpireDate'] : '' ?>" placeholder="Bestil inden">
							<label for="productExpireDate">Bestil inden</label>
						</div>
						<div class="grid-x grid-margin-x">
						</div>
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">ANTAL</h4>
						<div class="form-label-group">
							<input type="text" id="productQuantity" name="productQuantity" class="form-control required" placeholder="STK." value="<?= isset($_POST['productQuantity']) ? $_POST['productQuantity'] : '' ?>"	autocomplete="off" required>
							<label for="productQuantity">STK.</label>
						</div>
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">ANGIV POINT</h4>
						<div class="form-label-group">
							<select class="form-control form-control-lg" id="productPrice" name="productPrice">
								<option disabled="" value="" selected="" hidden="">VÆLG Point</option>
								<option value="10" <?= ($_POST['productPrice'] == 10) ? 'selected' : '' ?>>10 POINTS</option>
								<option value="20" <?= ($_POST['productPrice'] == 20) ? 'selected' : '' ?>>20 POINTS</option>
								<option value="30" <?= ($_POST['productPrice'] == 30) ? 'selected' : '' ?>>30 POINTS</option>
								<option value="40" <?= ($_POST['productPrice'] == 40) ? 'selected' : '' ?>>40 POINTS</option>
								<option value="50" <?= ($_POST['productPrice'] == 50) ? 'selected' : '' ?>>50 POINTS</option>
								<option value="60" <?= ($_POST['productPrice'] == 60) ? 'selected' : '' ?>>60 POINTS</option>
								<option value="70" <?= ($_POST['productPrice'] == 70) ? 'selected' : '' ?>>70 POINTS</option>
								<option value="80" <?= ($_POST['productPrice'] == 80) ? 'selected' : '' ?>>80 POINTS</option>
								<option value="90" <?= ($_POST['productPrice'] == 90) ? 'selected' : '' ?>>90 POINTS</option>
								<option value="100" <?= ($_POST['productPrice'] == 100) ? 'selected' : '' ?>>100 POINTS</option>
							</select>
							<!-- <input type="number" id="productPrice" name="productPrice" class="form-control required" placeholder="ANGIV PRIS" value="<?= isset($_POST['productPrice']) ? $_POST['productPrice'] : '' ?>"	autocomplete="off" required>
							<label for="productPrice">PRIS</label> -->
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-6 large-4">
					<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">VISNING PÅ FORSIDE</h4>
					<div class="form-label-group">
						<input type="text" id="productProductTitle" name="productProductTitle" class="form-control required" value="<?= isset($_POST['productProductTitle']) ? $_POST['productProductTitle'] : '' ?>" placeholder="PRODUKT NAVN" autocomplete="off" required>
						<label for="productProductTitle">PRODUKT NAVN</label>
					</div>
					<div class="form-label-group">
						<textarea rows="14" cols="10" id="productShortDescription" name="productShortDescription" class="form-control" placeholder="Kort beskrivende tekst"><?= isset($_POST['productShortDescription']) ? $_POST['productShortDescription'] : '' ?></textarea>
						<label class="form-check-label" for="productShortDescription">Kort beskrivende tekst</label>
					</div>
					<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">VISNING PÅ UNDERSIDE</h4>
					<div class="form-label-group">
						<input type="text" id="productHeadline" name="productHeadline" class="form-control required" value="<?= isset($_POST['productHeadline']) ? $_POST['productHeadline'] : '' ?>" placeholder="Overskrift" autocomplete="off" required>
						<label for="productHeadline">Overskrift</label>
					</div>
					<div class="upload-logo" data-equalizer-watch="r-form">
						<div class="form-label-group">
							<textarea rows="14" cols="50" id="productDescription" name="productDescription" class="form-control" placeholder="BESKRIVENDE TEKST"><?= isset($_POST['productDescription']) ? $_POST['productDescription'] : '' ?></textarea>
							<label class="form-check-label" for="productDescription">BESKRIVENDE TEKST</label>
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-6 large-4">
					<div class="seller relative" data-equalizer-watch="r-form">
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">SÆLGER</h4>
						<div class="form-label-group">
							<input type="text" id="productSellerName" name="productSellerName" class="form-control required" value="<?= isset($_POST['productSellerName']) ? $_POST['productSellerName'] : '' ?>" placeholder="FIRMA" autocomplete="off" required>
							<label for="productSellerName">FIRMA</label>
						</div>
						<div class="form-label-group">
							<input type="text" id="productSellerAddress" name="productSellerAddress" class="form-control" value="<?= isset($_POST['productSellerAddress']) ? $_POST['productSellerAddress'] : '' ?>" placeholder="ADRESSE">
							<label for="productSellerAddress">ADRESSE</label>
						</div>
						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-4 large-4">
								<div class="form-label-group">
									<input type="text" id="productSellerPost" name="productSellerPost" class="form-control" value="<?= isset($_POST['productSellerPost']) ? $_POST['productSellerPost'] : '' ?>" placeholder="POST NR." autocomplete="off">
									<label for="productSellerPost">POST NR.</label>
								</div>
							</div>
							<div class="cell small-12 medium-8 large-8"><div class="form-label-group">
								<input type="text" id="productSellerCity" name="productSellerCity" class="form-control" placeholder="BY" value="<?= isset($_POST['productSellerCity']) ? $_POST['productSellerCity'] : '' ?>" autocomplete="off">
								<label for="productSellerCity">BY</label>
							</div>
						</div>
					</div>
					<div class="form-label-group">
						<input type="text" id="productContactPerson" name="productContactPerson" class="form-control required" value="<?= isset($_POST['productContactPerson']) ? $_POST['productContactPerson'] : '' ?>" placeholder="Kontaktperson" required>
						<label for="productContactPerson">Kontaktperson</label>
					</div>
					<div class="form-label-group">
						<input type="email" id="productSellerEmail" name="productSellerEmail" class="form-control required" value="<?= isset($_POST['productSellerEmail']) ? $_POST['productSellerEmail'] : '' ?>" placeholder="Email" required>
						<label for="productSellerEmail">Email</label>
					</div>
					<div class="form-label-group">
						<input type="text" id="productSellerTelephone" name="productSellerTelephone" class="form-control" value="<?= isset($_POST['productSellerTelephone']) ? $_POST['productSellerTelephone'] : '' ?>" placeholder="TLF NR.">
						<label for="productSellerTelephone">TLF NR.</label>
					</div>
					<input id="create" class="bottom no-margin font-18 font-condensed button expanded color-bg-primary" type="submit" name="btnCreateProduct" value="OPRET">
				</div>
			</div>
		</div>
	</div>
</div>
</form>