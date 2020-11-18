<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="#"/>
        <title>Empty Bottle Liquor Store</title>
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>The best alcohol/tabacco shop.</h1>
                       <h3>Choose your products here!</h3>
                       <br>
                       <a href="#" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/cs.png" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Liquor</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="#">
                               <img src="img/cs.png" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Whiskey</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="#">
                               <img src="img/cs.png" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Vodka</p>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="#">
                               <img src="img/cs.png" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Gin</p>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="#">
                               <img src="img/cs.png" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Tequila</p>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="#">
                               <img src="img/cs.png" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Tabacco</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
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