<div class="shop-title-padding">
	<div class="grid-container">
		<div class="cell text-center">
			<?php 
			if (strcmp($_SESSION['checkout'], 'success') != 0) {
				the_title('<h1 class="wow slideInUp font-35 font-headline case-upper line-height no-margin">', '</h1>'); 
			}?>
			<?php if (isset($_SESSION['notice'])) { ?>
			<div class="grid-container">
				<div class="grid-x align-center">
					<div class="cell small-12 medium-9 large-9 text-center">
						<div class="relative medium-top-margin notice color-bg-transparent" data-closable>
							<span class="checkout-success font-condensed font-20 color-text-primary wow pulse contain no-repeat left-center"><?= $_SESSION['notice'] ?></span> 
							<?php unset($_SESSION['notice']); ?>
							<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>