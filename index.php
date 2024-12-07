<?php 
include("header.php");
?>

<div class="slider">
    <img src="assets/images/slider.jpg" class="" height="400vh" width="100%">
    
  </div>

<section >
<div class="blogg">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-3">
        <h2 class="border-bottom border-black pb-3">Shoes</h2>
        
      </div>
<!-- php code starts here -->
   <?php
      $query="select * from addproduct ";
      $res=mysqli_query($con,$query) or die (mysqli_error($con));
      while($row=mysqli_fetch_array($res)){
   ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
        <div class="card text-center mb-3 shadow-lg rounded-4"  style="width: 100%; height: auto;">
          <img src="admin/assets/uploaded-images/products/<?php   
                        echo $row['pimage'];?>" class="card-img-top" alt="..." width="100%" height="200px">
          <div class="card-body">
            <h4 class="card-title pb-2"><?php echo $row['pname'];?></h4>
              <h5 class="pb-2"><del class="text-danger">Pkr:<?php echo $row['oprice'];?></del>
              Pkr:<?php echo $row['nprice'];?></h5>
              
              <a href="cart.php?pid=<?php echo $row[0]?>&action=add" class="btn btn-danger my-1">Add to Cart</a>
              <a href="details.php?pid=<?php echo $row[0];?>" class="btn btn-danger">Details</a>
          </div>
        </div>
      </div>
     
     <?php }?> 

    </div>
  </div>
</div>

</section>

<?php 
include("footer.php");
?>


