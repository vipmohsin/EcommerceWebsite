<?php 
include('header.php');
?>
<?php
     $_SESSION['cartitem']=false;
	
	if (isset($_GET['pid'])) {
		
		$id=$_GET['pid'];
		$Action=$_GET['action'];

		switch ($Action) {
			case 'add':
				if(isset($_SESSION['cart'][$id])){
					$_SESSION['cart'][$id]++;
				}else{
					$_SESSION['cart'][$id]=1;
				}break;

			case 'remove':
			
				$_SESSION['cart'][$id]--;	
				if($_SESSION['cart'][$id]==0){
					unset($_SESSION['cart'][$id]);	
				}break;

			case 'clear':
				unset($_SESSION['cart']);	
				header("location:index.php");
				break;				
			
		}
	}


?>
<!DOCTYPE html>
<div class="container">
	<div class="table-responsive-sm">
	<table align="center" class="table  table-dark table-borderd border-danger mt-5 w-100">
		<tr class="text-center align-middle">
			<td>Sno</td>
			<td>Pname</td>
			<td>Pimg</td>
			<td>Price</td>
			<td>Qty</td>
			<td>subtotal</td>

		</tr>
<?php
$sno=1;
$gtotal=0; 
  
  
   foreach ($_SESSION['cart'] as $id => $value) {
	   $query="SELECT * FROM addproduct WHERE id='$id'";
	   $res=mysqli_query($con,$query) or die(mysqli_error($con)); 
	   $row=mysqli_fetch_array($res);
	   $gtotal+=$row['nprice']*$value;
	   $_SESSION['cartitem']=true;

?>
		<tr class="text-center align-middle">
			<td class="fw-bold"><?php echo $sno++;?></td>
			<td class="fw-bold"><?php echo $row['pname'];?></td>
			<td><img src="admin/assets/uploaded-images/products/<?php   
                        echo $row['pimage'];?>" class="card-img-top" alt="..." width="70px" height="60px"></td>
			<td class="fw-bold"><?php echo $row['nprice'];?></td>
			<td class="fw-bold">
			<a href="cart.php?pid=<?php echo $row[0]?>&action=add" class="btn btn-primary fs-6 h-1 text-bold">+</a>
			<?php echo $value;?>
			<a href="cart.php?pid=<?php echo $row[0]?>&action=remove" class="btn btn-primary">-</a>
		</td>
			<td  class="fw-bold"><?php echo $row['nprice']*$value;?></td>
			
		</tr>
<?php 
   }

   if($gtotal==0){
	header("location:index.php");
   }
?>
		<tr class="text-center align-middle">
			<td><a href="index.php" class="btn btn-danger text-wrap" width="6rem">Continue <br> Shopping</a></td>
			<td></td>
			<td></td>
			<td><a href="cart.php?pid=<?php echo $row[0]?>&action=clear" class="btn btn-danger">Clear</a></td>
			<td><a href="checkout.php" class="btn btn-danger "

			<?php
			if(!isset($_SESSION['Cname'])){?>
			onclick="return confirm('You Need To Login To procedd Further.Click OK To Login')"
			<?php 
		 
		}?>

			>Checkout</a></td>
			<td>PKR:<?php echo $gtotal;?></td>

		</tr>
	</table>
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