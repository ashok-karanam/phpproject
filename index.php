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
					$description0=["KTM Duke","CC : 250 ","Mileage : 35kmpl","Engine : dual Exhaust","Cost : $2000"];
					$description1=["HP Pavilion","Harddisk : 20 TB ","RAM : 124GB","Screen Resolution : 8k","Cost : $1500"];
					$description2=["Mac Book Pro 2.0","Harddisk : 15 TB ","RAM : 116GB","Screen Resolution : 4k","Cost : $1000"];
					$description3=["Dell Inspiron","Harddisk : 10 TB ","RAM : 64GB","Screen Resolution : 4k","Cost : $800"];
					$description4=["IPhone 6S","Harddisk : 128 GB ","RAM : 12GB","Screen Resolution : 4k","Cost : $1100"];
					$description5=["Surface Pro 1.0","Harddisk : 20 TB ","RAM : 124GB","Screen Resolution : 8k","Cost : $1200"];
					$description6=["Nokia 6","Harddisk : 64 GB ","RAM : 8GB","Screen Resolution : 8k","Cost : $900"];
					$description7=["ACER","Harddisk : 200 TB ","RAM : 1024GB","Screen Resolution : 8k","Cost : $10000"];
					$description8=["ASUS","Harddisk : 200 TB ","RAM : 1024GB","Screen Resolution : 8k","Cost : $10000"];
					$items=[$description0,$description1,$description2,$description3,$description4,$description5,$description6,$description7,$description8];
					for($i = 0; $i < 9; $i++)
					{
						?>
							<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="margin-top:50px; width: 270px; height 270px;">
							    	<img src="<?php echo $i; ?>.jpg" class="img-responsive">
								<?php
									for($j = 0; $j <= 4; $j++)
									 {
										?>
											<p><?php echo $items[$i][$j]; ?><p>
										<?php
									 }
								?>
								<a href="shopping_cart.php?prod_id=<?php echo $j; ?>" class="btn btn-primary">Add to Cart</a>
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
</html>
