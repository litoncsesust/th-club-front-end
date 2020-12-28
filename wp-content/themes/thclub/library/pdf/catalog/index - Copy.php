<?php
include dirname(dirname(__FILE__)) . '/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

class PDFClass {
	public function __construct() {
	}
	public function pdf() {
		$url = new BaseClass();
		if(!empty($_SESSION['cart'])){
			
			ob_start();
			$style = '<style>table tr td p {font-size: 12px}table tr td p strong{font-size: 13px} a{color:#f54f37}</style>';
			$page_header = '<page backcolor="#ffffff" style="font-size: 12pt">';
			$page_content .= '<table  cellspacing="0" style="width:100%; padding-top: 50px; padding-left: 40px; padding-right:40px;">
			      <thead class="top-border bottom-border" style="border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);">
				      <tr>
				        <th class="normal font-condensed font-12" style="width:20%;border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);padding:10px 0 10px 0;">Billede</th>
				        <th class="normal font-condensed font-12" style="width:50%;text-align: left;border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);padding:10px 0 10px 0;">Produktdetaljer</th>
				        <th class="normal font-condensed font-12" style="width:10%;text-align: right;border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);padding:10px 0 10px 0;">Point</th>
				        <th class="normal font-condensed font-12" style="width:10%;text-align: right;border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);padding:10px 0 10px 0;">Antal</th>
				        <th class="normal font-condensed font-12" style="width:10%;text-align: right;border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);padding:10px 0 10px 0;">Subtotal</th>
			      	</tr>
			      </thead>
			      <tbody>';
			        $total = 0;
			        $total_quantity = 0;
			        if(!empty($_SESSION['cart'])){
			        $_SESSION['qty_array'][0];
			        $index = 0;
			        if(!isset($_SESSION['qty_array'])){
			        $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
			        }
			       
			        foreach ($_SESSION['cart'] as $key => $val) {
			        $p = new SingleProductClass('', $val);
			        $sp = $p->singleProduct();
			        
			        $page_content .= '<tr class="product">';
			        $page_content .= '<td style="padding-top:30px;width:20%" class="font-12">';
			        $page_content .= '<div class="font-12 left-center contain"><img src="'.$url->baseUrl() . $sp['files'][0]['file_path'].'" height="45" style="width:50"></div>';
			          $page_content .= '</td>';
			          $page_content .= '<td class="font-12" style="padding-top:30px;width:50%;text-align: left;">' .$sp['title']. '</td>';
			          $page_content .= '<td class="font-12" style="padding-top:30px;width:10%;text-align: right;">';
			          $page_content .= $sp['initial_point'] ? str_replace(",", ".", number_format($sp['initial_point'])) : '';
			          $page_content .= '</td>';
			          $page_content .= '<td style="padding-top:30px;width:10%;text-align: right;" class="font-12">';
			            
			          $page_content .= $_SESSION['qty_array'][$index];
			            
			          $page_content .= '</td>';
			          $page_content .= '<td class="font-12 point" style="padding-top:30px;width:10%;text-align: right;" >';
			          $page_content .= $sp['initial_point'] ? str_replace(",", ".", number_format($_SESSION['qty_array'][$index]*$sp['initial_point'])) : '';
			          $page_content .= '</td>';
			          $total += $_SESSION['qty_array'][$index]*$sp['initial_point'];
			          $total_quantity += $_SESSION['qty_array'][$index];
			        $page_content .= '</tr>';
			        $index ++;
			        }
			        }
			      $page_content .= '</tbody>
			    </table>';

			$page_content .='<table  cellspacing="0" style="width:100%; padding-top: 50px; padding-left: 40px; padding-right:40px;">
							<tbody>
								<tr>
									<td  colspan="3" style="width:60%"></td>
									<td  style="width:20%;text-align: left;border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);padding:10px 0 10px 0;">Total</td>
									<td  style="width:20%;text-align: right;border-bottom: 1px solid rgb(190, 187, 185);    border-top: 1px solid rgb(190, 187, 185);padding:10px 0 10px 0;" id="total_point" >';
									$page_content .= $total ? str_replace(",", ".", number_format($total)) : '';
									$page_content .='</td></tr>
									<tr>
										<td  colspan="3" style="width:60%"></td>
										<td style="width:20%;text-align: left;padding:10px 0 10px 0;">Dine point</td>
										<td  style="width:20%;text-align: right;padding:10px 0 5px 0;" id="user-point">';
											$page_content .= $_SESSION['clubKey']->point ? str_replace(",", ".", number_format($_SESSION['clubKey']->point)) : '';
										$page_content .='</td>
									</tr>
									<tr>
										<td  colspan="3" style="width:60%"></td>
										<td  style="width:20%;text-align: left;padding:5px 0 5px 0;">Point efter køb</td>
										<td  style="width:20%;text-align: right;padding:5px 0 5px 0;" id="remaining-point">';
											$page_content .= $_SESSION['clubKey']->point ? str_replace(",", ".", number_format($_SESSION['clubKey']->point - $total)) : '';
										$page_content .='</td></tr>
									</tbody>
								</table>';
			
			$page_footer .= '</page>';



			$content = <<<EOT
			$style $page_header $page_content $page_footer
EOT;
			$html2pdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8', array(0, 0, 0, 0));
			$html2pdf->setDefaultFont('Raleway');
			$html2pdf->writeHTML($content);
			ob_end_clean();
			return $html2pdf->output();
		} else {
			wp_safe_redirect(site_url());
	  	exit();
		}
	}
}