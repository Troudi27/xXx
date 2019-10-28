<?php 

session_start();

include "dbconnexion.php"; 


$lastname=$_POST['lastname'];   
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$phone=$_POST['phone']; 

$_SESSION['message']="Record has been saved !";
$_SESSION['msg_type']="seccess";
$cnx->exec("INSERT INTO students (firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')");

header("location:index.php");
?>