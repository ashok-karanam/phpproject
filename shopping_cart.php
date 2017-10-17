<?php
	include("db_config.php");
    	$prod_id=(isset($_REQUEST['prod_id']) ? $_REQUEST['prod_id'] : '');

	$stmt = $conn->prepare("select * from customers"); 
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
		  <div class="row">
		      <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                           <img src="<?php echo $prod_id; ?>.jpg" class="img-responsive">
                      </div>
	              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
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
		      for($i = 0; $i <= 4; $i++)
			{
			   ?>
			   <p><?php echo $items[$prod_id][$i]; ?><p>
			   <?php		 
			}
		       ?>
		      </div>
                  </div>
         </div>
    </body>
</html>
