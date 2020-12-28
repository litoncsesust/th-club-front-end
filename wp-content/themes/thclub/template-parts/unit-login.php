<?php
$curl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
if ( isset($_POST['btnLogin']) ) {
	$l = new LoginClass($_POST);
	$r = $l->login();
	if (isset($r->status)) {
		if ($r->status == 'success') {
			$_SESSION['clubKey'] = $r->result;
			$_SESSION['notice'] = '<p class="font-condensed color-text-darkgray font-20 no-margin">Velkommen '. $r->result->name . '<br/>Du har ' .  $r->result->point .' point til rådighed.</p>';
			wp_redirect($curl);
			exit;
		} 
	} else {
		$_SESSION['notice'] = $r;
		wp_redirect($curl);
		exit;
	}
}
?>

<div class="reveal" id="loginForm" data-reveal>
	<form class="log-in-form" action="<?= $curl ?>" method="post" autocomplete="off">
 		<h4 class="text-center color-text-darkgray font-35 medium-bottom-margin">LOG IND</h4>
		<div class="form-label-group">
			<input type="text" id="loginEmail" name="loginEmail" class="form-control" value="" placeholder="EMAIL ADRESSE" value="<?= isset($_POST['loginEmail']) ? $_POST['loginEmail'] : '' ?>"	autocomplete="off" required>
			<label for="loginEmail">EMAIL ADRESSE</label>
		</div>
		<div class="form-label-group">
			<input type="password" id="loginPassword" name="loginPassword" class="form-control" value="" placeholder="ADGANGSKODE" autocomplete="off" required>
			<label for="loginPassword">ADGANGSKODE</label>
		</div>
		<input id="login" class="button font-condensed expanded color-bg-primary" type="submit" name="btnLogin" value="LOG IN">
	 	<div class="form-label-group high-top-margin">
	 		<p class="font-condensed font-16 text-center">Opret dig som bruger<br/> og bliv sponsor i Århus Håndbold</p>
	 	</div>
	 	<a class="button expanded color-bg-black" href="mailto:bs@aarhushaandbold.dk">OPRET DIG SOM BRUGER</a>
 	</form>
	<button class="close-button" data-close aria-label="Close modal" type="button">
	<span aria-hidden="true">&times;</span>
	</button>
</div>

