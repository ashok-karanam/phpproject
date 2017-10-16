<?php
    $prod_id=(isset($_REQUEST['prod_id']) ? $_REQUEST['prod_id'] : '');
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
				<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"></div>
             </div>
         </div>
    </body>
</html>
