<?php
include("../admin/conf.php");



if(isset($_POST['btn'])){
  $email=$_POST['email'];
  $pass=md5($_POST['pass']);
  

  if($email !='' && $pass !=''){
  $query="select * from buyers where email='$email'";
  $res=mysqli_query($con,$query) or die (mysqli_error($con));
  $count=mysqli_num_rows($res);
  
   if($count>0){
       $row=mysqli_fetch_array($res);
       
       $Epass=$row['password'];
       
   
        
       if($Epass == $pass)
       {
           $_SESSION['Cname']=$row['name'];
           $_SESSION['Cemail']=$email;
           $_SESSION['Cid']=$row['id'];
    

           echo "<script>alert('Welcome User')
           document.location='../index.php'</script>";
           
           
       }
               
       else{
           echo "<script>alert('Wrong password')
 </script>";
 $_SESSION['userloggedin']=false;
       }
   }else{
       echo "<script>alert('Invalid Email')
 </script>";
   }

  } else{
   echo "<script>alert('Please Fill Both Of the fields Properly')
  </script>";
  }
  




}

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


          <form  method="post" >
          
          
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