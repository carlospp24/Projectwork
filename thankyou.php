<?php include 'headeer.html'?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="styling.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Thank you for your Reservation!</title>
  </head>



  <body>
  <p class="hometext">
  <div class="container">
            <div class="row">
                 <div class="col-3">
                 </div>
                 <div class="col-6">
                <h1>Thank you for your reservation <?php echo $name;echo " "; echo $lname;?>! Your vacations are right around the corner! We'll give you a summary of your reservation.  </h1>
                 </div>
                 <div class="col-3">
                 </div>
                </div>
              </div>
              <br>
              <br>

              <div class="row">
                 <div class="col-4">
                     <h2>Client's information</h2>
                     <br>
                     <p class="hometext">
                    <?php echo "Name:"; echo $name;
                    echo'<br>';
                    echo "Last Name:"; echo $lname;
                    echo'<br>';
                    echo "Email:"; echo $email;
                    echo'<br>';
                    echo "Phone Number:"; echo $number;
                    echo'<br>';
                    echo "Country:"; echo $country;
                    echo'<br>';
                    echo "Passport:"; echo $passport;
                    ?>
                    </p>
                 </div>
                 <div class="col-4">
                
                 </div>
                 <div class="col-4">
                     <h2>Reservation Information</h2>
                     <br>
                     <p class="hometext">
                         
                    <?php echo "Hotel:"; echo $hotel;
                    echo'<br>';
            
                    echo "Check In:"; echo $start;
                    echo'<br>';
                    echo "Check Out:"; echo $end;
                    echo'<br>';
                    echo "Adults:"; echo $adults;
                    echo'<br>';
                    echo "Children:"; echo $children;
                    echo '<br>';
                    $priceadults=0;
                    $pricechildren+0;
 function dateDiffInDays($date1, $date2)  
{ 
    $diff = strtotime($date2) - strtotime($date1);  
return abs(round($diff / 86400)); 
} 
$date1 = $start; 
$date2 = $end; 
$dateDiff = dateDiffInDays($date1, $date2); 


if ($hotel=="Hotel Daniya Denia Spa & Business"){
  $priceadults=$dateDiff*99;
  $pricechildren=$dateDiff*62;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}
if ($hotel=="Hotel Mr Costa Blanca"){
  $priceadults=$dateDiff*79;
  $pricechildren=$dateDiff*34;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}
if ($hotel=="Negresco Princess 4* Sup"){
  $priceadults=$dateDiff*117;
  $pricechildren=$dateDiff*79;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}
if ($hotel=="Ohla Barcelona"){
  $priceadults=$dateDiff*189;
  $pricechildren=$dateDiff*101;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}


if ($hotel=="Royalton Chic Suites Cancun Resort & Spa"){
  $priceadults=$dateDiff*57;
  $pricechildren=$dateDiff*25;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}
if ($hotel=="Grand Fiesta Americana Coral Beach Cancun"){
  $priceadults=$dateDiff*64;
  $pricechildren=$dateDiff*31;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}
if ($hotel=="Grand Fiesta Americana Puerto Vallarta"){
  $priceadults=$dateDiff*182;
  $pricechildren=$dateDiff*117;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}
if ($hotel=="Hotel Posada De Roger"){
  $priceadults=$dateDiff*399;
  $pricechildren=$dateDiff*189;
  $total=$priceadults+$pricechildren;
  echo "Total:";
  echo " ";
  echo "$";
  echo $total;
}





                  
                  
                    ?>

                    
                 </div>
                </div>
              </div>


              



  
  
  </p>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  <footer>
  <?php include 'footer.html';?>
  </footer>
</html>