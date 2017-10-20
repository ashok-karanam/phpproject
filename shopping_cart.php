<?php
	session_start();
	foreach ($_SESSION['cart_arr'] as $value) 
	{
		echo $value;
	} 
?>
