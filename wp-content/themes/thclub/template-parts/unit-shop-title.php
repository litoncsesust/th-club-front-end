<div class="color-bg-warmgray shop-title-padding">
	<div class="grid-container">
		<div class="cell text-center">
			<?php the_title('<h1 class="wow slideInUp font-35 font-headline case-upper line-height no-margin">', '</h1>'); ?>
			<?php if(isset($_SESSION['message'])) { ?>
			<div class="grid-container">
				<div class="grid-x align-center">
					<div class="cell small-12 medium-9 large-9 text-center">
						<div class="relative medium-top-margin font-condensed case-upper font-18 notice color-text-primary color-bg-transparent wow pulse" data-closable>
							<?= $_SESSION['message'] ?>
							<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<?php unset($_SESSION['message']); } ?>
		</div>
	</div>
</div>