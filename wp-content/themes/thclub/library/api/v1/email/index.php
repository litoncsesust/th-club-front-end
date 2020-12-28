<?php
class SendEmailClass extends ApiClass {

	public function sendmail() {
	$to = $_SESSION['clubKey']->email;
	$subject = "Ny Order #". $_SESSION['order_id'];
	$headers = "Fra: clubwebshop@th-club.com";
	$message = '<!DOCTYPE html><html lang="en"><head><title></title><meta charset="utf-8"><meta name="viewport" content="width=device-width"><style type="text/css">@font-face{font-family:"Aarhus-Handball-Body";src:url("' . get_template_directory_uri() . '/dist/assets/fonts/FrutigerLTStd-Roman.eot?#iefix") format("embedded-opentype"),url("' . get_template_directory_uri() . '/dist/assets/fonts/FrutigerLTStd-Roman.otf")  format("opentype"),url("' . get_template_directory_uri() . '/dist/assets/fonts/FrutigerLTStd-Roman.woff") format("woff"),url("' . get_template_directory_uri() . '/dist/assets/fonts/FrutigerLTStd-Roman.ttf")  format("truetype"),url("' . get_template_directory_uri() . '/dist/assets/fonts/FrutigerLTStd-Roman.svg#FrutigerLTStd-Roman") format("svg");font-weight:normal;font-style:normal}@font-face{font-family:"Aarhus-Handball-Headline";src:url("' . get_template_directory_uri() . '/dist/assets/fonts/blockbe_regular-webfont.woff2") format("woff2"),url("' . get_template_directory_uri() . '/dist/assets/fonts/blockbe_regular-webfont.woff") format("woff");font-weight:normal;font-style:normal}@font-face{font-family:"Aarhus-Handball-Condensed";src:url("' . get_template_directory_uri() . '/dist/assets/fonts/blockbecondensed-webfont.woff2") format("woff2"),url("' . get_template_directory_uri() . '/dist/assets/fonts/blockbecondensed-webfont.woff") format("woff");font-weight:normal;font-style:normal}h1,h2,h3,h4,h5{font-size:18px;font-family:"Aarhus-Handball-Condensed",Verdana,sans-serif;color:#3b3937}a,div,td,body,p{font-size:14px;font-family:"Aarhus-Handball-Body",Verdana,serif}#outlook a{padding:0}.ReadMsgBody{width:100%}.ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%}body,table,td,a{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}table,td{mso-table-lspace:0pt;mso-table-rspace:0pt}img{-ms-interpolation-mode:bicubic}body{margin:0!important;padding:0!important}img{border:0;height:auto;line-height:100%;outline:none;text-decoration:none}table{border-collapse:collapse!important}body{height:100%!important;margin:0;padding:0;width:100%!important}.appleBody a{color:#68440a;text-decoration:none}.appleFooter a{color:#999999;text-decoration:none}@media screen and (max-width:525px){.divWidth{width:auto!important}.mobile-pad{padding:20px!important}table[class="wrapper"]{width:100%!important}td[class="logo"]{text-align:left;padding:20px 0 20px 0!important}td[class="logo"] img{margin:0 auto!important}td[class="mobile-hide"]{display:none}img[class="mobile-hide"]{display:none!important}img[class="img-max"]{max-width:100%!important;height:auto!important;width:100%!important}table[class="responsive-table"]{width:100%!important}td[class="padding"]{padding:0px 5% 0px 5%!important}td[class="padding-all"]{text-align:center;min-width:inherit!important}td[class="padding-meta"]{padding:30px 5% 0px 5%!important;text-align:center}td[class="no-pad"]{padding:0 0 20px 0!important}td[class="no-padding"]{padding:0!important}td[class="section-padding"]{}td[class="section-padding-bottom-image"]{padding:50px 15px 0 15px!important}td[class="mobile-wrapper"]{padding:0px!important}table[class="mobile-button-container"]{margin:0 auto;width:100%!important}a[class="mobile-button"]{width:80%!important;padding:15px!important;border:0!important;font-size:16px!important}}		</style></head>';
	$message .= '<body bgcolor="#fff" style="margin: 0; padding: 0 !important;">
	<div>
		<span style="display: none; font-size: 0px; color: #e8f5fc; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">Hey, new oeder received!</span>
	</div>';
	$message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
		<tbody>
			<tr>
				<td align="center" style="padding: 0;" class="section-padding">
					<table class="responsive-table" cellpadding="0" cellspacing="0" width="768" style="width: 768px;
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
																<td class="padding-all" style="background-color: #ffffff;  ">
																	<table width="100%" style="max-width:100%; min-width:100%;background-color: #ffffff;" border="0" cellspacing="0" cellpadding="0">
																		<tbody>
																			<tr>
																				<td align="center" class="padding-all" style="padding-left:10px;padding-top:10px;padding-bottom:20px;">
																					<img border="0" alt="ClubWebShop" class="img-max" width="320" height="auto" src="' . get_template_directory_uri() . '/dist/assets/images/th.PNG" style="display: block;color: #666666; text-decoration: none; width: 320px;height:auto !important;text-align: center;padding-top:10px;padding-bottom:10px;">
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
	</table>';
	$message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
		<tbody>
			<tr>
				<td align="center" style="padding: 0;" class="section-padding">
					<table class="responsive-table" cellpadding="0" cellspacing="0" width="768" style="width: 768px;">
						<tbody>
							<tr>
								<td style="position:relative;">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff;">
										<tbody>
											<tr>
												<td>
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tbody>
															<tr>
																<td class="padding-all" style="padding-top: 20px;padding-right: 20px; padding-left: 20px;">
																	<table width="100%" style="max-width:100%; min-width:100%;" border="0"
																		cellspacing="0" cellpadding="0">
																		<tbody>
																			<tr style="background: #fff;">
																				<td align="left" width="510" valign="top" style="width:70%;background-color: #ffffff; border: 1px solid #3b3937;border-right: 1px solid #fff;">
																					<table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width: 510px;background-color: #ffffff;">
																						<tbody>
																							<tr>
																								<td>
																									<table border="0" cellpadding="0" cellspacing="0" width="100%">
																										<tbody>
																											<tr>
																												<td style="">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%">
																														<tbody>
																															<tr>
																																<td class="padding-all" align="left" width="510" style="padding: 20px;">
																																	<h2 style="margin-top: 0">Bekræftelse på køb</h2>
																																	<h4 style="margin: 0">Introtekst</h4>
																																	<p>id es rerae nosaes quidebitatus minum verest, omnis eosandam, venes apelluptata ex ea autet voluptae. Ovit eium et re, quiatur aturiamusdae conserchil invent, seque od et qui dolor alitatur ressi quodissunt excernatur moditat emquae is nestrum qui officiusape magni odignim sequam natem ex ea voloratusdae nemperitis voluptassit perum eum hario explaut moles et, tem etur, cum enimust labo. Et et evelectio tectat eos asitate ctissequat magnimus aut pro tes dolorae cumquam volor sam ent qui con con.</p>
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
																				<td align="right" width="218" valign="top" style="width:30%;background-color: #ffffff; border: 1px solid #3b3937;border-left: 1px solid #fff;" >
																					<table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width: 218px;background-color: #ffffff;">
																						<tbody>
																							<tr>
																								<td>
																									<table border="0" cellpadding="0" cellspacing="0" width="100%">
																										<tbody>
																											<tr>
																												<td style="">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%">
																														<tbody>
																															<tr>
																																<td class="padding-all" align="right" width="218"  style="text-align: right;color:#3b3937;vertical-align: top; padding: 20px;" valing="top">Ordre nr.: '.$_SESSION['order_id'].'</td>
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
	</table>';
	foreach ($_SESSION['purchase_data'] as $key => $value) {
	$p = new SingleProductClass('', $value->sku);
	$sp = $p->singleProduct();
	$message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
		<tbody>
			<tr>
				<td align="center" style="padding: 0;" class="section-padding">
					<table class="responsive-table" cellpadding="0" cellspacing="0" width="768" style="width: 768px;">
						<tbody>
							<tr>
								<td style="position:relative;">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff;">
										<tbody>
											<tr>
												<td>
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tbody>
															<tr>
																<td class="padding-all" style="padding-top: 25px;padding-right: 20px; padding-left: 20px;">
																	<table width="100%" style="max-width:100%; min-width:100%;" border="0"
																		cellspacing="0" cellpadding="0">
																		<tbody>
																			<tr style="background: #fff;">
																				<td align="left" width="510" valign="top" style="width:70%;background-color: #ffffff; border: 1px solid #3b3937;border-right: 1px solid #fff;">
																					<table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width: 510px;background-color: #ffffff;">
																						<tbody>
																							<tr>
																								<td>
																									<table border="0" cellpadding="0" cellspacing="0" width="100%">
																										<tbody>
																											<tr>
																												<td style="">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%">
																														<tbody>
																															<tr>
																																<td class="padding-all" align="left" width="510" style="padding: 20px;">
																																	<img border="0" alt="' . $sp['title']. '" class="img-max" height="300" src="' . $this->baseUrl() . $sp['files'][0]['file_path'] . '" style="display: block;color: #666666; text-decoration: none; width: 100% !important;height:300px !important;padding-bottom:10px;">
																																	<h2>' . $sp['title'] . '</h2>
																																	<p>' . $sp['short_description'] . '</p>
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
																				<td align="right" width="218" valign="top" style="width:30%;background-color: #ffffff; border: 1px solid #3b3937;border-left: 1px solid #fff;" >
																					<table class="responsive-table" border="0" cellpadding="0" cellspacing="0" style="width: 218px;background-color: #ffffff;">
																						<tbody>
																							<tr>
																								<td>
																									<table border="0" cellpadding="0" cellspacing="0" width="100%">
																										<tbody>
																											<tr>
																												<td style="">
																													<table border="0" cellpadding="0" cellspacing="0" width="100%">
																														<tbody>
																															<tr>
																																<td class="padding-all" align="right" width="218"  style="text-align: left;color:#3b3937;vertical-align: top; padding: 20px;" valing="top">
																																	<div class="club-info">
																																		<h2>Firmainfo</h2>
																																		<p style="font-size:11px; margin:0"><span style="width: 80px; display: inline-block;">Firma:</span> ' . $sp['seller_club'] . '</p>
																																		<p style="font-size:11px; margin:0"><span style="width: 80px; display: inline-block;">Adresse:</span> ' . $sp['seller_address'] . ',<br/>' . $sp['seller_postcode'] . ' '. $sp['seller_city'] . '</p>
																																		<p style="font-size:11px; margin:0"><span style="width: 80px; display: inline-block;">Kontaktperson:</span> ' . $sp['contact_person'] . '</p>
																																		<p style="font-size:11px; margin:0"><span style="width: 80px; display: inline-block;">Email:</span> ' . $sp['seller_email'] . '</p>
																																		<p style="font-size:11px; margin:0"><span style="width: 80px; display: inline-block;">Telefon:</span> ' . $sp['seller_telephone'] . '</p>
																																	</div>
																																	<div class="more-info" style="padding-top: 90px;">
																																		<h2>Produktinfo</h2>
																																		<p style="margin:0"><span style="width: 50px; display: inline-block;">Antal:</span> ' . $value->quantity . ' </p>
																																		<p style="margin:0"><span style="width: 50px; display: inline-block;">Pris:</span> ' . number_format($sp['initial_point'], 2) . '</p>
																																	</div>
																																	<div class="more-info">
																																		<h2>Besked ved køb</h2>
																																		<p>' . $sp['purchase_notice'] . '</p>
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
	</table>';
	}
	$message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
		<tbody>
			<tr>
				<td align="center" style="padding: 0;" class="section-padding">
					<table class="responsive-table" cellpadding="0" cellspacing="0" width="768" style="width: 768px;">
						<tbody>
							<tr>
								<td style="position:relative;">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff;">
										<tbody>
											<tr>
												<td>
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tbody>
															<tr>
																<td class="padding-all" style="padding-top: 20px;padding-right: 20px; padding-left: 20px;">
																	<table width="100%" style="max-width:100%; min-width:100%;" border="0"
																		cellspacing="0" cellpadding="0">
																		<tbody>
																			<tr>
																				<td align="center" class="padding-all" style="padding: 20px;border: 1px solid #3b3937;">
																					<strong>Er du i tvivl om noget?</strong>
																					<p>Kontakt Clubwebshop <a><u>her</u></a>.</p>
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
	</table>';
	$message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
		<tbody>
			<tr>
				<td align="center" style="padding: 0;" class="section-padding">
					<table class="responsive-table" cellpadding="0" cellspacing="0" width="768" style="width: 768px;
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
																<td class="padding-all" style="background-color: #ffffff;  ">
																	<table width="100%" style="max-width:100%; min-width:100%;background-color: #ffffff;" border="0" cellspacing="0" cellpadding="0">
																		<tbody>
																			<tr>
																				<td align="center" class="padding-all" style="padding-left:10px;padding-top:10px;padding-bottom:10px;">
																					<img border="0" alt="ClubWebShop" class="img-max" width="320" height="auto" src="' . get_template_directory_uri() . '/dist/assets/images/th.PNG" style="display: block;color: #666666; text-decoration: none; width: 320px;height:auto !important;text-align: center;padding-top:10px;padding-bottom:10px;">
																					<p style="font-size:12px"> - Værdiskabende platform for din sponsorering</p>
																					<a href="https://www.facebook.com" style="display: inline-block;"><img border="0" alt="ClubWebShop" class="img-max" width="30" height="30" src="' . get_template_directory_uri() . '/dist/assets/images/e-facebook.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																					<a href="https://www.instagram.com" style="display: inline-block;"><img border="0" alt="ClubWebShop" class="img-max" width="30" height="30" src="' . get_template_directory_uri() . '/dist/assets/images/e-instagram.png"></a>
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
	</table>';
	$message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
		<tbody>
			<tr>
				<td align="center" style="padding: 0;" border="0" class="section-padding">
					<table cellpadding="0" cellspacing="0" class="responsive-table"
						style="width: 768px;background-color: #fff;">
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
																<td align="left" style="text-align: left;" class="padding-all"
																	width="768">
																	<div style="text-align: center; font-size:11px; color: #bebbb9">Id ut ut audaessit laut fugitio. Et plia arum rehende nihiciento quibea porporum esequat enitatum inusam volessi quat inientes magnistia sandi velectis poreiciisque quid utae erferum eatem ipid que estoritibus venient perum fuga. Nequia corupta temperoreris dit volorias eribus et duci corepro estrum volut elita quas sum nulpa ditia eatusandus
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
	</table>';
	$message .= '</body></html>';
	//echo $message;
	wp_mail($to, $subject, $message, $headers);
	unset($_SESSION['checkout']);
	unset($_SESSION['qty_array']);
	unset($_SESSION['cart']);
	}
}