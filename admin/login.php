<?php
include("conf.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
  rel="stylesheet"
/>



</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">


          <form action="login-code.php" method="post" >
          
          
          <h1 class="mb-2">Login </h1>
            <h4 class="mb-5">To Your Account</h4>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" required name="email" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" required name="pass"/>
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <input  type="submit" class="btn btn-primary btn-lg btn-block" name="btn" value="Login"/>

            <hr class="my-4">


             <a >Don't have an Account </a><a href="index.php"><b><u>Sign Up</u></b></a>
 </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
></script>
</body>
</html>