<?php
$connection = mysqli_connect("e-commdb.database.windows.net","shopping","ironman@13","ashok");
if (mysqli_connect_errno())
	{
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}
?>
