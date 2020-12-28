<?php if (isset($_SESSION['notice'])) { ?>
<div class="grid-container">
	<div class="grid-x align-center">
		<div class="cell small-12 medium-9 large-9 text-center">
			<div class="relative medium-top-margin medium-bottom-margin font-condensed font-18 notice color-text-primary color-bg-transparent wow pulse" data-closable>
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