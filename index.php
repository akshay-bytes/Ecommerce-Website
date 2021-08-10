<?php 
    require "includes/common.php";
    if (isset($_SESSION['email'])) {
        header('location: products.php');
       }
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
    
    <title> Bootstrap </title>
    <link rel="stylesheet" type="text/css" href="style.css"><!-- comment -->
  </head>
  
  <body> 

  <?php
    include "includes/header.php"
    ?>   
        <div id="banner_image">
            
            <div class="container-fluid">
                
                <center>
                
                    <div id="banner_content">
                    <a href="products.php" class = "btn btn-danger btn-lg active" >
                        <b>Shop Now</b>
                    </a>
                </div>
                
                </center>
            
            </div>
        </div>
            
        <?php   
    include "includes/footer.php";
    ?>
    </body>
</html>
