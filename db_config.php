<?php
$connection = mysqli_connect("http://e-commdb.database.windows.net","ashok","ironman@13","shopping");
if (mysqli_connect_errno())
	{
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}
?>
