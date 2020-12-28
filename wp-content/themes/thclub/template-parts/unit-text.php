<?php
$cw = get_sub_field('text_txt_cw');

$t = get_sub_field('text_txt_t');
$title = get_sub_field('text_txt_title');
$element = get_sub_field('text_txt_element');
$ct = get_sub_field('text_txt_ct');

if ($cw) {
  $w = get_sub_field('text_txt_w');
  $wc = new WrapperClass($w, ''); 
}

$category = new CategoryClass($_GET['category']);
$category = $category->singleCategory();

$club = new ClubClass($_GET['club']);
$club = $club->singleClub();

$tc = new TypographyClass($t, $title, $ct, $element, '', '');
$bc = new ButtonClass(get_sub_field('text_txt_button'), 'a');
$pc = new PhotoClass(get_sub_field('text_txt_bg_image'));
?>
<?php if(isset($_GET['category']) || isset($_GET['club'])){?>
<div class="text-area <?= ($cw) ? $wc->marginPadding() : ''?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
  <div class="grid-container <?= ($cw) ? $wc->wrapperSize() : '' ?>">
    <div class="wow slideInUp cell small-12">
      <?= ($pc->imgurl()) ? '<div class="lazy cover txt-bg-image" data-src="<?= $pc->imgurl() ?>"></div>' : '' ?>
      <div class="text">
          <div class="cell text-center">
            <h3 class="color-text-darkgray bold font-40 case-upper no-margin">
              <?= isset($category['name']) ? $category['name'] : ''?>
              <?= isset($club['name']) ? ' : ' .$club['name'] : ''?>
            </h3>
          </div>
      </div>
    </div>
  </div>
</div>
<?php } else if(isset($_GET['title'])){?>
<?php } else {?>
<div class="text-area <?= ($cw) ? $wc->marginPadding() : ''?>" <?= ($cw) ? $wc->wrapperStyle() : '' ?>>
  <div class="grid-container <?= ($cw) ? $wc->wrapperSize() : '' ?>">
    <div class="wow slideInUp cell small-12">
      <?= ($pc->imgurl()) ? '<div class="lazy cover txt-bg-image" data-src="<?= $pc->imgurl() ?>"></div>' : '' ?>
      <div class="text">
          <?= $tc->title() ?>
        <div class="medium-top-margin medium-bottom-margin"><?= get_sub_field('text_txt_text') ?></div>
        <?= $bc->buttonSingle() ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>