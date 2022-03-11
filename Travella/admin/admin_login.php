<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travellium</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/main.css">
</head>
<body>
    <div class="container">
        <form action="admin_login_handler.php" method="POST">
            <div class="card ">
                <div class="card-header p-4">
                    <h4 class="card-title text-center">Travella</h4>        
                </div>
                <div class="card-body">
                    <label for="u_name">Username: </label>
                    <input class="form-control" type="text" name="u_name" required><br><br>
                    <label for="pass"> ID Number: </label>&nbsp;
                    <input class="form-control" type="number" name="u_id_num"   required><br><br>
                    <input class="btn " type="submit" value="Sign In" name="login-btn">
                </div>
                <div class="footer text-center">
                    <h1>Don't have an account?<a href="admin.php">Sign Up</a></h1>
                </div>
              </div>
        </form>
   
    </div>
</body>
</html>