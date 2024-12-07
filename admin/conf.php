<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="myloginsystem";


 $con=mysqli_connect($host,$user,$password,$db)or die (mysqli_error());





?>