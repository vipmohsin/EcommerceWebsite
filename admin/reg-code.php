<?php
include("conf.php");

if(isset($_POST['btn'])){
    $unm=$_POST['uname'];
    $em=$_POST['email'];
    $ps=$_POST['pass'];
   //  encrypting password
   $Eps=password_hash($ps, PASSWORD_BCRYPT);
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];

    $img=$_FILES['img']['name'];
    $tmpname=$_FILES['img']['tmp_name'];

    $query0="select * from users where email='$em'";
    $check=mysqli_query($con,$query0) or die (mysqli_error($con));
    $count=mysqli_num_rows($check);
    if($count>0){

      echo "<script>alert('Email already taken')
             document.location='index.php'</script>";
 

    }else if ($unm != '' || $em != '' || $Eps != '' || $dob != '' || $gender != '' || $img != '' ){

      
       $query="insert into users values('','$unm','$em','$Eps','$dob','$gender','$img','now()')";
       $dis=mysqli_query($con,$query)or die (mysqli_error($dis));
       $destination="assets/uploaded-images/users/".$img;
       $upload=move_uploaded_file($tmpname,$destination);
       echo "<script>alert('You are Registered sucessfully')
        document.location='login.php'</script>";


    }
    else{
      echo "<script>alert('fill all the fields')
            document.location='index.php'</script>";
    }
}


?>