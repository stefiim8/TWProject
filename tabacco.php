<?php
    session_start();
    require 'check_if_added.php';
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
                    <h1>Welcome to Empty Bottle Liqor Store!</h1>
                    <p>We have the best products for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=29">
                                <img src="img/Tabacco/cohiba-white-tigarete.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cohiba White</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=29" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=30">
                                <img src="img/Tabacco/tigarete-cigaronne-black-royal-slims-triple-hollow-filter.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cigaronne Slims</h3>
                                    <p>Price: 25 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=30" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=31">
                                <img src="img/Tabacco/tigarete-davidoff-classic.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Classic</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=31" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=32">
                                <img src="img/Tabacco/tigarete-davidoff-reach-blue.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Blue</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=32" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=33">
                                <img src="img/Tabacco/tigarete-davidoff-shape-evolved-blue.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Shape Evolved Blue</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=33" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=34">
                                <img src="img/Tabacco/tigarete-davidoff-silver.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Silver Classic</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=34" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=35">
                                <img src="img/Tabacco/tigarete-davidoff-slim-silver-.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Superslim Silver</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=35" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=36">
                                <img src="img/Tabacco/tigarete-davidoff-superslim-rose.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Superslim Rose</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=36" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=37">
                                <img src="img/Tabacco/tigari-brass-red-100's.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Brass Red 100's</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=37" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=38">
                                <img src="img/Tabacco/tigari-davidoff-classic-slim-sl-line.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Classic Slim</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=38" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=39">
                                <img src="img/Tabacco/tigari-davidoff-gold.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Gold Classic</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=39" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=40">
                                <img src="img/Tabacco/tigari-davidoff-reach-silver.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Reach Silver</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=40" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=41">
                                <img src="img/Tabacco/tigari-davidoff-shape-evolved-red.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Shape Evolved Red</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=41" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=42">
                                <img src="img/Tabacco/tigari-davidoff-slim-gold.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Superslim Gold</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=42" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=43">
                                <img src="img/Tabacco/tigari-davidoff-super-slim-magenta.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Davidoff Superslim Magneta</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=43" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=44">
                                <img src="img/Tabacco/tigari-king-original-red-100's.jpg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>King Original Red 100's</h3>
                                    <p>Price: 20 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=44" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
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
