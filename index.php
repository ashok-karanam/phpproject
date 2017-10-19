<?php
	require_once('db_config.php'); 
	$sql = "SELECT * FROM customers";
	foreach($conn->query($sql) as $row)
	{
    		echo "<li>{$row['NAME']}</li>";
	}
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
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
				<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
				<?php
					$items=[$description0,$description1,$description2,$description3,$description4,$description5,$description6,$description7,$description8];
					for($i = 0; $i < 9; $i++)
					{
						?>
							<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="margin-top:50px;padding:30px;">
							    	<a href="shopping_cart.php?prod_id=<?php echo $i; ?>">
									<img src="<?php echo $i; ?>.jpg" class="img-responsive">
								</a>
								<?php
									for($j = 0; $j <= 4; $j++)
									 {
										?>
											<p><?php echo $items[$i][$j]; ?><p>
										<?php
									 }
								?>
								<a href="" class="btn btn-primary">Add to Cart</a>
							</div>
						<?php
					}
				?>
                    
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"></div>
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"></div>
                </div>
			</div>
		</div>
	</div>
    </body>
	//create table tbl_prod (pro_id int primary key,cat_id int,pro_name varchar(255),storage varchar(20),memory varchar(20),price varchar(10),screen_resolution varchar(30),foreign key(cat_id) references tbl_catg(cat_id));
</html>
