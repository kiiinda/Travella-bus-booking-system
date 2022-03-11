<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/main.css">
</head>
<body>
<div class="container">
        <form action="booking_handler.php" method="POST">
            <div class="card ">
                <div class="card-header p-4">
                    <h4 class="card-title text-center">Travella</h4>        
                </div>
                <div class="card-body">
                <label for="u_name">Name: </label>
                    <input class="form-control" type="text" name="name" required><br><br>
                    <label for="route"> Select Route </label>&nbsp;
                    <select name="u_route" id="route" style="width: 100%">
                        <option value="Kisumu - Eldoret">Kisumu - Eldoret</option>
                        <option value="Nairobi - Maseno">Nairobi - Maseno</option>
                        <option value="Nakuru - Nairobi">Nakuru - Nairobi</option>
                        <option value="Kisumu - Mombasa">Kisumu - Mombasa</option>
                        <option value="Katanga - Machakos">Katanga - Machakos</option>
                        <option value="Mombasa - Wajir">Mombasa - Wajir</option>
                        <option value="Garissa to Nairobi">Garissa to Nairobi</option>
                    </select><br><br>
                    
                    <input class="btn " type="submit" value="Submit" name="submit-btn">
                </div>
              
              </div>
        </form>
   
    </div>
    
</body>
</html>