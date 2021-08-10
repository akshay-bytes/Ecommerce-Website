<?php 
    require "includes/common.php";
    if (isset($_SESSION['email'])) {
        header('location: products.php');
       }
    ?>
<html>
    <head>
        <title>Signup page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
      <!--jQuery library-->
      <script src="bootstrap/js/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript-->
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- comment -->
      <link rel="stylesheet" type="text/css" href="style.css"><!-- comment -->
    </head>
    <body>

    <?php
    include "includes/header.php"
    ?>
        <div class="container">
            <div class="row" style="margin-top: 10%">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel" >
                        <div class="panel-heading">
                            <h1>SIGN UP</h1>
                        </div>
                        <div class="panel-body">
                        <form  action="signup_script.php" method="POST">
                                <div class="form-group">
                                    <input type="first_name" class="form-control" placeholder="First Name" name="first_name" required="true"><!-- comment -->
                                </div>
                                <div class="form-group">
                                    <input type="last_name" class="form-control" placeholder="Last Name" name="last_name" required="true"><!-- comment -->
                                </div>
                                <div class="form-group">  
                                    <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                    <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                    ?>
                            </div>
                                <div class="form-group">
                                    <input type="phone" class="form-control" placeholder="Contact" name="phone" required = "true">
                                    <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                    ?>
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                            </div>
                            <div class="btn-signup">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                                <div class="panel-footer"><p>Already have an account? <a href="login.php">Login</a></p></div>
                            </form><br/>
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

