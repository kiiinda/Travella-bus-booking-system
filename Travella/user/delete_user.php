<?php
//Check if delete has been clicked
if(isset($_GET['useranme'])){
    $useranme = $_GET['username'];
}
    //connect to db
    require_once '../db_con.php';

    //Prepare delete query
    $deleteQuery = "DELETE FROM `registration` WHERE username='$username'";
    //Use mysqli_query method to delete
    $delete = mysqli_query($con, $deleteQuery);
    //Check if the deletion was successful
    if(isset($delete)){
        //Redirect back to users.php to confirm the delete action
        header(header:"location:view_user.php");
    }else{
        echo "Record not deleted!!!";
    }
