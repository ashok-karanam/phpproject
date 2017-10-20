<?php
	require_once('db_config.php'); 
	$sql = "SELECT * FROM tbl_prod";
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Shopping cart</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
					<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
					</div>
					<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
						<?php
							foreach($conn->query($sql) as $row)
							{
								?>
									<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="margin-top:50px;padding:30px;">
										<a href="pro_page.php?prod_id=<?php echo $row['pro_id']; ?>">
											<img src="<?php echo $row['img_name']; ?>" class="img-responsive">
										</a>
										<ul>
											<li>Name: <?php echo $row['pro_name']; ?></li>
											<li>Storage: <?php echo $row['storage']; ?></li>
											<li>Memory: <?php echo $row['memory']; ?></li>
											<li>Resolution: <?php echo $row['screen_resolution']; ?></li>
											<li>Price: <?php echo $row['price']; ?></li>
										</ul>
										<a href="" class="btn btn-primary">Add to Cart</a>
									</div>
								<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!--create table tbl_prod (pro_id int primary key,cat_id int,pro_name varchar(255),storage varchar(20),memory varchar(20),price varchar(10),screen_resolution varchar(30),foreign key(cat_id) references tbl_catg(cat_id));-->
</html>
