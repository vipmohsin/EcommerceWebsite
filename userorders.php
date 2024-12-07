<?php
include("header.php");
  
 if(isset($_SESSION['Cname'])){
$UserEmail=$_SESSION['Cemail'];
    $query="select * from orders where buyeremail='$UserEmail'";
    $res=mysqli_query($con,$query) or die (mysqli_error($con));
     $count=mysqli_num_rows($res);
    //  echo $count.$UserEmail;
 }


$sno=1;



?>

<div class="container">
    <div class="row">
       <h1 class="my-3">
        My Orders
       </h1>
<div class="col-md-12 table-responsive">

<?php if($count>0){
  $sno=1

  ?>
        <table class="table table-striped table-bordered my-3 text-wrap">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Products</th>
      <th scope="col">Total</th>
      <th scope="col">Cell</th>
      <th scope="col">Status </th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php while ($row=mysqli_fetch_array($res)) {
     
     
    ?>
    <tr row-span>
      <th scope="row"><?php echo $sno++;?></th>
      <td class=" text-wrap" ><?php echo $row['UserItems'];?></td>
      <td><?php echo $row['amount'];?></td>
      <td><?php echo $row['cell'];?></td>
      <td><?php echo $row['OrderStatus'];?></td>
    </tr>
    <?php }?>

  </tbody>
</table>
<?php }else{ echo '<h3>You Dont Have Placed any Orders Yet!</h3>';}?>

  
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
  




 

 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>