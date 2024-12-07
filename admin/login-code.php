<?php
include("conf.php");


if(isset($_POST['btn'])){
   $email=$_POST['email'];
   $pass=$_POST['pass'];
   

   if($email !='' && $pass !=''){
   $query="select * from users where email='$email'";
   $res=mysqli_query($con,$query) or die (mysqli_error($con));
   $count=mysqli_num_rows($res);
   
    if($count>0){
        $row=mysqli_fetch_array($res);
        
        $Epass=$row['password'];
        
    
         if(password_verify($pass,$Epass))
        // if($Epass == $pass)
        {
            $_SESSION['uname']=$row['uname'];
            $_SESSION['imgnm']=$row['image'];
            echo "<script>alert('Welcome User')
            document.location='Home.php'</script>";
            
            
        }
                
        else{
            echo "<script>alert('Wrong password')
            document.location='login.php'</script>";
        }
    }else{
        echo "<script>alert('Invalid Email')
        document.location='Login.php'</script>";
    }

   } else{
    echo "<script>alert('Please Fill Both Of the fields Properly')
    document.location='login.php'</script>";
   }
   




}


?>