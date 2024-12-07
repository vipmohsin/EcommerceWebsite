<?php
include("conf.php");


if(isset($_POST['btn'])){
  $cat=$_POST['cat'];
  $pnm=$_POST['pname'];
  $op=$_POST['oprice'];
  $np=$_POST['nprice'];
  $dis=$_POST['pdiscrip'];

  $pimg=$_FILES['pimg']['name'];
  $tmpname=$_FILES['pimg']['tmp_name'];

  $destination="assets/uploaded-images/products/".$pimg;
  $upload=move_uploaded_file($tmpname,$destination);


  $query="insert into addproduct values('','$cat','$pnm','$op','$np','$dis','$pimg' ,now())";
  $res=mysqli_query($con,$query) or die (mysqli_error($res));


  if($res){
    echo"<script>alert('product stored')
    document.location='Home.php'</script>";
  }else{
    echo"<script>alert(' product not stored')
    document.location='Home.php'</script>";
  }




}

?>