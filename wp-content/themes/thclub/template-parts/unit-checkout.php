<?php
$url = new BaseClass();
$choices = isset($_GET['cart']) ? $_GET['cart'] : '';
$c = new CheckoutClass('', $choices);
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
        $cart_checkout = new CheckoutClass($data_arr, '');
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
<div class="cart-area extra-bottom-margin">
  <div class="grid-container">
    <div class="grid-x align-center">
      <div class="cell small-12">
        <form method="POST" action="<?= site_url('/checkout') ?>">          
          <?php if (strcmp($_SESSION['checkout'], 'success') == 0) { ?>
              <?php 

              foreach ($_SESSION['cart'] as $key => $val) {
              $p = new SingleProductClass('', $val);
              $sp = $p->singleProduct();

              /*echo "<pre>";
              print_r($sp);
              exit;*/
              ?>
              <div class="grid-container" style="background-color:#ffffff;padding: 0 50px 0 50px;">
                <h2 class="text-center high-top-padding medium-bottom-padding"><?= ('KVITTERING') ?></h2>
                <div class="txt-bg-image" style="background-image: url(<?= $url->baseUrl() . $sp['files'][0]['file_path'] ?>); background-size: cover;background-repeat: no-repeat;">&nbsp;</div>
                <div class="grid-x high-top-margin">
                  <div class="cell small-8">
                    <h5><?= $sp['title'] ?></h5>
                    <p><?= $sp['short_description'] ?></p>
                  </div>
                  <div class="cell small-4 text-right">
                    <h5>Ordre nr.: <?=$_SESSION['order_id']?></h5>
                  </div>
                </div>
                <div class="grid-x medium-top-margin">
                  <div class="cell small-4">
                  <h5><?= ('Firmainfo') ?></h5>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Firma:</div>
                      <div class="cell small-6 text-left"><?= $sp ? $sp['seller_club'] : '' ?></div>
                    </div>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Adresse:</div>
                      <div class="cell small-6 text-left"><?= $sp ? $sp['seller_address'].',<br/>'. $sp['seller_postcode'].' '.$sp['seller_city']: '' ?></div>
                    </div>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Kontaktperson:</div>
                      <div class="cell small-6 text-left"><?=  $sp ? $sp['contact_person'] : ''  ?></div>
                    </div>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Email:</div>
                      <div class="cell small-6 text-left"><?=  $sp ? $sp['seller_email'] : ''  ?></div>
                    </div>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Telefon:</div>
                      <div class="cell small-6 text-left"><?=  $sp ? $sp['seller_telephone'] : ''  ?></div>
                    </div>
                  </div>
                </div>
                <div class="grid-x medium-top-margin">
                  <div class="cell small-4">
                  <h5><?= ('Produktinfo') ?></h5>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Antal:</div>
                      <div class="cell small-6 text-left"><?= $sp ? $sp['total_number'] : '' ?></div>
                    </div>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Pris:</div>
                      <div class="cell small-6 text-left"><?= $sp ? $sp['initial_point'].',<br/>'. $sp['seller_postcode'].' '.$sp['seller_city']: '' ?></div>
                    </div>
                    <div class="grid-x">
                      <div class="cell small-6 text-left">Udløbsdato:</div>
                      <div class="cell small-6 text-left"><?=  $sp ? $sp['expire_date'] : ''  ?></div>
                    </div>
                  </div>
                </div>
                <div class="grid-x medium-top-margin high-bottom-margin">
                  <div class="cell small-4">
                    <h5><?= ('Besked ved køb') ?></h5>
                    <p><?= $sp ? $sp['purchase_notice'] : '' ?></p>
                  </div>
                </div>
              </div>

              <?php
              $index ++;
              }?>
              <div class="extra-top-margin">
                <div class="text-center">
                  <a class="normal font-condensed case-upper button no-margin color-bg-primary" href="<?= site_url('receipt') ?>" target="_blank">UDSKRIV KVITTERING</a>
                  <a class="normal font-condensed case-upper button no-margin color-bg-primary" href="<?= site_url() ?>">Tilbage til pointshoppen</a>
                </div>

              </div>
          
          <?php } else { ?>
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
              $total_quantity = 0;
              if(!empty($_SESSION['cart'])){
              //create array of initail qty which is 1
              $_SESSION['qty_array'][0];
              $index = 0;
              if(!isset($_SESSION['qty_array'])){
              $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
              }
             /* echo "<pre>";
              print_r($_SESSION['qty_array']);
              exit;*/
              foreach ($_SESSION['cart'] as $key => $val) {
              $p = new SingleProductClass('', $val);
              $sp = $p->singleProduct();
              ?>
              <tr class="product">
                <td width="5%">
                  <a class="trash contain center-center<?= ((strcmp($_SESSION['checkout'], 'success') == 0) ? ' disabled' : '') ?>" href="<?= site_url('checkout?cart=delete') ?>&id=<?= $sp['id'] ?>&index=<?= $index ?>">&nbsp;</a>
                </td>
                <td width="10%" class="font-14">
                  <div class="font-14 left-center contain" style="background-image: url(<?= $url->baseUrl() . $sp['files'][0]['file_path'] ?>); background-size: contain;background-repeat: no-repeat; height: 45px;">&nbsp;</div>
                </td>
                <td class="font-14" width="50%"><?= $sp['title'] ?></td>
                <td class="font-14" width="10%">
                  <?= $sp['initial_point'] ? str_replace(",", ".", number_format($sp['initial_point'])) : '' ?>
                  <input type="hidden" name="<?= $sp['sku'] ?>" value="<?= $_SESSION['qty_array'][0]; ?>">
                </td>
                <td width="15%" class="font-14 text-center">
                  <?php if (strcmp($_SESSION['checkout'], 'success') == 0) { ?>
                  <?= $_SESSION['qty_array'][$index]; ?>
                  <?php } else { ?>
                  <input type="number" min="1" class="font-14 form-control no-margin itemQty" value="<?= $_SESSION['qty_array'][$index]; ?>" >
                  <?php } ?>
                </td>
                <td class="font-14 text-right point" width="15%" class="font-14 text-right">
                  <?= $sp['initial_point'] ? str_replace(",", ".", number_format($_SESSION['qty_array'][$index]*$sp['initial_point'])) : '' ?>
                </td>
                <input type="hidden" class="itemPoint" value="<?= $sp['initial_point']; ?>">
                <?php $total += $_SESSION['qty_array'][$index]*$sp['initial_point']; ?>
                <?php $total_quantity += $_SESSION['qty_array'][$index]; ?>
              </tr>
              <?php
              $index ++;
              }
              }
              else{
              ?>
              <tr><td colspan="6" class="text-center">Ingen varer i indkøbskurven</td></tr>
              <?php
              }
              ?>
            </tbody>
          </table>
          <div class="relative clearfix extra-top-margin">
            <div class="cart-total float-right">
              <div class="clearfix top-border bottom-border tiny-bottom-margin">
                <table class="cart point-table table hover table-bordered table-striped no-margin">
                  <tbody>
                    <tr>
                      <td class="normal font-condensed color-text-darkgray font-24 text-left">Total</td>
                      <td class="normal font-condensed color-text-darkgray font-24 text-right" id="total_point" >
                        <?= $total ? str_replace(",", ".", number_format($total)) : '' ?>
                      <input type="hidden" name="total_point" id="purchase_total_point" value="<?= $total ?>">
                      <input type="hidden" id="total_quantity" name="total_quantity" value="<?= $total_quantity ?>">
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="medium-bottom-margin">
                <table class="cart checkout-point-table table hover table-striped">
                  <tbody>
                    <tr>
                      <td class="normal font-condensed color-text-darkgray font-20 text-left">Dine point</td>
                      <td class="normal font-condensed color-text-darkgray font-20 text-right" id="user-point">
                        <?= $_SESSION['clubKey']->point ? str_replace(",", ".", number_format($_SESSION['clubKey']->point)) : '' ?>
                      </td>
                    </tr>
                    <tr>
                      <td class="normal font-condensed color-text-darkgray font-20 text-left">Point efter køb</td>
                      <td class="normal font-condensed color-text-darkgray font-20 text-right" id="remaining-point">
                        <?= $_SESSION['clubKey']->point ? str_replace(",", ".", number_format($_SESSION['clubKey']->point - $total)) : '' ?>
                    </tr>
                  </tbody>
                </table>
              </div>
              <?php if($_SESSION['cart']) { ?>
                <button type="submit" class="high-top-margin button normal case-upper font-condensed font-18 expanded color-bg-primary no-margin" name="btnCheckout">Betal</button>
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
  window.history.replaceState({}, document.title, "/" + "dev.th-club.com/checkout");
</script>