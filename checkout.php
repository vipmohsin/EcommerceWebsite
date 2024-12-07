<?php 
include('header.php');
	if(!isset($_SESSION['Cname'])){
    // echo "<script>alert('You Need to Login To procedd further')
    // document.location='user/login.php'</script>";
    header("location:user/login.php");
  }




?>
<!DOCTYPE html>

  <div class="container py-5 h-100">
    <div class="row justify-content-center  h-100 ">
      <h1 class="pb-3">Checkout Form</h1>
      
      
      <div class="col-12 col-lg-6 col-xl-6  h-100">
        <div class="card shadow-2-strong card-registration" style="border-radius: 25px; ">
          <div class="card-body p-4 p-md-5 bg-dark-subtle ">
          <h3 class="mb-2 pb-2 pb-md-2 mb-md-2 fs-2">Products</h3>
<table class="table "  >
  <thead>
    <tr class="text-center align-middle">
      <th scope="col">Sno.</th>
      <th scope="col">Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody class="overflow-auto" style="height:20rem;">
  <?php $sno=1;
$gtotal=0; 
$shipping=250;
$fshiiping=number_format($shipping);
$items=array();
$useritems=array();


  
   foreach ($_SESSION['cart'] as $id => $value) {
	   $query="SELECT * FROM addproduct WHERE id='$id'";
	   $res=mysqli_query($con,$query) or die(mysqli_error($con));
	   while ($row=mysqli_fetch_array($res)) {
      $gtotal+=$row['nprice']*$value;
      $fgtotal=number_format($gtotal);
      $total=$gtotal+$shipping;
      $ftotal=number_format($total);
      $items[]="Id=".$row['id'].$row['pname']."(".$value.")";
      $useritems[]=$row['pname']."(".$value.") =".$gtotal;
    
     
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
$allitems=implode(" , \n "  ,$items);
$alluseritems=implode(" , \n "  ,$useritems);

// echo $_SESSION['Cemail'];

//  echo $allitems;  
//   echo "Aount To Pay=". $ftotal;
?>
<tr>
  
  <td></td>
  <td></td>
  <td></td>
  <td>
  </td>
  <td>
  PKR:<?php echo $gtotal;?>
  </td>
</tr>
  </tbody>
</table>
<div class="card" style="width: 100%;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item cspan1">Subtotal: <b class="text-right cspan"> <?php echo $fgtotal;?>pkr</b></li>
    <li class="list-group-item">Shipping: <b class="text-right cspan"> <?php echo $shipping;?>pkr</b></li>
    <li class="list-group-item">Total: <b class="text-right cspan"> <?php echo $ftotal;?>pkr</b></li>
    <li class="list-group-item"><b>Payment : Cash On Delivery (COD)</b></li>
  </ul>
  
</div>



          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px; ">
          <div class="card-body p-4 p-md-5 bg-dark-subtle">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 fs-2">Details</h3>

            
            <form  method="post" action="order.php">
                <input type="text" hidden value="<?php echo $allitems;?>" name="items">
                <input type="text" hidden value="Amount To Pay: <?php echo $ftotal;?>" name="amount">
                <input type="text" hidden value=" <?php echo $_SESSION['Cemail'];?>" name="Cbuyer">
                <input type="text" hidden value=" <?php echo $alluseritems;?>" name="useritems">
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                  
                    <input type="text" id="firstName" class="form-control " value required name="uname" placeholder="Name"/>
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
               
                    <input type="text" id="lastName" class="form-control " value required name="email" placeholder="Email"/>
                   
                  </div>

                </div>
              </div>

              <div class="row">

                <div class="col-md-6 mb-3 pb-2">

                <div data-mdb-input-init class="form-outline">
              
                     <input type="number" id="phoneNumber" class="form-control " value required name="cell"  placeholder="Phone"/>
               
                </div>
                </div>
                <div class="col-md-6 mb-4 d-flex align-items-center">

        <div data-mdb-input-init class="form-outline datepicker w-100">
                <select class="form-select" aria-label="Default select example" name="country" required placeholder="Country">
                 <option value="Pakistan">Pakistan</option>
                </select>
  
        </div>

</div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-3 pb-2" >

                <div data-mdb-input-init class="form-outline">
                <select class="form-select" aria-label="Default select example" name="city" placeholder="Country">
<option value="Karachi">Karachi</option>
<option value="Lahore">Lahore</option>
</select>
                     
                </div>

                </div>
                <div class="col-md-6 mb-4">

<div data-mdb-input-init class="form-outline">

  <input type="text" id="firstName" class="form-control "   name="postal" placeholder="Postal Code (Optional)"/>
  
</div>

</div>
       
              </div>
              <div class="row">
                <div class="col-md-12 mb-4">

                  <div data-mdb-input-init class="form-outline">
                  
                    <input type="text" id="firstName" class="form-control " value         required name="adress" placeholder="Adress" />
                    
                  </div>

                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                  
                    <input type="text" id="firstName" class="form-control " value         name="landmark" placeholder="landamrk (Optional)" />
                    
                  </div>

                </div>
                
              </div>

        

              <div class=" pt-1">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg"  type="submit" value="Confirm Order" name="corder" />
                  
              </div>
              


             


              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




<footer class="bg-blue mt-1  ">
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