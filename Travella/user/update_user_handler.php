<?php
//Check if update button has been clicked
if(isset($_POST['btn-update'])){
    //start receiving updated data

    $updateName = $_POST['name'];
    $updatePhone = $_POST['phone'];
    $updateidnum = $_POST['id_num'];
    $updateUsername = $_POST['name'];
}
    //connect to db
    require_once "../db_con.php";

    //Prepare the update query
    $updateQuery = "UPDATE `registration` SET `name`= '$updateName', `phone`= '$updatePhone', `id_num`= '$updateidnum', `username`= '$updateUsername' 
    WHERE  username = '$username' ";

    $update = mysqli_query($con, $updateQuery);
    //Check if update was successful
    if(isset($update)){
    header(header:"location:view_user.php");//Redirecting to users.php
    }
        else{
    die ('Records not updated!!');
    }