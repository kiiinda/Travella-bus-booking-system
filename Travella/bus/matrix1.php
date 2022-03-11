<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bus Information</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <style>
        button{             
            padding: .5em 2em;
            background-color: grey;
            margin-left: 20em;
            margin-top: 2em;
        }
        button a {
            color:white;
        }
    </style>
</head>
<body style="background-color: rgb(228, 225, 225);letter-spacing:normal;">

<div class="container">
<div class="row">
    <div class="col-1"></div>
<div class="col-md-10">

<h2 class="text-center mt-5">Bus Details</h2>

<?php
require_once '../db_con.php';
$result = mysqli_query($con,"SELECT * FROM category1");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped mr-2'>
<table>
        <tr">
            <th>Id</th>
            <th>Bus_Info</th>
            <th>Seats</th>
            <th>Available Seats</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Price</th>
        </tr>
       
<?php
$i=0;
while($rows = mysqli_fetch_array($result)) {
?>
	<tr class="text-center">
        <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['Bus_No']; ?></td> 
        <td><?php echo $rows['Seats']; ?></td>
        <td><?php echo $rows['Available seats']; ?></td> 
        <td><?php echo $rows['Departure time']; ?></td> 
        <td><?php echo $rows['Arrival time']; ?></td>  
		<td><?php echo $rows['source']; ?></td> 
		<td><?php echo $rows['destination']; ?></td> 
		<td><?php echo $rows['price']; ?></td> 
		
		</tr> 
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
<button><a href="booking.php">Book Now</a></button>
</div>
<div class="col-1"></div>
</div>        
</div>


</body>
</html>

