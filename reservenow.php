<?php include 'headeer.html'?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="styling.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Make Your Reservation</title>
  </head>



  <body>
      <br>
      <br>
  <div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
                <h1 class="contact">Make Your Reservation Now</h1>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>




<form name= "form2" method="post" action="reservation_create.php" >


  <div class="booking-form-box">
      <Label>Hotel</Label>
      Select City of destination:<select name="hotel">
                    <option value="Hotel Daniya Denia Spa & Business"> Hotel Daniya Denia Spa & Business </option>
                    <option value="Hotel Mr Costa Blanca"> Hotel Mr Costa Blanca </option>
                    <option value="Negresco Princess 4* Sup"> Negresco Princess 4* Sup </option>
                    <option value="Ohla Barcelona">Ohla Barcelona</option>
              
                </select>
                <br>

      <label>Name</label>
      <input type="text" class="form-control" name="name">
      <label>Last Name</label>
      <input type="text" class="form-control" name="lname">
      <label>Email</label>
      <input type="text" class="form-control" name="email">
      <label>Phone Number</label>
      <input type="text" class="form-control" name="number">
      <label>Country</label>
      <input type="text" class="form-control" name="country">
      <label>Passport</label>
      <input type="text" class="form-control" name="passport">
      
  

  <div class="input-grp">
      <label>From</label>
      <input type="date" class="form-control select-date" name="start">
  </div>

  <div class="input-grp">
      <label>To</label>
      <input type="date" class="form-control select-date" name="end">
  </div>

  <div class="input-grp">
      <label>Adults</label>
      <input type="number" class="form-control" name="adults" value="1">
  </div>
  
  <div class="input-grp">
      <label>Children</label>
      <input type="number" class="form-control" name="children" value="0">
  </div>
  <input type="submit" value="Submit">
  </div>
  
  </form>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script></body>
  <footer>
  <?php include 'footer.html';?>
  </footer>
</html>