<?php
//Check if the update link has been clicked
if (isset($_GET['username'])){
    //Start receiving the data from the link
    $r_name = $_GET["name"];
    $r_phone = $_GET["phone"];
    $r_id_num = $_GET["id_num"];
    $r_username = $_GET["name"];
}
  
else{
    //Redirect to user.php for them to click update
    header(header:"location:view_user.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center text-info p-2">Update Details</h3>
    <div class="container bg-grey">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form action="update_user_handler.php" method="POST" class="text-center">
                <input value="<?php echo $r_name; ?>" class="form-control" name="name" type="text" placeholder="Name"><br><br>
                <input value="<?php echo $r_phone; ?>" class="form-control" name="phone" type="tel" placeholder="Phone Number"><br><br>
               <input value="<?php echo $r_id_num; ?>" class="form-control" name="id_num" type="number" placeholder="Id Number" ><br><br>
               <input value="<?php echo $r_username; ?>" class="form-control" name="name" type="text" placeholder="Username" ><br><br>
               <input class="btn-outline-info btn-block" type="submit" name="btn-update" value="Update"><br><br>

                <a value="<?php echo $username; ?>" class="btn-outline-success btn-block" href="view_user.php">Back</a>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
</body>
</html>