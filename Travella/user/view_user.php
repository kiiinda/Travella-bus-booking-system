<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
      <div class="col-1"></div>
        <div class="col-10">
        <h3 class="text-info text-center p-2">Passengers</h3>
    <table>
        <tr>
            
            <th>Name</th>
            <th>Phone</th>
            <th>Id_Num</th>
            <th>Username</th>
        </tr>

        <?php
        //Connect to database
        require '../db_con.php';

        $selectQuery = "SELECT * FROM `registration` ";

        //use mysqli_query method to run
        $users = mysqli_query($con, $selectQuery);

        //use loop to print the voters
        foreach($users as $user) {
            //$userId = $user['userId'];
            $userName = $user["name"];
            $userPhone = $user["phone"];
            $user_Id_Num = $user["id_num"];
            $username = $user["name"];
            
            echo "<tr>
            <td>$userName</td>
            <td>$userPhone</td>
            <td>$user_Id_Num</td>
            <td>$username</td>
         
            
            <td><a class='btn btn-primary' href='update_user.php?name=$userName&phone=$userPhone&id_num=$user_Id_Num&username=$username'>Update</a></td>
            </tr>";
        }

        ?>
    </table>
        </div>
      
        <div class="col-1"></div>
    </div>
    </div>

</body>
</html>

