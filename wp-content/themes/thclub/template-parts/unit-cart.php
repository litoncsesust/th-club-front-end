<?php
$url = new BaseClass();
$choices = isset($_GET['cart']) ? $_GET['cart'] : '';
$c = new CartClass($choices);
$c->cart();
?>
<?php if ( isset($_POST['btnCheckout']) ) { ?>
<div class="grid-container">
  <div class="grid-x align-center">
    <div class="cell small-12 medium-9 large-9 text-center">
      <div class="callout success" data-closable>
        <?php
        $total_point = $_POST['total_point'];
        $total_quantity = $_POST['total_quantity'];
        unset($_POST['total_point']);
        unset($_POST['total_quantity']);
        unset($_POST['btnCheckout']);
        $data_arr['data_sku'] = $_POST;
        $data_arr['total_point'] = $total_point;
        $data_arr['total_quantity'] = $total_quantity;
        $cart_checkout = new CheckoutClass($data_arr);
        $return_response = $cart_checkout->checkout();
        ?>
        <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<div class="cart-area extra-top-margin extra-bottom-margin">
  <div class="grid-container">
    <div class="grid-x align-center">
      <div class="cell small-12">
        <form method="POST" action="<?= site_url('cart?cart=save') ?>">
          <table class="cart table hover table-bordered table-striped">
            <thead class="top-border bottom-border">
              <th></th>
              <th class="normal font-condensed color-text-darkgray font-18">Billede</th>
              <th class="normal font-condensed color-text-darkgray font-18">Produktdetaljer</th>
              <th class="normal font-condensed color-text-darkgray font-18">Point</th>
              <th class="normal font-condensed color-text-darkgray font-18 text-center">Antal</th>
              <th class="normal font-condensed color-text-darkgray font-18 text-right">Subtotal</th>
            </thead>
            <tbody>
              <?php
              //initialize total
              $total = 0;
              if(!empty($_SESSION['cart'])) {
                //create array of initail qty which is 1               
                $index = 0;
                if(!isset($_SESSION['qty_array'])){
                  $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                }

                foreach ($_SESSION['cart'] as $key => $val) {
                  $p = new SingleProductClass('', $val);
                  $sp = $p->singleProduct();
                  /*echo "<pre>";
                  print_r($sp['files'][0]['file_path']);*/
                  ?>
                  <tr class="product">
                    <td width="5%">
                      <a class="trash contain center-center" href="<?= site_url('cart?cart=delete') ?>&id=<?= $sp['id'] ?>&index=<?= $index ?>">&nbsp;</a>
                    </td>
                    <td width="10%">
                    <div class="font-14 left-center contain" style="background-image: url(<?= $url->baseUrl() . $sp['files'][0]['file_path'] ?>); background-size: contain;background-repeat: no-repeat; height: 45px;">&nbsp;</div>
                    </td>
                    <td class="font-14" width="45%">
                      <?= $sp['title'] ?>
                    </td>
                    
                    <td class="font-14" width="10%">
                    <?= $sp['initial_point'] ? str_replace(",", ".", $sp['initial_point']) : '' ?>
                    <input type="hidden" name="indexes[]" value="<?= $index ?>">
                    </td>
                    <td width="15%" class="font-14">
                      <input type="number" min="1" class="font-14 form-control no-margin" value="<?= $_SESSION['qty_array'][$index]; ?>" name="qty_<?= $index ?>">
                    </td>
                    <td width="15%" class="font-14 text-right">
                    <?php echo $_SESSION['qty_array'][$index]*$sp['initial_point'] ? str_replace(",", ".", $_SESSION['qty_array'][$index]*$sp['initial_point']) : ''
                    ?>
                    </td>
                    <?php $total += $_SESSION['qty_array'][$index]*$sp['initial_point']; ?>
                  </tr>
                <?php
                  $index ++;
                }
              } else {
              ?>
              <tr><td colspan="6" class="text-center">Ingen vare i kurv</td></tr>
              <?php
              }
              ?>
              <tr>
                <td colspan="5" class="text-right">
                <?php if(!empty($_SESSION['cart'])) { ?>
                  <button type="submit" class="normal success font-condensed color-text-white button no-margin" name="save">Opdater</button>
                <?php } ?>
                </td>
              </tr>
            </tbody>
          </table>
          <?php if(!empty($_SESSION['cart'])) { ?>
          <div class="relative clearfix large-top-margin">
            <!-- <div class="absolute float-left bottom">
              <a class="normal font-condensed case-upper button no-margin" href="<?= site_url() ?>">Fortsæt med at handle</a>
              <?php if(!empty($_SESSION['cart'])) { ?>
              <a class="normal font-condensed case-upper alert button color-text-white no-margin" href="<?= site_url('cart?cart=clear') ?>">slet bestilling</a>
              <?php } ?>
            </div> -->
            <div class="cart-total float-right">
              <div class="clearfix top-border bottom-border tiny-bottom-margin">
                <table class="cart point-table table hover table-bordered table-striped no-margin">
                  <tbody>
                    <tr>
                      <td class="normal font-condensed color-text-darkgray font-24 text-left">Total</td>
                      <td class="normal font-condensed color-text-darkgray font-24 text-right">
                        <?= $total ? str_replace(",", ".", $total) : '' ?><input type="hidden" name="total_point" value="<?= $total ?>"><input type="hidden" name="total_quantity" value="<?= $total_quantity ?>"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <table class="cart point-table table hover table-bordered table-striped">
                <tbody>
                  <tr>
                    <td class="normal font-condensed color-text-darkgray font-20 text-left">Dine point</td>
                    <td class="normal font-condensed color-text-darkgray font-20 text-right"><?= number_format($_SESSION['clubKey']->point, 2); ?></td>
                  </tr>
                  <tr>
                    <td class="normal font-condensed color-text-darkgray font-20 text-left">Point efter køb</td>
                    <td class="normal font-condensed color-text-darkgray font-20 text-right"><?= number_format(($_SESSION['clubKey']->point - $total), 2); ?></td>
                  </tr>
                </tbody>
              </table>
              <?php if (!empty($_SESSION['clubKey'])) { ?>
              <?php if ($total > $_SESSION['clubKey']->point) { ?>
              <h4 class="top-border bottom-border font-condensed color-text-primary font-25 no-margin small-bottom-margin">Du har følgende antal point: <?= $_SESSION['clubKey']->point ?><br/>Du har ikke tilstrækkelig balance</h4>
              <?php } else {?>
              <button type="submit" class="high-top-margin button normal case-upper font-condensed font-18 expanded color-bg-primary no-margin" name="btnCheckout">Betal</button>
              <?php } ?>
              <?php } else { ?>
              <a class="button normal case-upper font-condensed font-18 expanded color-bg-primary no-margin" data-open="loginForm" aria-controls="loginForm" aria-haspopup="true" tabindex="0">Log ind</a>
              <?php } ?>
            </div>
          </div>
          <?php } ?>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  window.history.replaceState({}, document.title, "/" + "dev.th-club.com/cart");
</script>