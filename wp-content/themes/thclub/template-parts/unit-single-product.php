<?php
	$url = new BaseClass();
	$p = new SingleProductClass('', url_last_part());
	$sp = $p->singleProduct();
	if(empty($sp)){
		wp_redirect(site_url());
		exit();
	}
?>
<div class="extra-top-margin">
<?php get_template_part('template-parts/unit', 'notice'); ?>
<div class="grid-container">
	<div class="grid-x">
		<div class="cell medium-6 large-8 right-border">
			<div class="product-info">
			<?php if ($sp['files'] && count($sp['files']) > 1) { ?>
				<div class="product-slider">
					<?php foreach ($sp['files'] as $key => $value) { 
						if($value) { ?>
					<div class="p-image cover center-center no-repeat drop-shadow " style="background-image: url(<?= $url->baseUrl() . $value['file_path'] ?>)"></div>
					<?php }	} ?>			
				</div>
			<?php }else{	?>
				<div class="product">
					<?php foreach ($sp['files'] as $key => $value) { 
						if($value) { ?>
					<div class="p-image cover center-center no-repeat drop-shadow " style="background-image: url(<?= $url->baseUrl() . $value['file_path'] ?>)"></div>
					<?php }	} ?>			
				</div>
			<?php } ?>
				<h2 class="high-top-margin medium-bottom-margin"><?= $sp['headline'] ?></h2>
				<?= $sp['description'] ?>
				<div class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3 left-border right-border high-top-margin high-bottom-margin">
					<div class="cell text-center">
						<h3 class="no-margin">TIDSPUNKT</h3>
						<p class="font-condensed font-18">MARTS - APRIL</p>
					</div>
					<div class="cell text-center left-border right-border">
						<h3 class="no-margin">LOKATION</h3>
						<p class="font-condensed font-18"><?= $sp['location'] ?></p>
					</div>
					<div class="cell text-center">
						<h3 class="no-margin">BESTIL SENEST</h3>
						<p class="font-condensed font-18"><?= $sp['expire_date'] ?></p>
					</div>
				</div>
			</div>
			<hr>
			<?php if($sp['purchase_notice']) { ?>
			<div class="more-info high-top-margin extra-bottom-margin">
				<h2 class="medium-bottom-margin">Besked ved køb</h2>
				<?= $sp['purchase_notice']?>
			</div>
		<?php } ?>
		</div>
		<div class="cell medium-6 large-4">
			<div class="club-info">
				<h2 class="medium-bottom-margin">BESTIL NU</h2>
				<p>FIRMA INFO <a class="hide">REDIGER PROFIL</a></p>
			</div>
			<hr>
			<div class="club-info">
				<div class="clearfix">
					<span class="float-left">FIRMA</span>
					<span class="case-upper float-right"><?= $sp ? $sp['seller_club'] : '' ?></span>
				</div>
				<div class="clearfix">
					<span class="float-left">ADRESSE</span>
					<span class="case-upper float-right text-right"><?= $sp ? $sp['seller_address'].',<br/>'. $sp['seller_postcode'].' '.$sp['seller_city']: '' ?></span>
				</div>
				<div class="clearfix">
					<span class="float-left">KONTAKTPERSON</span>
					<span class="case-upper float-right"><?=  $sp ? $sp['contact_person'] : ''  ?></span>
				</div>
				<div class="clearfix">
					<span class="float-left">EMAIL</span>
					<span class="case-upper float-right"><?=  $sp ? $sp['seller_email'] : ''  ?></span>
				</div>
				<div class="clearfix">
					<span class="float-left">TELEFON</span>
					<span class="case-upper float-right"><?=  $sp ? $sp['seller_telephone'] : ''  ?></span>
				</div>
			</div>
			<hr>
			<div class="club-info">
				<p class="no-margin">Point: <span class="color-text-primary">
					<?= $sp['initial_point'] ? str_replace(",", ".", number_format($sp['initial_point'])) : '' ?></span></p>
				<p class="">Dine point: <span class="color-text-primary">
					<?= $_SESSION['clubKey']->point ?  str_replace(",", ".", number_format($_SESSION['clubKey']->point)) : ''?></span></p>				
				<?php if(!empty($_SESSION['clubKey'])) { ?>
					<a  href="<?= site_url('/checkout?cart=add') ?>&id=<?= $sp['sku'] ?>" id="order" class="font-condensed font-18 button expanded color-bg-primary" type="submit" name="btnOrder" >BESTIL NU</a>
				<?php } else { ?>
					<a class="font-condensed font-18 button expanded color-bg-primary" data-open="loginForm" aria-controls="loginForm" aria-haspopup="true" tabindex="0">BESTIL NU</a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>