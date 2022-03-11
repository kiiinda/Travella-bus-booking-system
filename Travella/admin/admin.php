<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/main.css">
</head>
<body>
<div class="container">
        <form action="admin_reg_handler.php" method="POST">
            <div class="card ">
                <div class="card-header p-4">
                    <h4 class="card-title text-center">Admin</h4>        
                </div>
                <div class="card-body">
                <label for="u_name">Name: </label>
                    <input class="form-control" type="text" name="name" required><br><br>
                    <label for="pass"> Phone: </label>&nbsp;
                    <input class="form-control" type="tel" name="u_phone" required ><br><br>
                    <label for="u_name">ID Number: </label>
                    <input class="form-control" type="number" name="u_id_num" required><br><br>
                    <label for="pass"> Username: </label>&nbsp;
                    <input class="form-control" type="text" name="u_name" required><br><br>
                    <input class="btn " type="submit" value="Sign Up" name="reg-btn">
                </div>
                <div class="footer text-center">
                    <h1>Already have an account?<a href="admin_login_handler.php">Sign In</a></h1>
                </div>
              </div>
        </form>
   
    </div>
</body>
</html>