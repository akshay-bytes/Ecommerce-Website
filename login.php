
<?php
    require 'includes/common.php';
?>

<html>
    <head>
        <title>Login page</title>
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
    
        <div class="container" style="margin-top: 10%">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                                <!-- Main -->
                            <form class="form" action="login_script.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                                </div>
                                <div class="form-group">
                                <?php
                                    if(isset($_GET['m1'])){
                                    echo $_GET['m1'];
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
                                </div>

                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="Signup.php">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        
    <?php   
    include "includes/footer.php";
    ?>
    </body>
</html>
