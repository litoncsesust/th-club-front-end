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
			$style = '<style>table{width:100%; padding-bottom: 20px; padding-left: 50px; padding-right:50px;font-family:"thbody"}table tr td{padding:5px 0 5px 0;} h2 {font-size: 22px; font-family:"thtitle"}</style>';
			$page_header = '<page backcolor="#ffffff" style="font-size: 14px">';
			$page_content = '<h1 style="margin-top:50px;margin-bottom:40px;padding:0px;text-align:center">KVITTERING</h1>';
			
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
		      
					$page_content .= '<div style="text-align:center"><img  style="padding:50px; margin-bottom:10px;width:100%;height:250px; object-fit:cover;" src="'.$url->baseUrl() . $sp['files'][0]['file_path'].'"></div>';
					$page_content .= '<table  cellspacing="0"><tbody>';
					$page_content .= '<tr>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp['title'] ? '<h2><b>'. $sp['title'] .'</b></h2>' : '';
						$page_content .= $sp['short_description'] ? $sp['short_description'] : '';
						$page_content .= '</td>';
						$page_content .= '<td style="width:30%;vertical-align: text-top; text-align:right;">';
						$page_content .= '<h2><b>Ordre nr.: ' . $_SESSION['order_id'] . '</b></h2>';
						$page_content .= '</td>';
					$page_content .= '</tr>';
					$page_content .= '</tbody>
			    </table>';

			    $page_content .= '<div style="padding-left: 50px; padding-right:50px;"><h2>Firmainfo</h2></div>';
			    $page_content .= '<table  cellspacing="0"><tbody>';
			    $page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Firma:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['seller_club'] : '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
					$page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Adresse:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['seller_address'].', '. $sp['seller_postcode'].' '.$sp['seller_city']: '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
					$page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Kontaktperson:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['contact_person'] : '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
					$page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Email:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['seller_email'] : '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
					$page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Telefon:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['seller_telephone'] : '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
			    $page_content .= '</tbody>
			    </table>';

			    $page_content .= '<div style="padding-left: 50px; padding-right:50px;"><h2>Produktinfo</h2></div>';
			    $page_content .= '<table  cellspacing="0"><tbody>';
			    $page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Antal:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['total_number'] : '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
					$page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Pris:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['initial_point'] : '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
					$page_content .= '<tr>';
						$page_content .= '<td style="width:30%;">Udløbsdato:';
						$page_content .= '</td>';
						$page_content .= '<td style="width:70%;">';
						$page_content .= $sp ? $sp['expire_date'] : '';
						$page_content .= '</td>';
					$page_content .= '</tr>';
			    $page_content .= '</tbody>
			    </table>';
			    $page_content .= '<div style="padding-left: 50px; padding-right:50px;font-family:thbody">
			    <h2>Besked ved køb</h2>';
			    $page_content .= $sp ? $sp['purchase_notice'] : '';
			    $page_content .= '</div>';

		      $index ++;
	      }
      }

			
			$page_footer .= '</page>';



			$content = <<<EOT
			$style $page_header $page_content $page_footer
EOT;
			$html2pdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8', array(0, 0, 0, 0));

			$html2pdf->AddFont('thtitle', 'normal', 'thtitle.php');
			$html2pdf->AddFont('thbody', 'normal', 'thbody.php');

			$html2pdf->writeHTML($content);
			$filename = 'receipt-'.$_SESSION['order_id'].'.pdf';
			ob_end_clean();
			return $html2pdf->output($filename);
		} else {
			wp_safe_redirect(site_url());
	  	exit();
		}
	}
}