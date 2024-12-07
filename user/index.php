<?php
include("../admin/conf.php");



if(isset($_POST['btn'])){
  $unm=$_POST['uname'];
  $em=$_POST['email'];
  $ps=md5($_POST['pass']);

  $cell=$_POST['cell'];
  $country=$_POST['country'];




  $query0="select * from buyers where email='$em'";
  $check=mysqli_query($con,$query0) or die (mysqli_error($con));
  $count=mysqli_num_rows($check);
  if($count>0){

    echo "<script>alert('Email already taken')
           document.location='index.php'</script>";


  }else if ($unm != '' || $em != '' || $ps != '' || $cell != '' || $country != ''   ){

    
     $query="insert into buyers values('','$unm','$em','$ps','$cell','$country',now())";
     $dis=mysqli_query($con,$query)or die (mysqli_error($con));

     echo "<script>alert('You are Registered sucessfully')
      document.location='login.php'</script>";


  }
  else{
    echo "<script>alert('fill all the fields')
          document.location='index.php'</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
<section class="vh-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

            
            <form  method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" required name="uname"/>
                    <label class="form-label" for="firstName">User Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" required name="email"/>
                    <label class="form-label" for="lastName"> Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div data-mdb-input-init class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" required name="pass"/>
                    <label for="birthdayDate" class="form-label">Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-3 pb-2">

                <div data-mdb-input-init class="form-outline">
                     <input type="number" id="phoneNumber" class="form-control form-control-lg" required name="cell"/>
                     <label class="form-label" for="phoneNumber">Phone</label>
                </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-3" >

                <div data-mdb-input-init class="form-outline">
                     <input type="text" id="phoneNumber" class="form-control form-control-lg" required name="country"/>
                     <label class="form-label " for="phoneNumber">Country</label>
                </div>

                </div>
       
              </div>
              <div class="row">
                <div class="col-md-12 mb-4 pb-3" >

                <div data-mdb-input-init class="form-outline">
                     <input type="text" id="phoneNumber" class="form-control form-control-lg" required name="country"/>
                     <label class="form-label " for="phoneNumber">adress</label>
                     <textarea class="form-control form-control-sm" id="phoneNumber" name="adress"  required rows="2">

                     </textarea>
                </div>

                </div>
       
              </div>

        

              <div class=" pt-1">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Register" name="btn" />
                  
              </div>
              <hr class="my-4">


             <a >Already have an Account? </a><a href="login.php"><b><u> Login</u></b></a>


              

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