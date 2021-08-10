<!DOCTYPE html>
<?php 
    require "includes/common.php";
    ?>
<html>
  <head>     
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
      <!--jQuery library-->
      <script src="bootstrap/js/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript-->
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- comment -->
    
    <title>List of Products</title>
    <link rel="stylesheet" type="text/css" href="style.css"><!-- comment -->
  </head>
  
  <body>
  <?php
    include "includes/header.php";
    ?>
      <script>
          alert("Get 20% Discount on every Products USE CODE 20OFF");
          </script>
<div class="container">
          <div class="jumbotron">
              
              <h1>Welcome to our Lifestyle Store!</h1> 
              <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                 have all in one place.</p>
          </div>
</div>
<div class="container">         
        <div class="row text-center">
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <img src="./img/1.jpg" alt="Responsive image" style="height: 168.33px"/>
                        <div class="caption">
                            <h3>Cannon EOS</h3> 
                            <p>Price:Rs.36000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } 
                                 else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/2.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>Sony DSLR</h3> 
                            <p>Price:Rs.40000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/3.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>Sony DSLR</h3> 
                            <p>Price:Rs.50000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/4.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>Olympus DSLR</h3> 
                            <p>Price:Rs.80000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
        </div>
          
        <div class="row text-center">
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/9.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>Titan Model#301</h3> 
                            <p>Price:Rs.13000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/10.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>Titan Model#201</h3> 
                            <p>Price:Rs.3000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/11.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>HMT Milan</h3> 
                            <p>Price:Rs.8000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/12.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>Faber Luba#111</h3> 
                            <p>Price:Rs.18000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
        </div>
    
    <div class="row text-center" style="margin-bottom: 5%">
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/5.jpg" alt="Responsive image" style="height: 168.33px"/>
                        <div class="caption">
                            <h3>H&W</h3> 
                            <p>Price:Rs.800.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/6.jpg" alt="Responsive image"/>
                        <div class="caption">
                            <h3>Luis Phil</h3> 
                            <p>Price:Rs.1000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/7.jpg" alt="Responsive image" style="height: 168.33px"/>
                        <div class="caption">
                            <h3>John Zok</h3> 
                            <p>Price:Rs.1500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                                <img src="./img/8.jpg" alt="Responsive image" style="height: 168.33px"/>
                        <div class="caption">
                            <h3>Jhalsani</h3> 
                            <p>Price:Rs.1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy 
                                Now</a></p>
                                 <?php
                                 } else {
                                 ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block 
                                btn-primary">Add to cart</a>
                                 <?php
                                 }
                                 ?>
                        </div>
                          </div>
                      </div>
        </div>   
</div> 
      
<?php   
    include "includes/footer.php";
    ?>
      
    </body>
</html>

