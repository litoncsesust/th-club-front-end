<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <style type="text/css">
    @font-face { font-family: 'Lato'; font-style: normal; font-weight: 400;
    src: local('Lato Regular'), local('Lato-Regular'), url(https://digitaljulekalender.dk/assets/fonts/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff'); }
    @font-face { font-family: 'Noto';
    src: url('https://digitaljulekalender.dk/assets/fonts/notoserif-regular-webfont.woff2') format('woff2'), url('https://digitaljulekalender.dk/assets/fonts/notoserif-regular-webfont.woff') format('woff'); font-weight: normal; font-style: normal; }
    a, a:link, a:visited { text-decoration: none; color: #ba0b3a; }
    h1, h2, h3, h4, h5 { font-size: 18px; font-family: 'Lato', Verdana, sans-serif; color: #ba0b3a; }
    a, div, td, body, p { font-size: 14px; font-family: 'Noto', Verdana, serif; }
    #outlook a { padding: 0 }
    .ReadMsgBody { width: 100% }
    .ExternalClass { width: 100% }
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100% }
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100% }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt }
    img { -ms-interpolation-mode: bicubic }
    body { margin: 0 !important; padding: 0 !important }
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none }
    table { border-collapse: collapse !important }
    body { height: 100% !important; margin: 0; padding: 0; width: 100% !important }
    .appleBody a { color: #68440a; text-decoration: none }
    .appleFooter a { color: #999999; text-decoration: none }
    @media screen and (max-width:525px) {
    .divWidth { width: auto !important }
    .mobile-pad { padding: 20px !important }
    table[class="wrapper"] { width: 100% !important }
    td[class="logo"] { text-align: left; padding: 20px 0 20px 0 !important }
    td[class="logo"] img { margin: 0 auto !important }
    td[class="mobile-hide"] { display: none }
    img[class="mobile-hide"] { display: none !important }
    img[class="img-max"] { max-width: 100% !important; height: auto !important; width: 100% !important }
    table[class="responsive-table"] { width: 100% !important }
    td[class="padding"] { padding: 0px 5% 0px 5% !important }
    td[class="padding-copy"] { text-align: center; min-width: inherit !important }
    td[class="padding-meta"] { padding: 30px 5% 0px 5% !important; text-align: center }
    td[class="no-pad"] { padding: 0 0 20px 0 !important }
    td[class="no-padding"] { padding: 0 !important }
    td[class="section-padding"] { }
    td[class="section-padding-bottom-image"] { padding: 50px 15px 0 15px !important }
    td[class="mobile-wrapper"] { padding: 0px !important }
    table[class="mobile-button-container"] { margin: 0 auto; width: 100% !important }
    a[class="mobile-button"] { width: 80% !important; padding: 15px !important; border: 0 !important; font-size: 16px !important }
    }
    </style>
  </head>
  <?php
  $token = 'pages/reminder?token=E54DCE3C67461891CFB1F868AB176A292FD91A4C4CDA759D8D395928DA2242ECC6873BC26A94A6BCC5E3D37B2F16548377A4EF7267F9A6B5F3BC31CF96C242ECC6873BC26A94A6BCC5E3D37B2F165483';
  $first_name = '&first_name=' . $player->first_name;
  $last_name = '&last_name=' . $player->last_name;
  $emailurl = '&email=' . $player->email;
  $day_idurl = '&day_id=' . $player->day_id;
  $url = $token . $first_name . $last_name . $emailurl . $day_idurl;
  ?>
  <body bgcolor="#e3e3e3" style="margin: 0; padding: 0 !important;">
    <div>
      <span style="display: none; font-size: 0px; color: #e8f5fc; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">Lækre, lokale præmier hver dag i Herning Folkeblads julekalender. Måske er du den heldige i dag?</span>
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td style="padding: 0;" class="section-padding" align="center">
            <table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td class="section-padding" align="center" width="300" style="width:50%;background-color: #e3e3e3;">
                    <table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width: 300px;background-color: #e3e3e3;">
                      <tbody>
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody>
                                <tr>
                                  <td style="padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px;">
                                    <!-- COPY -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="padding-copy" align="left" width="300"><?php echo date('d. F Y'); ?></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td style="width:50%;background-color: #e3e3e3;" class="section-padding" align="center" width="300">
                    <table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width: 300px;background-color: #e3e3e3;">
                      <tbody>
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody>
                                <tr>
                                  <td style="padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px;">
                                    <!-- COPY -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="padding-copy" align="left" width="300">
                                            <div style="text-align: right;color:#017ea2;"><a title="AOH" href="https://aoh.digitaljulekalender.dk/<?= $url ?>" target="_blank">Læs nyhedsbrevet online</a></div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php if (strpos($template_setting['logo'], 'logo') !== false) { ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td align="center" style="padding: 0;" class="section-padding">
            <table class="responsive-table" cellpadding="0" cellspacing="0" width="600" style="width: 600px;
              ">
              <tbody>
                <tr>
                  <td style="position:relative;background-color: #ffffff;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td class="padding-copy" style="background-color: #ffffff;  ">
                                    <table style="max-width:100%; min-width:100%;background-color: #ffffff;" border="0" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td align="left" class="padding-copy" style="padding-left:10px;padding-top:10px;padding-bottom:10px;">
                                            <!-- ngIf: model.property.createLinkImage -->
                                            <!-- ngIf: !model.property.createLinkImage --><img ng-if="!model.property.createLinkImage" border="0" alt="Single Image" class="img-max" width="280" height="auto" src="<?= $template_setting['logo'] ?>" style="display: block;color: #666666; text-decoration: none;font-family: 'Noto', Verdana, sans-serif; font-size: 16px; width: 280px;height:auto !important;text-align: left;padding-left:10px;padding-top:10px;padding-bottom:10px;">
                                            <!-- end ngIf: !model.property.createLinkImage -->
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php } if (strpos($template_setting['top_banner'], 'top_banner') !== false) { ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td align="center" style="padding: 0;" class="section-padding">
            <table class="responsive-table" cellpadding="0" cellspacing="0" width="600" style="width: 600px;">
              <tbody>
                <tr>
                  <td style="position:relative;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td class="padding-copy" style="">
                                    <table style="max-width:100%; min-width:100%;" border="0"
                                      cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" class="padding-copy">
                                            <!-- ngIf: model.property.createLinkImage -->
                                            <!-- ngIf: !model.property.createLinkImage --><img
                                            ng-if="!model.property.createLinkImage"
                                            border="0" alt="Single Image" class="img-max"
                                            width="600" height="auto"
                                            src="<?= $template_setting['top_banner'] ?>"
                                            style="display: block;color: #666666; text-decoration: none; font-family: Verdana, arial, sans-serif; font-size: 13px;width: 600px;height:auto !important;">
                                            <!-- end ngIf: !model.property.createLinkImage -->
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php } if ($content) { ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td align="center" style="padding: 0;" border="0" class="section-padding">
            <table cellpadding="0" cellspacing="0" class="responsive-table"
              style="width: 600px;background-color: #ffffff;">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td height="" style="">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="left" style="text-align: left;padding: 20px 15px 0 15px;"
                                    class="padding-copy" width="600">
                                    <div style="text-align: left;"><?= $content ?>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php } ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td style="padding: 0;" class="section-padding" align="center">
            <table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width:600px;background-color: #bb0b3a;">
              <tbody>
                <tr>
                  <td>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td height="0">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="responsive-table">
                              <tbody>
                                <tr>
                                  <td valign="middle" width="600" align="center">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" height="40" style="width: 500px;border-radius: 20px;">
                                            <a href="https://aoh.digitaljulekalender.dk/" target="_blank" style="text-decoration:none !important;display:block !important;"><span style="font-size: 18pt;color: #ffffff;"><strong>GÅ TIL DAGENS LÅGE I JULEKALENDEREN</strong></span></a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php if ($template_setting['signature']) { ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td align="center" style="padding: 0;" border="0" class="section-padding">
            <table cellpadding="0" cellspacing="0" class="responsive-table"
              style="width: 600px;background-color: #ffffff;">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td height="" style="">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="left" style="text-align: left;padding: 20px 15px 0 15px;"
                                    class="padding-copy" width="600">
                                    <div><?= $template_setting['signature'] ?>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php }
    if (strpos($template_setting['bottom_banner'], 'bottom_banner') !== false) { ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td align="center" style="padding: 0;" class="section-padding">
            <table class="responsive-table" cellpadding="0" cellspacing="0" width="600" style="width: 600px;
              ">
              <tbody>
                <tr>
                  <td style="position:relative;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td class="padding-copy" style="
                                    ">
                                    <table style="max-width:100%; min-width:100%;" border="0" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" class="padding-copy">
                                            <!-- ngIf: model.property.createLinkImage -->
                                            <!-- ngIf: !model.property.createLinkImage --><img ng-if="!model.property.createLinkImage" border="0" alt="Single Image" class="img-max" width="600" height="auto" src="<?= $template_setting['bottom_banner'] ?>" style="display: block;color: #666666; text-decoration: none;font-family: 'Noto', Verdana, sans-serif; font-size: 16px;
                                            width: 600px;
                                            height:auto !important;">
                                            <!-- end ngIf: !model.property.createLinkImage -->
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php } ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td align="center" style="padding: 0;" class="section-padding">
            <table class="responsive-table" cellpadding="0" cellspacing="0" width="600" style="width: 600px;
              ">
              <tbody>
                <tr>
                  <td style="position:relative;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td class="padding-copy" style="
                                    ">
                                    <table style="max-width:100%; min-width:100%;" border="0"
                                      cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" class="padding-copy">
                                            <!-- ngIf: model.property.createLinkImage -->
                                            <!-- ngIf: !model.property.createLinkImage --><img
                                            ng-if="!model.property.createLinkImage" border="0"
                                            alt="" class="img-max" width="600" height="auto"
                                            src="https://julequiz.com/assets/images/email/drop-shadow.png"
                                            style="display: block;color: #666666; text-decoration: none;font-family: Verdana, arial, sans-serif; font-size: 13px;
                                            width: 600px;
                                            height:auto !important;">
                                            <!-- end ngIf: !model.property.createLinkImage -->
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <?php if (strpos($template_setting['logo'], 'logo') !== false) { ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
      <tbody>
        <tr>
          <td style="padding: 0;" class="section-padding" align="center">
            <table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width:600px;   background-color: #e3e3e3;">
              <tbody>
                <tr>
                  <td>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td height="0" style=" padding: 15px;">
                            <table class="responsive-table" border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody>
                                <tr>
                                  <td valign="middle" width="300" align="center">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td ng-if="model.property.social3Active" align="center">
                                            <a href="https://aoh.digitaljulekalender.dk/" target="_blank">
                                              <img alt="AOH" class="img-max" border="0" height="auto" width="180" src="<?= $template_setting['logo'] ?>" style="display: block;color: #666666; text-decoration: none;font-family: 'Noto', Verdana, sans-serif; font-size: 16px;   width: 180px;height: auto !important;">
                                            </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
      <?php } ?>
      <?php if ($template_setting['copyright']) { ?>
      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e3e3e3;">
        <tbody>
          <tr>
            <td align="center" style="padding: 0;" border="0" class="section-padding">
              <table cellpadding="0" cellspacing="0" class="responsive-table"
                style="width: 600px;background-color: #e3e3e3;">
                <tbody>
                  <tr>
                    <td>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td height="" style="padding: 10px;">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                  <tr>
                                    <td align="left" style="text-align: left;" class="padding-copy"
                                      width="600">
                                      <div style="text-align: center;"><?= $template_setting['copyright'] ?>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
      <?php } ?>
    </body>
  </html>