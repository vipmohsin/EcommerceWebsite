<?php
include("admin/conf.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/images/image.png">
  
  <title>Shoes4u.pk</title>
  <link rel="stylesheet" href="assets/css/layout.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />  
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header >
    <div class="nav1 z-0">
      <nav class="navbar navbar-expand-lg poition-abolute z-1 position-relative  ">
        <div class="container ">
    
         <h3 class=" text-light">Shoes4u.pk</h3>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-light"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
    
            <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto ">
              <li class="nav-item ">
    
                <a class="nav-link text-light  fs-6 mx-2 hvr-underline-from-center active" aria-current="page"
                  href="index.php">Home</a>
              </li>
            
              <!-- <li class="nav-item">
                <a class="nav-link text-light  fs-6 mx-2 hvr-underline-from-center" href="">Games</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light  fs-6 mx-2 hvr-underline-from-center" href="">Terms&Cond</a>
              </li>  -->
              <li class="nav-item">
                <a class="nav-link text-light  fs-6 mx-2 hvr-underline-from-center"  href="cart.php">Cart </a>
              </li>
              <?php
              if(!isset($_SESSION['Cname']))
              {
              
              ?>
               <li class="nav-item">
                <a class="nav-link text-light  fs-6  hvr-underline-from-center"  href="user/login.php">Login </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light  fs-6  hvr-underline-from-center"  href="user/index.php">Signup</a>
              </li>
              <?php }else{?>
              
            </ul>
          
    <!-- Example split danger button -->
<div class="dropdown-center">
  <button type="button" class="btn text-white fw-bolder"><?php echo $_SESSION['Cname'];?></button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu mt-3">
    <li><a class="dropdown-item" href="userorders.php">My Orders</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="user/logout.php">Logout</a></li>

    <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li> -->
    <!-- <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="user/logout.php">Logout</a></li> -->
  </ul>
</div>
<?php }?>
          </div>
      </nav>
      </div>
 
  </header>
 