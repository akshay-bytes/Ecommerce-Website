<?php
// print_r($_GET);exit;
    require("includes/common.php");
    // print_r($_SESSION);exit;
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $products_id = $_GET['id'];
        $user_id = $_SESSION['id'];

        $query = "INSERT INTO users_products (user_id,products_id,status) VALUES ('$user_id','$products_id','Added To Cart')";

        $result = mysqli_query($con,$query) or die(mysqli_error($con));

        header("location:products.php");
        
    }
?>   