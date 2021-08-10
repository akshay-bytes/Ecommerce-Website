<?php
    require("includes/common.php");
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $products_id = $_GET["id"]; 
        $user_id = $_SESSION['id'];
        
        $query = "DELETE FROM users_products WHERE products_id='$products_id' AND user_id='$user_id' ";
        $result = mysqli_query($con , $query) or die(mysqli_error($con));
        header("location:cart.php");
    }
?>