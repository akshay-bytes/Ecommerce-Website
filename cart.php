<!DOCTYPE html>
<?php 
    require "includes/common.php";
    ?>
<html>
    <head>
        <title>Shopping Cart | E-KART</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
      <!--jQuery library-->
      <script src="bootstrap/js/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript-->
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- comment -->
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div> 
            <!--header-->        
        <?php
    include "includes/header.php"
    ?>

    <!-- Main -->
       <!-- Main -->
        <div class="content">
        <div class="container" style="margin-top: 5%">        
        
        <form action="discount.php" class="form-inline" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code Here">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
        <table class="table table-striped table-responsive">
        <?php
        if(isset($_GET['m1'])){
            $disc=$_GET['m1'];
        }

        $sum = 0;
        $user_id = $_SESSION['id'];
        $query = "SELECT  products.id, products.price AS price, products.name AS name 
        FROM users_products JOIN products ON users_products.products_id = products.id WHERE users_products.user_id='$user_id' 
        and status='Added To Cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 0) {?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum = $row["price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] .
                     "</td><td><a href='cart_remove.php?id={$row['id']}' 
                     class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' 
                class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
    </div>
    </div>

        
        <?php   
    include "includes/footer.php";
    ?>
    
    </body>
</html>

