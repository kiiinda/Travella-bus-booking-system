<?php
require_once "../db_con.php";

//Check if sign up btn has been clicked
if(isset($_POST['reg-btn'])){
    //start receiving data 
    $name = $_POST['name'];
    $phone = $_POST['u_phone'];
    $idNum = $_POST['u_id_num'];
    $username = $_POST['u_name'];

}

    $sql = "INSERT INTO `admin`(`id`, `name`, `phone`, `id_num`, `username`)
     VALUES ('','$name', '$phone', '$idNum', '$username')";
    
    $qry = mysqli_query($con, $sql);

     if(isset($qry)){
        header(header:"location:admin_login.php");
         }
     else{
         die('ERROR!!!Adding User failed');
     }
     
    