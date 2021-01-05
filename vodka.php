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
                            <a href="product.php?id=61">
                                <img src="img/Vodka/Absolut_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Absolut Vodka</h3>
                                    <p>Price: 70 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=61" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="product.php?id=62">
                                <img src="img/Vodka/Amsterdam_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Amsterdam Vodka</h3>
                                    <p>Price: 60 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=62" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=63">
                                <img src="img/Vodka/Belvedere_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Belvedere Vodka</h3>
                                    <p>Price: 80 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=63" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=64">
                                <img src="img/Vodka/Ciroc_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ciroc Vodka</h3>
                                    <p>Price: 80 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=64" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=65">
                                <img src="img/Vodka/Eddy_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Eddy Vodka</h3>
                                    <p>Price: 90 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=65" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=66">
                                <img src="img/Vodka/Georgi_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Georgi Vodka</h3>
                                    <p>Price: 50 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=66" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=67">
                                <img src="img/Vodka/Grey_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Grey Vodka</h3>
                                    <p>Price: 80 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=67" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=68">
                                <img src="img/Vodka/Ketel_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ketel Vodka</h3>
                                    <p>Price: 90 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=68" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=69">
                                <img src="img/Vodka/Pinnacle_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Pinnacle Vodka</h3>
                                    <p>Price: 60 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=69" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=70">
                                <img src="img/Vodka/Platinum_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Platinum Vodka</h3>
                                    <p>Price: 90 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=70" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=71">
                                <img src="img/Vodka/Skyy_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Skyy Vodka</h3>
                                    <p>Price: 70 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=71" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=72">
                                <img src="img/Vodka/Smirnoff_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Smirnoff Vodka</h3>
                                    <p>Price: 100 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=72" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=73">
                                <img src="img/Vodka/Stoli_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Stoli Vodka</h3>
                                    <p>Price: 90 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=73" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=74">
                                <img src="img/Vodka/Svedka_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Svedka Vodka</h3>
                                    <p>Price: 60 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=74" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=75">
                                <img src="img/Vodka/Taaka_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Taaka Vodka</h3>
                                    <p>Price: 80 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=75" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div><div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product.php?id=76">
                                <img src="img/Vodka/Tito_Vodka.jpeg" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Tito Vodka</h3>
                                    <p>Price: 60 RON</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=76" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
