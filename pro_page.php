<?php
    	$prod_id=(isset($_REQUEST['prod_id']) ? $_REQUEST['prod_id'] : '');
	require_once('db_config.php'); 
	$sql = "SELECT pro_name FROM tbl_prod inner join tbl_catg on tbl_catg.cat_id=tbl_prod.cat_id where pro_id=prod_id";
	foreach($conn->query($sql) as $row)
	{
    		echo "<li>{$row['pro_name']}</li>";
	}
?>
