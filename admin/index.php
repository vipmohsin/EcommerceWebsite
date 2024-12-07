<?php
include("conf.php");

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

            
            <form action="reg-code.php" method="post" enctype="multipart/form-data">

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
                     <input type="date" id="phoneNumber" class="form-control form-control-lg" required name="dob"/>
                     <label class="form-label" for="phoneNumber">Date Of Birth</label>
                </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-3" >

                  <div data-mdb-input-init class="form-outline">
                    <small class="ps-3">IMAGE</small>
                    <input type="file" id="emailAddress" class="form-control form-control-lg" name="img" />
                   
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="Female" checked required  />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>



                </div>
              </div>

              <!-- <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                  <label class="form-label select-label">Choose option</label>

                </div>
              </div> -->

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