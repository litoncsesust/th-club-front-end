<?php
$c = count(get_sub_field('grid_tg_add'));
$b = get_sub_field('grid_tg_b');
$cw = get_sub_field('grid_tg_cw');
if ($cw) {
  $w = get_sub_field('grid_tg_w');
  $wc = new WrapperClass($w, $b);
}
?>
<div class="text-grid-text-area medium-top-padding <?= ($cw) ? $wc->marginPadding() : '' ?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
  <div class="grid-container <?= ($cw) ? $wc->wrapperSize() : '' ?>" data-equalizer="tgw">
    <div class="grid-x grid-padding-x" data-equalizer="tg"  data-equalize-on="medium">
      <?php
      $i = 1;
      if (have_rows('grid_tg_add')) :
      while (have_rows('grid_tg_add')) :
      the_row();
      $tg_grid = get_sub_field('tg_grid');
      $pc = new PhotoClass(get_sub_field('tg_bg_image'));
      $bgColor = get_sub_field('tg_bg_color');
      $t = get_sub_field('tg_t');
      $title = get_sub_field('tg_title');
      $element = get_sub_field('tg_element');
      $ct = get_sub_field('tg_txt_ct');
      $tc = new TypographyClass($t, $title, $ct, $element, '', '');
      $bc = new ButtonClass(get_sub_field('tg_btn_add'), 'a');
      $sbc = new ButtonClass(get_sub_field('tg_button'), 'a');
      $show_image_on_smartphone = get_sub_field('show_image_on_smartphone');
      $image_or_video = get_sub_field('tg_image_or_video');
      $tg_youtube_or_link = get_sub_field('tg_youtube_or_link');
      $tg_youtube_link = get_sub_field('tg_youtube_link');
      $tg_video_link = get_sub_field('tg_video_link'); ?>
      <div class="cell <?= $bgColor ?> small-12 medium-<?= $tg_grid ?> large-<?= $tg_grid ?> <?= (($i != 1) ? 'mobile-medium-top-padding mobile-medium-bottom-padding' : '' )?> <?= (($i != 1 && $tg_grid == 12) ? 'medium-top-padding' : '')?>">
      
      <?php if($image_or_video){
        if($tg_youtube_or_link==true){ ?>
      <video width="100%" class="lazy cover tg-bg-video" controls><source src="<?= $tg_video_link ?>" type="video/mp4"></video>
      <?php } else { ?>
      <iframe class="lazy cover tg-bg-image" width="100%" src="<?= $tg_youtube_link ?>"></iframe>
      <?php }
      } else {
      echo ($pc->imgurl()) ? '<div class="lazy cover tg-bg-image ' . (($show_image_on_smartphone) ? 'mobileHide' : '') . '" data-src="' . $pc->imgurl() . '"></div>' : '';
      } ?>
      <div class="grid-text" data-equalizer-watch="tgw">
        <div data-equalizer-watch="tg">
          <?= (get_sub_field('tg_tag')) ? '<p class="bold case-upper color-text-darkgray tiny-bottom-margin">' . get_sub_field('tg_tag') . '</p>' : ''; ?>
          <?= $tc->title() ?>
          <div class="small-top-margin tgtp"><?= get_sub_field('tg_text') ?></div>
        </div>
        <div class="small-top-margin">
          <?= $sbc->buttonSingle() ?>
        </div>
        <div class="small-top-margin">
          <?= $bc->buttonGroup() ?>
        </div>
      </div>
    </div>
    <?php
    $i++;
    endwhile;
    endif;
    ?>
    </div>
  </div>
</div>