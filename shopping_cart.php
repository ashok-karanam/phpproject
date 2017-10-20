<?php
	session_start();
	$pro_id = $_SESSION['cart_arr'];
	foreach($pro_id as $value) 
	{
		echo $value;
	} 
?>
