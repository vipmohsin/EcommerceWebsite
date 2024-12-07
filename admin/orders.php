<?php
include("conf.php");
   

 



  
       
       $query="select * from orders where OrderStatus='pending'";
       $result=mysqli_query($con,$query) or die(mysqli_error($con));
      //  if(isset($_POST['orderdelievered'])){
      //  $OrderSent=$_POST['orderdelievered'];
          
      //  }
       
       



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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN-PANEL</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="assets/uploaded-images/users/<?php 
                        
                        echo $_SESSION['imgnm']?>"alt="DP" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php
                        if(isset($_SESSION['uname'])){
                        echo $_SESSION['uname'];
                        }
                        else{
                            header("location:login.php");
                        }
                         ?>
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="home.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Add Product</a>
                    <div class="nav-item dropdown">
                        <a href="view-products.php" class="nav-link  "><i class="fa fa-laptop me-2"></i>View Products</a>
                        <a href="orders.php" class="nav-link  active"><i class="fa fa-laptop me-2"></i>View Orders</a>
                        
                        <!-- <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div> -->
                    </div>
                    <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0"> -->
                            <!-- <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-2">
                                       
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-2">
                                        <
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-2">
                                        
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center"></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <!-- <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small> -->
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <!-- <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small> -->
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <!-- <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small> -->
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="assets/uploaded-images/users/<?php echo $_SESSION['imgnm']?>"alt="DP" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['uname']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body> -->
  

<div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                      <div class="col-md-12">
                        
                      </div>
                    <p class="d-inline-flex gap-1">
  <!-- <a class="btn btn-primary ms-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
    Find Product
  </a> -->
  <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-bs-target
  </button> -->
</p>


<div class="" id="">
  <div class="card card-body">
 

  
    <form action="" method="post">
    <label for="" class="d-block my-2 text-bold fs-5 ms-1">Search Product</label>
    <div class="col-md-6 mb-3 d-flex">
  
    <input type="number" class="form-control" value="" placeholder="Enter Product Id" aria-label="Last name" required name="pid">
    <input type="submit" class="btn btn-primary ms-2" name="findproduct">


  </div>
  

  
<?php  
if(isset($_POST["findproduct"])){
    $pid=$_POST['pid'];
    $productquery="select * from addproduct where id='$pid'";
    $pres=mysqli_query($con,$productquery) or die(mysqli_error($con));
?>
 <table class="table table-bordered border-dark  mb-0 bg-light" >
  <thead class="bg-danger ">
    <tr>
    <th class="text-white">Id</th>
      <th class="text-white">Image</th>
     
      <th class="text-white">Category</th>
      <th class="text-white">Product Name</th>
      <th class="text-white">Old Price</th>
      <th class="text-white">New Price</th>
      
      <th class="text-white">Discription</th>
      <th class="text-white">Date</th>

    </tr>
  </thead>


<?php


   
 

while( $row1=mysqli_fetch_array($pres)){?>
  <tbody>
    <tr >
      <td class="text-dark"><?php echo $row1[0]; ?></td>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="assets/uploaded-images/products/<?php 
                        
              echo $row1[6];?>"
              alt=""
              style="width: 40px; height: 40px"
              class="rounded-circle"
              />
          
        </div>
      </td>
      <td class="text-dark">
        <p><?php echo $row1[1]; ?></p>
      </td>
      <td class="text-dark">
       <p><?php echo $row1[2]; ?></p>
      </td>
      <td class="text-dark"><?php echo $row1[3]; ?></td>
      <td class="text-dark"><?php echo $row1[4]; ?></td>
      <td class="text-dark" >
        
      <p><?php echo $row1[5]; ?></p></td>
      <td class="text-dark"><?php echo $row1[7]; ?>
      </td>
    
    </tr>

  </tbody>


<?php }
}
?>
</table>
    </form>
    
  </div>
</div>
  <section>
 <h1 align="center" class="my-3">Orders</h1>

 <?php while($row=mysqli_fetch_array($result)){?>

 <table class="table table-bordered border-white text-white  table-dark my-3 p-2 table-responsive text-wrap">


  <tr>
  <td class="text-white">Id</td>
  <td ><?php echo $row[0]; ?></td>
  </tr>


  <tr>
  <td class="text-white">Items</td>
  <td ><?php echo $row['items']; ?></td>
  </tr>


  <tr>
  <td class="text-white">Payment</td>
  <td >
        <p><?php echo $row['amount']; ?></p>
      </td>
  </tr>


  <tr>
  <td class="text-white">Buyer Name</td>
  <td >
       <p><?php echo $row['name']; ?></p>
      </td>
  </tr>


  <tr>
  <td class="text-white">Buyer Email</td>
  <td >
       <p><?php echo $row['email']; ?></p>
      </td>
  </tr>


  <tr>
  <td class="text-white">Buyer Phone</td>
  <td >
       <p><?php echo $row['cell']; ?></p>
      </td>
  </tr>


  <tr>
  <td class="text-white">Adress</td>
  <td  >
        
      <p><?php echo $row['adress']."\n" .$row['land mark']."\n".$row['postalcode'] ?></p></td>
  </tr>


  <tr>
  <td class="text-white">Country</td>
  <td ><?php echo $row['country']; ?>
      </td>
  </tr>


  <tr>
  <td class="text-white">Date</td>
  <td ><?php echo $row['date']; ?>
      </td>
  </tr>


  <tr>
  <td class="text-white">Action</td>
  <td>
  
        <form action="" method="post">
         
            <a href="order-sent.php?pid=<?php echo $row[0];?>" class="btn btn-primary text-wrap" onclick="return confirm('Are you sure the order is sent.')">Order Sent</a>
         
            <!-- <a href="order-sent.php?pid=<?php echo $row[0];?>" class="btn btn-primary text-wrap" onclick="return confirm('Are you sure the order is sent.')">pending</a> -->
        </form>

  
      </td>
  </tr>

  
 </table>
 <?php }
 ?>


<!-- 
<table class="table table-bordered border-dark  mb-0 bg-light" >
  <thead class="bg-danger ">
    <tr >
    <th class="text-white">Id</th>
      <th class="text-white">Items</th>
     
      <th class="text-white">Payment</th>
      <th class="text-white">Buyer Name</th>
      <th class="text-white">Buyer Email</th>
      <th class="text-white">Buyer Phone</th>
      
      <th class="text-white">Adress</th>
      <th class="text-white">Country</th>
      <th class="text-white">Date</th>
      <th class="text-white">Action</th>

    </tr>
  </thead>


<?php while($row=mysqli_fetch_array($result)){?>
  <tbody>
    <tr rows="3">
      <td class="text-dark"><?php echo $row[0]; ?></td>
      <td class="text-dark"><?php echo $row['items']; ?></td>
      
      <td class="text-dark">
        <p><?php echo $row['amount']; ?></p>
      </td>
      <td class="text-dark">
       <p><?php echo $row['name']; ?></p>
      </td>
      <td class="text-dark"><?php echo $row['email']; ?></td>
      <td class="text-dark"><?php echo $row['cell']; ?></td>
      <td class="text-dark" >
        
      <p><?php echo $row['adress']."\n" .$row['land mark']."\n".$row['postalcode'] ?></p></td>
      <td class="text-dark"><?php echo $row['country']; ?>
      </td>
      <td class="text-dark"><?php echo $row['date']; ?>
      </td>
      <td>
        <form action="" method="post">
            <input class="btn btn-primary text-wrap" onclick="return confirm('Are you sure the product ids delievered.')" type="submit" value="Order Delievered" name="orderdelievered">
        </form>

  
      </td>
    </tr>

  </tbody>


<?php }?>
</table> -->
</section>

</div>
</div>
</div>

<?php
include("footer.php");

?>
