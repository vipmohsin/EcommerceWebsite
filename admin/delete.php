<?php
include("conf.php");

if(isset($_GET['pid'])){
    $pid=$_GET['pid'];

    $query="delete from addproduct where id='$pid'";
    $res=mysqli_query($con,$query)or die (mysqli_error($res));

    if($res){
        echo"<script>alert('product deleted')
    document.location='view-products.php'</script>";
    }
   

}

?>