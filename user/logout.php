<?php
include("../admin/conf.php");

unset($_SESSION['Cname']);
echo "<script>alert('Logged Out Sucsessfully')
document.location='../index.php'</script>";

?>

