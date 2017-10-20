<?php
	session_start();
	require_once('db_config.php'); 
$pro_id=$_SESSION['cart_arr'];
				foreach($pro_id as $value) 
				{
					echo $value;
				} 
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
			  		
			?>
                  </div>
         </div>
    </body>
</html> 

<?php
	if(isset($_POST['delete_now']))
	{
		unset($_SESSION['pro_id']);
		unset($prod_id);
		?>
			<script>
				alert("Product Deleted");
				window.location.href=window.location.href;
			</script>
		<?php
		
	}
?>
