<?php include 'headeer.html'?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="styling.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>



  <body>
  <div class="container">
            <div class="row">
                 <div class="col-3">
                 
                 </div>
                 <div class="col-6">
                <h1 class="contact">Contact Us</h1>
                 </div>
                 <div class="col-3">
                 
                 </div>
                </div>
              </div>
              <br>
    

    <form name= "form1" method="post" action="contact_create.php">
    <h2>Name</h2> <input type="text" name="name"><br> <br>
    <h2>Email</h2> <input type="text" name="email"><br> <br>
    <h2>Country</h2> <input type="text" name="country"><br> <br>
    <h2>Question/Comment</h2> <input type="text" name="question_or_feedback"><br>
</select>
<br>
<input type="submit" value="Submit">
</form>


              
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  <footer>
  <?php include 'footer.html';?>
  </footer>
</html>