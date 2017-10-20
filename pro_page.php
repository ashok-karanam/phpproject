<?php
	session_start();
    	$prod_id=(isset($_REQUEST['prod_id']) ? $_REQUEST['prod_id'] : '');
	require_once('db_config.php'); 
	$sql = "SELECT * FROM tbl_prod inner join tbl_catg on tbl_catg.cat_id=tbl_prod.cat_id where pro_id=$prod_id";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Infortmation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
		  <div class="row" style="padding: 50px;">
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
							      <div>
								<form action="" method="post">
								<input type="hidden" value="<?php echo $row['pro_id'];?>" name="pro_id">
								<input type="submit" value="Buy Now" name="buy_now">
								</form>      
							      </div>
						      </div>
			  		<?php
				}
			?>
                  </div>
         </div>
    </body>
</html>
<?php
	if(isset($_POST['buy_now']))
	{
		$pro_id=(isset($_POST['pro_id']) ? $_POST['pro_id'] : '');
		array_push($cart_arr,$pro_id);
		$_SESSION['cart_arr']=$cart_arr;
	}
	foreach ($_SESSION['cart_arr'] as $value) 
	{
		echo $value;
	}
?>
