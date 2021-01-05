<?php
    session_start();
	    require 'connection.php';
		require 'check_if_added.php';
	$id= isset( $_GET['id']) ? $_GET['id'] : null;
	if(!$id) {
		?>
			<script>
			window.alert("Missing product id!!");
			window.location.href = "index.php";
			</script>
		<?php
	}
	
    $query = "select* from items where id=' $id'";
    $product_query = mysqli_query($con,$query) or die(mysqli_error($con));
    $product = mysqli_fetch_assoc($product_query);
    $sum=0;
	
	if(!$product) {
		?>
			<script>
				window.alert("Product not found!");
				window.location.href = "index.php";
			</script>
		<?php
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Simple Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
				<div class="jumbotron">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="cart.php">
									<img src="img/<?php echo $product['image']?>" alt="">
								</a>
								<center>
									<div class="caption">
										<h3><?php echo $product['name']?></h3>
										<p>Price: <?php echo $product['price'] ?> RON</p>
										<?php if(!isset($_SESSION['email'])){  ?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											}
											else{
												if(check_if_added_to_cart(1)){
													echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
												}else{
													?>
													<a href="cart_add.php?id=<?php echo $id;?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
													<?php
												}
											}
											?>
										
									</div>
								</center>
							</div>
						</div>
						<div class="col-md-9 col-sm-6">
							 <h1><?php echo $product['name']?></h1>
							<p><?php echo $product['description']?></p>
						</div>
					</div>
				</div>
            </div>
			<div class="container">
			  <h2>Recommended</h2>  
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators" style="margin-top:10%">
				  <li data-target="#myCarousel" data-slide-to="0" class="active" style="background: black"></li>
				  <li data-target="#myCarousel" data-slide-to="1" style="background: black"></li>
				  <li data-target="#myCarousel" data-slide-to="2" style="background: black"></li>
				</ol>
				<?php if($id >=1 and $id<= 16) : ?>
				<div class="carousel-inner">
				  <div class="item active">
					<img src="img/Moet_&_Chandon_Imperial_Brut_Champagne.jpeg" alt="RUM" style="width:33%; margin-left:35%">
				  </div>

				  <div class="item">
					<img src="img/Josh_Cellars_Cabernet_Sauvignon.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				
				  <div class="item">
					<img src="img/Cavit_Pinot_Grigio.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				</div>
				
				<?php endif; ?>
				
				<?php if($id >= 17 and $id <= 28) : ?>
				<div class="carousel-inner">
				  <div class="item active">
					<img src="img/Bacardi-Black-Rum.jpg" alt="WHISKEY" style="width:33%; margin-left:35%">
				  </div>

				  <div class="item">
					<img src="img/Bacardi-Gold-Rum.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				
				  <div class="item">
					<img src="img/Bacardi-Limon.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				</div>
				
				<?php endif; ?>
				
				<?php if($id >=29 and $id<= 44) : ?>
				<div class="carousel-inner">
				  <div class="item active">
					<img src="img/Davidoff_Blue.jpg" alt="TABACCO" style="width:33%; margin-left:35%">
				  </div>

				  <div class="item">
					<img src="img/Brass_Red_100's.jpg" alt="" style="width:33%; margin-left:35%">
				  </div>
				
				  <div class="item">
					<img src="img/King_Original_Red_100's.jpg" alt="" style="width:33%; margin-left:35%">
				  </div>
				</div>
				
				<?php endif; ?>
				
				<?php if($id >=45 and $id<= 60) : ?>
				<div class="carousel-inner">
				  <div class="item active">
					<img src="img/Bacardi-Black-Rum.jpg" alt="WHISKEY" style="width:33%; margin-left:35%">
				  </div>

				  <div class="item">
					<img src="img/Bacardi-Gold-Rum.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				
				  <div class="item">
					<img src="img/Bacardi-Limon.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				</div>
				
				<?php endif; ?>
				
				<?php if($id >=61 and $id<= 76) : ?>
				<div class="carousel-inner">
				  <div class="item active">
					<img src="img/Absolut_Vodka.jpeg" alt="VODKA" style="width:33%; margin-left:35%">
				  </div>

				  <div class="item">
					<img src="img/Skyy_Vodka.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				
				  <div class="item">
					<img src="img/Platinum_Vodka.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				</div>
				
				<?php endif; ?>
				
				<?php if($id >=77 and $id<= 92) : ?>
				<div class="carousel-inner">
				  <div class="item active">
					<img src="img/Hendrick's_Gin.jpeg" alt="Gin" style="width:33%; margin-left:35%">
				  </div>

				  <div class="item">
					<img src="img/Empress_Gin.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				
				  <div class="item">
					<img src="img/Bombay_Sapphire.jpeg" alt="" style="width:33%; margin-left:35%">
				  </div>
				</div>
				
				<?php endif; ?>

				<a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background: white">
				  <span class="glyphicon glyphicon-chevron-left" style="color: black"></span>
				  <span class="glyphicon glyphicon-chevron-left" style="color: black"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next" style="background: white">
				  <span class="glyphicon glyphicon-chevron-right" style="color: black"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			</div>
    
            
            <br><br><br><br><br><br><br><br>
            <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright © Store SRL 2020. All Rights Reserved.</p>
                   <p>This website is developed by Stefan | Adrian | Cristi</p>
                   <p>Contact: +40732423242 | Email: EBLStore@store.ro</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
