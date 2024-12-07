<?php
include("conf.php");

if(isset($_GET['pid'])){
    $pid=$_GET['pid'];
    $query="select * from orders where id='$pid'";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));

    if($res){
        $row=mysqli_fetch_array($res);
        $command="Order Sent";
        $query1="update orders set OrderStatus='$command' where id='$pid'";
        $psent=mysqli_query($con,$query1) or die(mysqli_error($con));
        if($psent){
            $_SESSION['psent'];
            echo"<script>alert('Product Sent')
            document.location='orders.php'</script>";
            
        }
       
    }else
    {
        header("location:orders.php");
    }
}



?>