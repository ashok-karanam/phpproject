<?php
	session_start();
	$prod_id=$_SESSION['pro_id'];
echo $prod_id;
	require_once('db_config.php'); 
	$sql = "SELECT * FROM tbl_prod inner join tbl_catg on tbl_catg.cat_id=tbl_prod.cat_id where pro_id=$prod_id";
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
			  	foreach($conn->query($sql) as $row)
				{
				   ?>
                        	        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
  				       	<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
        				     	<img src="<?php echo $row['img_name']; ?>" class="img-responsive">
        				 </div>
         			         <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
     	    				      <li>Name: <?php echo $row['pro_name']; ?></li>
	    				      <li>Price: <?php echo $row['pro_id']; ?></li>
	     				      <li>Price: <?php echo $row['price']; ?></li>
       				         </div>
         			         <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
       				         </div>
					</div>	
				<?php
				}
				?>
                  </div>
         </div>
    </body>
</html> 
