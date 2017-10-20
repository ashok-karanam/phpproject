<?php
	session_start();
if(empty($_SESSION['cart_arr']))
{
	echo "empty";
}
else
{
	echo "t";
} 
?>
