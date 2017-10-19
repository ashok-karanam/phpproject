<?php
    	$prod_id=(isset($_REQUEST['prod_id']) ? $_REQUEST['prod_id'] : '');
	require_once('db_config.php'); 
	$sql = "SELECT * FROM tbl_prod inner join tbl_catg on tbl_catg.cat_id=tbl_prod.cat_id where pro_id=$prod_id";
	
    		echo "<li>{$row['pro_name']}</li>";
	}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
		  <div class="row">
			<?php
			  	foreach($conn->query($sql) as $row)
				{
					?>
							<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
							   <img src="<?php echo $row['img_name']; ?>" class="img-responsive">
						      </div>
						      <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
							      <ul>
									<li>Name: <?php echo $row['pro_name']; ?></li>
									<li>Storage: <?php echo $row['storage']; ?></li>
									<li>Memory: <?php echo $row['memory']; ?></li>
									<li>Resolution: <?php echo $row['screen_resolution']; ?></li>
									<li>Price: <?php echo $row['price']; ?></li>
								</ul>
						      </div>
			  		<?php
				}
			?>
                  </div>
         </div>
    </body>
</html>
