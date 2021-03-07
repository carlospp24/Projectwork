<?php include 'headeer.html'?>
  <!doctype html>
    <html lang="en">
      <head>
        <link rel="stylesheet" href="styling.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Bookings</title>
      </head>

    <body>
    <div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
                <h1 class="spain">Book Now!</h1>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>
              <br>
              <div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
                <h1 class="booking">Book your next well deserved vacations with us now. It's easy and fast. Just select the options we have available just for you and fill in the spaces to make your next vacations easy and accesible! If you need any help with the booking of your vacations, feel free to contact us via the <a href="http://localhost/Project/Projectwork/ContactUs.php">Contact Us</a> page. Vacations awaits!</h1>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>
              <br>
              <br>
              <div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
                <h1 class="spain">Destinations in Spain</h1>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>
              <br>


<div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
<?php
include 'dbdest.php'; 
$sql = "select * from ourdestinations";
$result = $conn->query($sql);






if($result ->num_rows > 0) {

echo "<table border=\"3\"><tr><th>ID</th><th> Name</th><th>Country</th>
<th>Region</th><th>Availability</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>". $row["Name"]."</td> <td>". $row["Country"] 
        
        ."</td><td>". $row["Region"]. "</td><td>". $row["Availability"] 
        ."</td></tr>";
    }
    echo "</table>";
}

else 
{
    echo "no results";
}
$conn->close();
?>
<br>
<div class="reservenow">
<a href="http://localhost/Project/Projectwork/reservenow.php">Make your Reservation to Spain</a>
</div>
<br>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>

              <br>
              <div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
                <h1 class="spain">Destinations in Mexico</h1>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>
              <br>


<div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
<?php
include 'dbdest.php'; 
$sql = "select * from ourdestinationsmexico";
$result = $conn->query($sql);






if($result ->num_rows > 0) {

echo "<table border=\"3\"><tr><th>ID</th><th> Name</th><th>Country</th>
<th>Region</th><th>Availability</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>". $row["Name"]."</td> <td>". $row["Country"] 
        
        ."</td><td>". $row["Region"]. "</td><td>". $row["Availability"]
        ."</td></tr>";
    }
    echo "</table>";
}

else 
{
    echo "no results";
}
$conn->close();
?>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>

              <br>

              <div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
                 <div class="reservenow">
<a href="http://localhost/Project/Projectwork/reservenowmexico.php">Make your Reservation to Mexico</a>
</div>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>

              
              <br>

              

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      
    </body>
<footer>
  <?php include 'footer.html';?>
</footer>
</html>




