<?php
	session_start();
  $lname=$_SESSION['pro_id'];
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
    <div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
    <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
     <img src="3.jpg" class="img-responsive">
    </div>
    <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
    
    </div>
     <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
    </div>
    </div>
    </body>
</html> 
