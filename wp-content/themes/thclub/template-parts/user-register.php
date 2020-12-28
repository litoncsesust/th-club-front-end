<?php if ( isset($_POST['btnRegister']) ) { 
	$filename  = $_FILES['profile_picture']['tmp_name'];
	if ($filename) {
		$handle    = fopen($filename, "r");
		$data      = fread($handle, filesize($filename));
		$_POST['file_path'] = base64_encode($data);
		$_POST['file_name'] = $_FILES['profile_picture']['name'];
	}	

	$r = new RegisterClass($_POST);
	$r->register();
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
<?php }	?>

<div class="user-register extra-top-margin extra-bottom-margin">
	<div class="grid-container" data-equalizer data-equalize-on="medium" id="r-form">
		<div class="grid-x align-center">
			<div class="cell small-12 medium-9 large-9">
				<form id="user" action="<?= get_the_permalink() ?>"  class="grid-x grid-padding-x" method="post" autocomplete="off"  enctype="multipart/form-data">
					<div class="cell small-12 medium-6 large-6">
						<div class="selling" data-equalizer-watch="r-form">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">SÆLGER</h4>
							<div class="form-label-group">
								<input type="text" id="txtCompanyName" name="txtCompanyName" class="form-control" value="<?= isset($_POST['txtCompanyName']) ? $_POST['txtCompanyName'] : '' ?>" placeholder="FIRMANAVN" autocomplete="off">
								<label for="txtCompanyName">FIRMANAVN</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtTelephone" name="txtTelephone" class="form-control" value="<?= isset($_POST['txtTelephone']) ? $_POST['txtTelephone'] : '' ?>" placeholder="TLF NR.">
								<label for="txtTelephone">TLF NR.</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtCVR" name="txtCVR" class="form-control" value="<?= isset($_POST['txtCVR']) ? $_POST['txtCVR'] : '' ?>" placeholder="CVR">
								<label for="txtCVR">CVR</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtAddress" name="txtAddress" class="form-control" value="<?= isset($_POST['txtAddress']) ? $_POST['txtAddress'] : '' ?>" placeholder="ADRESSE">
								<label for="txtAddress">ADRESSE</label>
							</div>
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 medium-4 large-4">
									<div class="form-label-group">
										<input type="text" id="txtPost" name="txtPost" class="form-control" value="<?= isset($_POST['txtPost']) ? $_POST['txtPost'] : '' ?>" placeholder="POST NR." autocomplete="off">
										<label for="txtPost">POST NR.</label>
									</div>
								</div>
								<div class="cell small-12 medium-8 large-8"><div class="form-label-group">
									<input type="text" id="txtCity" name="txtCity" class="form-control" placeholder="BY" value="<?= isset($_POST['txtCity']) ? $_POST['txtCity'] : '' ?>" autocomplete="off">
									<label for="txtCity">BY</label>
								</div>
							</div>
						</div>
					</div>
					<div class="login large-top-margin">
						<h4 class="text-center font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">LOGIN</h4>
						<div class="form-label-group">
							<input type="text" id="txtEmail" name="txtEmail" class="form-control" placeholder="EMAIL ADRESSE" value="<?= isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '' ?>"	autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
							<label for="txtEmail">EMAIL ADRESSE</label>
						</div>
						<div class="form-label-group">
							<input type="password" id="txtPassword" name="txtPassword" class="form-control" value="" placeholder="ADGANGSKODE" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
							<label for="txtPassword">ADGANGSKODE</label>
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-6 large-6">
					<div class="upload-logo" data-equalizer-watch="r-form">
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">UPLOAD LOGO</h4>
						<div class="box">
							<input type="hidden" name="profile_picture_full_path">
							<input type="file" name="profile_picture" id="profile-btn" class="inputfile" data-multiple-caption="{count} files selected" multiple />
							<label for="profile-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>
							<span>VÆLG FIL&hellip;</span>
						</label>
						</div>
						<div class="form-label-group">
							<textarea rows="6" cols="50" id="txtDescription" name="txtDescription" class="form-control" placeholder="OM OS..."><?= isset($_POST['txtDescription']) ? $_POST['txtDescription'] : '' ?></textarea>
							<label class="form-check-label" for="txtDescription">OM OS...</label>
						</div>
					</div>
					<div class="point large-top-margin">
						<h4 class="text-center font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">ANTAL POINT</h4>
						<div class="form-label-group">
							<select class="form-control form-control-lg" id="user_point" name="user_point">
								<option disabled="" value="" selected="" hidden="">VÆLG POINT</option>
								<option value="500">500 points</option>
								<option value="1000">1000 points</option>
								<option value="1500">1500 points</option>
								<option value="2000">2000 points</option>
								<option value="2500">2500 points</option>
							</select>
						</div>
						<input id="register" class="button expanded color-bg-primary" type="submit" name="btnRegister" value="OPRET">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>