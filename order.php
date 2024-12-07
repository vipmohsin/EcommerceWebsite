<?php 
include('header.php');
	
if(isset($_POST['corder'])){
    $items=$_POST['items'];
    $amount=$_POST['amount'];
    $Cemail=$_SESSION['Cemail'];
    $unm=$_POST['uname'];
    $em=$_POST['email'];
    $cell=$_POST['cell'];
    $cntry=$_POST['country'];
    $city=$_POST['city'];
    $postal=$_POST['postal'];
    $adress=$_POST['adress'];
    $lmark=$_POST['landmark'];
    $useritems=$_POST['useritems'];

    $query="insert into orders values('','$items','$useritems','$amount','$Cemail','$unm','$em','$cell','$cntry','$city','$postal','$adress','$lmark',now(),'pending')";
    $res=mysqli_query($con,$query) or die (mysqli_error($con));
    if($res){
        echo "<script>alert('Your Order has been placed sucessfully')
        </script>";?>
<h1 class="text-center py-3 my-1">Your Order Has been Placed sucessfully.</h1>
<h2 class="text-center py-3 my-1">Thank You <?php echo $unm;?> For ordering from Our Website.</h2>
<h3 class="text-center py-3 my-1">You Have purchased these products:</h3>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      
<table class="table table-dark text-center text-white">
  <thead>
    <tr class="text-center align-middle">
      <th scope="col">Sno.</th>
      <th scope="col">Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php $sno=1;
$gtotal=0; 
$shipping=250;
$fshiiping=number_format($shipping);
$items=array();


  
   foreach ($_SESSION['cart'] as $id => $value) {
	   $query="SELECT * FROM addproduct WHERE id='$id'";
	   $res=mysqli_query($con,$query) or die(mysqli_error($con));
	   while ($row=mysqli_fetch_array($res)) {
      $gtotal+=$row['nprice']*$value;
      $fgtotal=number_format($gtotal);
      $total=$gtotal+$shipping;
      $ftotal=number_format($total);
      $items[]="Id=".$row['id'].$row['pname']."(".$value.")";
    
     
     ?>
    <tr class="text-center align-middle">
      <th scope="row" class="text-left"><?php echo $sno++;?></th>
      <td><?php echo $row['pname'];?></td>
      <td><img src="admin/assets/uploaded-images/products/<?php   
                        echo $row['pimage'];?>" class="card-img-top" alt="..." width="70px" height="60px"></td>
      <td><?php echo $value;?></td>
      <td><?php echo $row['nprice']*$value;?></td>
    </tr>
<?php 
}}
$allitems=implode(" , ",$items);
//  echo $allitems;  
//   echo "Aount To Pay=". $ftotal;
?>
<tr class="text-center align-middle">
  
  <td></td>
  <td></td>
  <td></td>
  <td>
  </td>
  <td >
  PKR:<?php echo $gtotal;?>
  </td>
</tr>
<tr class="text-center align-middle">
  <td></td>
  <td></td>
  <td></td>
  <td></td>

    <td><a href="index.php" class="btn btn-primary">Go To Home</a></td>
</tr>
  </tbody>
</table>

</div>
  </div>
</div>
<?php }else{
     echo "<script>alert('something went wrong')
     document.location='checkout.php'</script>";
 }

}
if($gtotal==0){
	header("location:index.php");
   }else{
    unset($_SESSION['cart']);
   }



?>
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