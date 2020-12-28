<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include dirname(dirname(__FILE__)) . '/library/mail/vendor/autoload.php';

$mail = new PHPMailer(true);

$customer_name = '';
$customer_telephone = '';
$customer_address = '';
$customer_post_code = '';
$customer_city = '';
$customer_email = '';
$order_id = $_SESSION['order_id'];
$purchase_data = $_SESSION['purchase_data'];

/*echo "<pre>";
				print_r($_SESSION);
				exit;
*/
if (isset($_SESSION['clubKey'])){
	$u = new SingleUserClass($_SESSION['clubKey']);
	$user = $u->user();

	if ($_SESSION['clubKey']->id == $user->id) {
		$customer_name = ($user->name) ? $user->name : '';
		$customer_telephone = ($user->profile->telephone) ? $user->profile->telephone : '';
		$customer_address = ($user->profile->address) ? $user->profile->address : '';
		$customer_post_code = ($user->profile->post_code) ? $user->profile->post_code : '';
		$customer_city = ($user->profile->city) ? $user->profile->city : '';
		$customer_email = ($user->email) ? $user->email : '';
	}
}
$customer_message = '<table class="container600" cellpadding="0" cellspacing="0" border="0" width="100%" style="width:calc(100%);max-width:calc(600px);margin: 0 auto;">
	<tr>
		<td width="100%" style="text-align: left;">
			<table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
				<tr>
					<td style="color:#58585A;padding:0;border-bottom: 2px solid #000;">
						<h1 style="font-size: 32px;line-height: 32px;padding-top: 10px;">Order details:</h1>
						<p style"padding-bottom: 15px; padding-top: 5px;font-family: Arial,sans-serif; font-size: 26px;line-height: 20px;text-decoration:none !important;">';
						$customer_message .= $customer_name. '<br/>';
						$customer_message .= $customer_address .' '. $customer_post_code . ' '. $customer_city. '<br/>';
						$customer_message .= $customer_email . ', '.  $customer_telephone .'.';							
						$customer_message .= '</p>
					</td>
				</tr>
				<tr>
					<td style="padding-top:20px;background-color:#fff;">
						<table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
							<thead>
								<tr>
									<th scope="col" style="padding:5px 5px 5px 0; font-family: Arial,sans-serif; font-size: 24px; line-height:20px;line-height:30px; font-weight: bold;text-align:left;">Orders</th>
									<th scope="col" style="padding:5px 5px 5px 0; font-family: Arial,sans-serif; font-size: 18px; line-height:20px;line-height:30px;text-align:center;">Qft</th>
									<th scope="col" style="padding:5px 5px 5px 0; font-family: Arial,sans-serif; font-size: 18px; line-height:20px;line-height:30px;text-align:center;">Points</th>
								</tr>
							</thead>
							<tbody>';
								foreach ($purchase_data as $key => $val):
								$customer_message .= '<tr style="padding-bottom:10px;">
									<td valign="top" style="font-family: inherit; font-size: 18px; line-height:20px;text-align:left;">' .$val->product_name. '</td>
									<td valign="top" style="font-family: inherit; font-size: 18px; line-height:20px;text-align:center;">'. $val->quantity. '</td>
									<td valign="top" style="font-family: inherit; font-size: 18px; line-height:20px;text-align:center;">'. $val->point. '</td>
								</tr>
								<tr style="font-style: italic;">
									<td colspan="3" valign="top" style="font-family: inherit; font-size: 18px; line-height:20px;">Besked ved køb:</td>
								</tr>
								<tr style="font-style: italic;padding-bottom:30px;">
									<td colspan="3" valign="top" style="font-family: inherit; font-size: 18px; line-height:20px;">' .$val->purchase_notice. '</td>
								</tr>';
								endforeach; 
							$customer_message .= '</tbody>
						</table>
					</td>
				</tr>
			</table>
		</table>';

// For Admin Order Email Confirmation
/*try {

    //Server settings
    //$mail->SMTPDebug = 2;      
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "bording.vista@gmail.com";
    $mail->Password = "XnJ7282A";

    //Sender
    $mail->SetFrom($_SESSION['clubKey']->email, $_SESSION['clubKey']->name);

    //Recipients
    $mail->AddAddress("mlm@bordingvista.com");
    //$mail->AddAddress("andreas@thomsenogco.dk");

    $message = "Order# : ". ' ' .'http://test.bordingvista.com/dev.th-club.com/order/'.$order_id;
    $message .= "\r\n";
    foreach ($purchase_data as $key => $val) {
    	$message .= "Product Id : ". $key ."\r\n";
    	$message .= "Besked ved køb : " . $val ."\r\n";
    }

    // Content
    $mail->isHTML(true); 
    $mail->Subject = "New Order # ". $order_id;
    $mail->Body = $message;

    $mail->send();
    unset($_SESSION['order_id']);
    unset($_SESSION['purchase_data']);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}*/

// For Customer Order Email confirmation
try {

    //Server settings
    //$mail->SMTPDebug = 2;      
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "bording.vista@gmail.com";
    $mail->Password = "XnJ7282A";

    //Sender
    $mail->SetFrom('no-reply@gmail.com','ThomsonClub');

    //Recipients
    $mail->AddAddress($_SESSION['clubKey']->email);
    $mail->AddAddress('ham@fiftytwo.com');
   
    // Content
    $mail->isHTML(true); 
    $mail->Subject = "Order#".$order_id;
    $mail->Body = $customer_message;

    $mail->send();
    unset($_SESSION['order_id']);
    unset($_SESSION['purchase_data']);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


			

<div class="grid-container extra-top-margin extra-bottom-margin extra-top-padding extra-bottom-padding">
	<div class="grid-x align-center">
		<div class="cell small-12 medium-9 large-9 text-center">
			<div class="callout medium-top-margin font-condensed case-upper font-18 notice color-text-primary color-bg-transparent wow pulse" data-closable>
				Tak for dit køb
				<p>You can pick up your bike here at this and this time.</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
				<a href="<?= site_url()?>"><span aria-hidden="true">&times;</span></a>
				</button>
			</div>
		</div>
	</div>
</div>