<?php
include("conf.php");

if(isset($_GET['pid'])){
    $pid=$_GET['pid'];

    $query="select * from addproduct where id='$pid'";
    $res=mysqli_query($con,$query)or die (mysqli_error($res));
    $row=mysqli_fetch_array($res);





if(isset($_POST['btn'])){

    



    $cat=$_POST['cat'];
    $pnm=$_POST['pname'];
    $op=$_POST['oprice'];
    $np=$_POST['nprice'];
    $dis=$_POST['pdiscrip'];
  
    $pimg=$_FILES['pimg']['name'];
    $tmpname=$_FILES['pimg']['tmp_name'];
  
    $destination="assets/uploaded-images/".$pimg;
    $upload=move_uploaded_file($tmpname,$destination);
  
  
    $query1="update addproduct set category='$cat', pname='$pnm', oprice='$op', nprice='$np',     discription='$dis' where id=$pid";
    $res=mysqli_query($con,$query1) or die (mysqli_error($res));
  
  
    if($res){
      echo"<script>alert('product updated')
      document.location='view-products.php'</script>";
    }else{
      echo"<script>alert(' product not updated')
      document.location='view-products.php'</script>";
    }
  
  
  
  
  }
}
?>

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="icon">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Sidebar Start -->

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="">
            <!-- Navbar Start -->

            <!-- Navbar End -->
    
    <section>
        <form  enctype="multipart/form-data" method="post">
   <div class="container-fluid pt-4 px-4">
    
   <div class="row">
    <div class="col-md-12">
        <h2 class="text-center mb-4">Edit Product</h2>
    </div>
    <div class="col-md-6 my-2">
    <label for="">Category</label>
    <select  id=""  class="form-control" value="<?php echo $row[1];?>"  placeholder="Category" name="cat" >

        <option value="Nike">Nike </option>
        <option value="Bata">Bata</option>
        <option value="Air Jordan">Air Jordan</option>
    </select>
    
    </div>
  <div class="col-md-6 my-2">
    <label for="">Product Name</label>
    <input type="text" class="form-control" value="<?php echo $row[2];?>" placeholder="Product name" aria-label="First name" required name="pname">
  </div>
  <div class="col-md-6 my-2">
  <label for="">Old Price</label>
    <input type="number" class="form-control" value="<?php echo $row[3];?>" placeholder="Old Price" aria-label="Last name" required name="oprice">
  </div>
  <div class="col-md-6 my-2">
  <label for="">New Price</label>
    <input type="number" class="form-control" value="<?php echo $row[4];?>" placeholder="New Price" aria-label="Last name" required name="nprice">
  </div>
  <div class="col-md-6 my-2">
  <label for="">Product Image</label>
    
    <input type="file" class="form-control"    aria-label="Last name"  name="pimg">
  </div>
  <div class="col-md-12 my-2">
  <div class="input-group">
  <span class="input-group-text">Discription</span>
  <input class="form-control" value="<?php echo $row[5];?>" aria-label="Discription" required name="pdiscrip"/>
</div>
  </div>
  
  <div class="col-md-12 my-2">
 
    <input type="Submit" class="btn bg-dark text-light"  aria-label="Last name" value="Update Product" name="btn">
  </div>
</div>
   </div>
 
   </form>

    </section>




<?php
include("footer.php");

?>
