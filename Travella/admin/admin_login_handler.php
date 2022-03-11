<?php
require_once "../db_con.php";

session_start();

if(isset($_POST['login-btn'])){
    $username = $_POST['u_name'];
    $idNum = $_POST['u_id_num'];
}

$sql = "SELECT * FROM `admin` WHERE `username`='$username' && `id_num`='$idNum' ";

$result = mysqli_query($con,$sql);

$num = mysqli_num_rows($result);

if ($num == 1){
    
      header("Location: view.php");
}
else{
//echo "<script>alert('Whooops! Username or ID Number is Wrong!!')</script>";
echo "<script>alert('Welcome to Travella')</script>";
}

