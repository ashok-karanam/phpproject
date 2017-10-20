<?php
	session_start();
	require_once('db_config.php'); 
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shopping Cart</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row" style="padding: 50px;">
				<?php
					foreach($_SESSION['cart_arr'] as $value)
					{
						$sql = "SELECT * FROM tbl_prod inner join tbl_catg on tbl_catg.cat_id=tbl_prod.cat_id where pro_id=$value";

						foreach($conn->query($sql) as $row)
						{
							?>
								<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
									<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
										<img src="<?php echo $row['img_name']; ?>" class="img-responsive">
									</div>
									<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
										<ul>
											<li>Name: <?php echo $row['pro_name']; ?></li>
											<li>Product Id: <?php echo $row['pro_id']; ?></li>
											<li>Price: <?php echo $row['price']; ?></li>
										</ul>
									 </div>
									<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
										<form action="" method="post">
											<input type="hidden" value="<?php echo $row['pro_id'];?>" name="pro_id">
											<button type="delete" value="Delete" name="delete_now">Delete</button>
										</form>      
									</div>
								</div>	
							<?php
						}
					}
				?>
			</div>
		</div>
	</body>
</html> 

<?php
	if(isset($_POST['delete_now']))
	{
		$pro_id=(isset($_POST['pro_id']) ? $_POST['pro_id'] : '');
		$key = array_search ($pro_id, $_SESSION['cart_arr']);
		unset($_SESSION['cart_arr'][$key]);
		?>
			<script>
				alert("Product Deleted");
				window.location.href=window.location.href;
			</script>
		<?php
	}
?>
