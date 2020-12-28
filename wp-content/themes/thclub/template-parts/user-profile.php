<?php
$url = new BaseClass();
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
	$p_picture = ($user->profile->profile_picture) ? $user->profile->profile_picture : '';
	$description = ($user->profile->short_description) ? $user->profile->short_description : '';
	$points = ($user->profile->point) ? $user->profile->point : '';
	$point_expire_date = ($user->profile->point_expire_date) ? $user->profile->point_expire_date : '';
	}
	}
	if ( isset($_POST['btnEditProfile']) ) {
	if($_FILES['profile_picture']['tmp_name']){
	$filename  = $_FILES['profile_picture']['tmp_name'];
	$handle    = fopen($filename, "r");
	$data      = fread($handle, filesize($filename));
	$_POST['file_path'] = base64_encode($data);
	$_POST['file_name'] = $_FILES['profile_picture']['name'];
	}
	$p = new EditProfileClass($_POST, $_SESSION['clubKey']);
	$p->profile();
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
	<div class="user-register extra-bottom-margin">
		<div class="grid-container">
			<div class="grid-x align-center" data-equalizer data-equalize-on="medium" id="c-form">
				<div class="cell small-12 medium-9 large-9">
					<form id="user" action="<?= site_url('/my-profile') ?>"  class="grid-x grid-padding-x" method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="cell small-12 medium-6 large-6" data-equalizer-watch="c-form">
							<div class="form-label-group">
								<input type="text" id="txtCompanyName" name="txtCompanyName" class="form-control" value="<?= $companyName ?>" placeholder="FIRMANAVN" autocomplete="off">
								<label for="txtCompanyName">FIRMANAVN</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtCVR" name="txtCVR" class="form-control" value="<?= $cvr ?>" placeholder="CVR">
								<label for="txtCVR">CVR</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtEmail" name="txtEmail" class="form-control" value="<?= $email ?>" placeholder="EMAIL ADRESSE">
								<label for="txtEmail">EMAIL ADRESSE</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtTelephone" name="txtTelephone" class="form-control" value="<?= $telephone ?>" placeholder="TELEFONNUMMER">
								<label for="txtTelephone">TELEFONNUMMER</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="txtAddress" name="txtAddress" class="form-control" value="<?= $address ?>" placeholder="ADRESSE">
								<label for="txtAddress">ADRESSE</label>
							</div>
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 medium-6 large-6">
									<div class="form-label-group">
										<input type="text" id="txtPost" name="txtPost" class="form-control" value="<?= $post ?>" placeholder="POST NR." autocomplete="off">
										<label for="txtPost">POST NUMMER</label>
									</div>
								</div>
								<div class="cell small-12 medium-6 large-6"><div class="form-label-group">
									<input type="text" id="txtCity" name="txtCity" class="form-control" placeholder="BY" value="<?= $city ?>" autocomplete="off">
									<label for="txtCity">BY</label>
								</div>
							</div>
						</div>
						<div class="form-label-group">
							<input type="password" id="txtPassword" name="txtPassword" class="form-control" value="" placeholder="NY ADGANGSKODE" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
							<label for="txtPassword">NY ADGANGSKODE</label>
						</div>
						<div class="form-label-group no-margin">
							<input type="password" id="txtConfirmPassword" name="txtConfirmPassword" class="form-control no-margin" value="" placeholder="BEKRÆFT NY ADGANGSKODE" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
							<label for="txtConfirmPassword">BEKRÆFT NY ADGANGSKODE</label>
						</div>
						<div class="high-top-margin text-center">
							<input id="editprofile" class="no-margin font-condensed button expanded color-bg-primary" type="submit" name="btnEditProfile" value="OPDATER">
						</div>
					</div>
					<div class="cell small-12 medium-6 large-6" >
						<div class="upload-logo relative hide" data-equalizer-watch="c-form">
							<?php if ($p_picture) { ?>
							<img src="<?= $url->baseUrl() . $p_picture ?>" alt="<?= $companyName ?>">
							<?php } ?>
							<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin"><?= ($p_picture) ? 'CHANGE' : 'UPLOAD' ?> LOGO</h4>
							<div class="box">
								<input type="hidden" name="profile_picture_full_path">
								<input type="file" name="profile_picture" id="profile-btn" class="inputfile" />
								<label for="profile-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> 
								<span><?= ($p_picture) ? 'SKIFT' : 'VÆLG' ?> FIL&hellip;</span>
							</label>
						</div>
						<!-- <div class="form-label-group">
							<textarea rows="6" cols="50" id="txtDescription" name="txtDescription" class="form-control" placeholder="OM OS..."><?= $description ?></textarea>
							<label class="form-check-label" for="txtDescription">OM OS...</label>
						</div>
						<h4 class="font-condensed color-text-darkgray font-18 no-margin small-bottom-margin">POINTS: <?= $points ?></h4> -->
					</div>
					<div class="color-bg-primary text-center medium-padding">
						<?php if(!empty($_SESSION['clubKey'])) { ?>
						<p class="text-center text-white font-headline font-18 no-margin">Dine point: <?= $points ? str_replace(",", ".", number_format($points)) : '' ?></p>
						<?php
						$current_date = date('Y-m-d H:i:s');
						$current_date = explode(" ", $current_date)[0];
						$point_expire_date = explode(" ", $point_expire_date)[0];
						$point_expire_date = ($point_expire_date === '0000-00-00') ? $current_date : $point_expire_date;
						?>
						<p class="text-center text-white font-headline font-18 no-margin">Udløbsdato for point: <?= date('j. F Y',strtotime($point_expire_date)) ?></p>
						<?php } ?>
						<a class="button medium-top-margin color-bg-secondry btn-color-bg-white text-secondry" href="mailto:bs@aarhushaandbold.dk">KLIK HER FOR AT FÅ FLERE POINT</a>
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