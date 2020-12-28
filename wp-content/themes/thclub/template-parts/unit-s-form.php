<?php
$cw = get_sub_field('sf_cw');
if ($cw) {
  $w = get_sub_field('sf_w');
  $wc = new WrapperClass($w, ''); 
}

$preCategory = isset($_GET['category']) ? $_GET['category'] : '';
$preClub = isset($_GET['club']) ? $_GET['club'] : '';

$pc = new ParamClass('', '');
$param = $pc->params();

$category = new CategoryClass('');
$category = $category->category();

$club = new ClubClass('');
$club = $club->club(); 
?>

<div class="sf-area <?= ($cw) ? $wc->marginPadding() : ''?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
	<form action="<?= get_the_permalink() ?>" method="get" id="search_form_id" class="grid-container <?= ($cw) ? $wc->wrapperSize() : '' ?>">
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-7 large-7 cell no-margin">
				<div class="wow fadeIn input-group no-margin ">
					<span class="input-group-label color-bg-transparent no-border">SØG HER</span>
					<input type="text" id="title" name="title" value="<?= isset($_GET['title']) ? $_GET['title'] : '' ?>" placeholder="SØG HER">
						<!--<label for="title">SØG HER</label>-->
						<div class="input-group-button">
						<input type="button" name="btnSearch" id="btnSearch" class="button sr-btn contain center-center no-repeat" value="SØG">
					</div>
				</div>
			</div>
			<div class="small-12 medium-5 large-5 cell no-margin">
				<div class="grid-x grid-padding-x">
					<div class="cell samll-12 medium-6 large-6">
 							<select name="category" id="category-id">
								<option disabled="" value="" selected="" hidden="">VÆLG KATEGORI</option>
								<?php foreach ($category as $key => $value) { ?>
									<?php if (in_array($value['id'], $param['category'])) { ?>
										<option value="<?= $value['id'] ?>" <?= (isset($_GET['category']) && ($_GET['category'] == $value['id'])) ? 'selected' : '' ?>><?= $value['name'] ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="cell samll-12 medium-6 large-6">
 							<select name="club" id="club-id">
								<option disabled="" value="" selected="" hidden="">VÆLG FIRMA</option>
								<?php foreach ($club as $key => $value) { ?>
									<?php if (in_array($value['id'], $param['club'])) { ?>
										<option value="<?= $value['id'] ?>" <?= (isset($_GET['club']) && ($_GET['club'] == $value['id'])) ? 'selected' : '' ?>><?= $value['name'] ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
 				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	var form = document.getElementById("search_form_id");
	document.getElementById("btnSearch").addEventListener("click", function () {
	  form.submit();
	});
	document.getElementById("category-id").addEventListener("change", function () {
	  form.submit();
	});
	document.getElementById("club-id").addEventListener("change", function () {
	  form.submit();
	});
</script>