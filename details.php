<?php 
include("header.php");

 if(isset($_GET['pid'])){
    $pid=$_GET['pid'];

    $query="select * from addproduct where id='$pid'";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($res);
 }

?>

<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <h2 class="ps-3">Details</h2>
                <hr>
            </div>
            <div class="col-md-12">
            <div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="admin/assets/uploaded-images/products/<?php   
                        echo $row['pimage'];?>" class=" rounded-start" alt="..." height="auto" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h4 class="card-title py-2 fs-5">Product Name: <b class="p-2 py-2"><u><?php echo $row['pname'];?></u></b></h4></h6>
        <p class="card-text my-3 fs-5">Discription: <?php echo $row['discription'];?>. </p></p>
      <h6 class="fs-4 py-2">Price: <del class="text-danger">Pkr:<?php echo $row['oprice'];?></del> >
      Pkr:<?php echo $row['nprice'];?></h6>
        <a href="cart.php?pid=<?php echo $row[0]?>&action=add" class="btn btn-primary my-1">Add to Cart</a>
      </div>
    </div>
  </div>
</div>


            </div>
        </div>
    </div>
</div>



<footer class="bg-blue mt-1 btm">
  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <div class=" ">
          <p class="fpara"> Designed & Created By Mohsin Copyrights &copy; By 2024 </p>
        </div>
      </div>
     
    </div>
  </div>
</footer>


