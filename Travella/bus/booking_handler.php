<?php
require_once "../db_con.php";

//Check if sign up btn has been clicked
if(isset($_POST['submit-btn'])){
    //start receiving data 
    $name = $_POST['name'];
    $route = $_POST['u_route'];

}

    $sql = "INSERT INTO `book`(`id`, `name`, `route`)
     VALUES ('','$name', '$route')";
    
    $qry = mysqli_query($con, $sql);

     if(isset($qry)){
    
       echo'<script>alert("Reservation Successful! Thank you for booking with Travella!!")</script>';
         }
     else{
         die('ERROR!!!Could not make Reservation');
     }
     
    