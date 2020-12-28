<?php 
	$orderC = new OrderClass($_SESSION['clubKey']);
	$myorder = $orderC->myorder();
	echo "<pre>";
	print_r($myorder);
	//exit();

?>