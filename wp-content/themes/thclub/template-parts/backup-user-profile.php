<?php
if (isset($_SESSION['clubKey'])){
	$u = new SingleUserClass($_SESSION['clubKey']);
	$user = $u->user();
	if ($_SESSION['clubKey']->id == $user->id) {
		$companyName = ($user->name) ? $user->name : '';
		$cvr = ($user->profile->cvr_number) ? $user->profile->cvr_number : '';
		$email = ($user->email) ? $user->email : '';
		$telephone = ($user->profile->telephone) ? $user->profile->telephone : '';
		$address = ($user->profile->address) ? $user->profile->address : '';
		$post = ($user->profile->post_code) ? $user->profile->post_code : '';
		$city = ($user->profile->city) ? $user->profile->city : '';
		$description = ($user->profile->short_description) ? $user->profile->short_description : '';
	}
} 
if ( isset($_POST['btnEditProfile']) ) { 
	
	$_POST['file_path'] = $_FILES['profile_picture'];

?>

<div class="grid-container">
	<div class="grid-x align-center">
		<div class="cell small-12 medium-9 large-9 text-center">
			<div class="callout success" data-closable>
				<?php
					$p = new EditProfileClass($_POST, $_SESSION['clubKey']);
					$p->profile();
				?>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
</div>
<?php }	?>
<div class="user-register extra-top-margin extra-bottom-margin">
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell small-12 medium-9 large-9">
				<form id="user" action="<?= site_url('/my-profile') ?>"  class="grid-x grid-padding-x" method="post" autocomplete="off"  enctype="multipart/form-data">
					<div class="cell small-12 medium-6 large-6">
						<div class="selling">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">FIRMANAVN</h4>
							<div class="form-label-group">
								<input type="text" id="txtCompanyName" name="txtCompanyName" class="form-control" value="<?= $companyName ?>" placeholder="FIRMANAVN" autocomplete="off">
								<label for="txtCompanyName">FIRMANAVN</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtCVR" name="txtCVR" class="form-control" value="<?= $cvr ?>" placeholder="CVR">
								<label for="txtCVR">CVR</label>
							</div>
						</div>
						<div class="contact">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">KONTAKTOPLYSNINGER</h4>
							<p>EMAIL ADRESSE: <?= $email ?></p>

							<!-- <div class="form-label-group">
								<input type="text" id="txtEmail" name="txtEmail" class="form-control" placeholder="EMAIL ADRESSE" value="<?= $email ?>" autocomplete="off" readonly>
								<label for="txtEmail">EMAIL ADRESSE</label>
							</div> -->
							<div class="form-label-group">
								<input type="text" id="txtTelephone" name="txtTelephone" class="form-control" value="<?= $telephone ?>" placeholder="TLF NR.">
								<label for="txtTelephone">TLF NR.</label>
							</div>
						</div>
						<div class="address">
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">ADRESSE</h4>
							<div class="form-label-group">
								<input type="text" id="txtAddress" name="txtAddress" class="form-control" value="<?= $address ?>" placeholder="ADRESSE">
								<label for="txtAddress">ADRESSE</label>
							</div>
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 medium-4 large-4">
									<div class="form-label-group">
										<input type="text" id="txtPost" name="txtPost" class="form-control" value="<?= $post ?>" placeholder="POST NR." autocomplete="off">
										<label for="txtPost">POST NR.</label>
									</div>
								</div>
								<div class="cell small-12 medium-8 large-8"><div class="form-label-group">
									<input type="text" id="txtCity" name="txtCity" class="form-control" placeholder="BY" value="<?= $city ?>" autocomplete="off">
									<label for="txtCity">BY</label>
								</div>
							</div>
						</div>
					</div>
					<div class="login">
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">ADGANGSKODE</h4>
						<div class="form-label-group">
							<input type="password" id="txtPassword" name="txtPassword" class="form-control" value="" placeholder="NY ADGANGSKODE" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
							<label for="txtPassword">NY ADGANGSKODE</label>
						</div>
						<div class="form-label-group">
							<input type="password" id="txtConfirmPassword" name="txtConfirmPassword" class="form-control" value="" placeholder="BEKRÆFT NY ADGANGSKODE" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
							<label for="txtConfirmPassword">BEKRÆFT NY ADGANGSKODE</label>
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-6 large-6">
					<div class="upload-logo">
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">UPLOAD LOGO</h4>
						<div class="form-label-group">
							<input type="hidden" name="profile_picture_full_path">
							<button id="up-logo" type="button" class="button hollow secondary expanded">VÆLG FIL</button>
							<input type="file" name="profile_picture" id="profile-btn">
						</div>
						<div class="form-label-group">
							<textarea rows="6" cols="50" id="txtDescription" name="txtDescription" class="form-control" placeholder="OM OS..."><?= $description ?></textarea>
							<label class="form-check-label" for="txtDescription">OM OS...</label>
						</div>
					</div>
					<div class="point large-top-margin">
						<input id="editprofile" class="button expanded color-bg-primary" type="submit" name="btnEditProfile" value="OPDATER">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>

<script>
var password = document.getElementById("txtPassword")
  , confirm_password = document.getElementById("txtConfirmPassword");

function validatePassword() {
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>