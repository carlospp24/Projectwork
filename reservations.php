<?php
require_once 'protect.php';
Protect\with('form.php', 'my_password');
?>
  <!doctype html>
    <html lang="en">
      <head>
        <link rel="stylesheet" href="styling.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Reservations</title>
      </head>

    <body>
    




<?php
include 'dbdest.php'; 
$sql = "select * from information";
$result = $conn->query($sql);






if($result ->num_rows > 0) {

echo "<table border=\"3\"><tr><th> Hotel</th><th>name</th>
<th>lname</th><th>email</th><th>number</th><th>country</th><th>passport</th><th>start</th><th>end</th><th>adults</th><th>children</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["hotel"] . "</td><td>". $row["name"]."</td> <td>". $row["lname"] ."</td><td>". $row["email"]."</td><td>". $row["number"]."</td><td>". $row["country"]."</td><td>". $row["passport"]."</td><td>". $row["start"]."</td><td>". $row["end"]."</td><td>". $row["adults"]."</td><td>". $row["children"]."</td></tr>";
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
       <br>
       <br>

       <?php
include 'dbdest.php'; 
$sql = "select * from informationmexico";
$result = $conn->query($sql);






if($result ->num_rows > 0) {

echo "<table border=\"3\"><tr><th> Hotel</th><th>name</th>
<th>lname</th><th>email</th><th>number</th><th>country</th><th>passport</th><th>start</th><th>end</th><th>adults</th><th>children</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["hotel"] . "</td><td>". $row["name"]."</td> <td>". $row["lname"] ."</td><td>". $row["email"]."</td><td>". $row["number"]."</td><td>". $row["country"]."</td><td>". $row["passport"]."</td><td>". $row["start"]."</td><td>". $row["end"]."</td><td>". $row["adults"]."</td><td>". $row["children"]."</td></tr>";
    }
    echo "</table>";
}

else 
{
    echo "no results";
}
$conn->close();
?>

              

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      
    </body>
<footer>

</footer>
</html>




