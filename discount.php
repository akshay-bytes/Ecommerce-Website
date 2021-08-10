<?php
    $code = $_POST['code'];
    $CODE = "OFF20";

    if($code!=$CODE){
        $m=FALSE;
        header("location:cart.php?m1=".$m);
    }else{
        $m=TRUE;
        header("location:cart.php?m1=".$m);
    }
?>