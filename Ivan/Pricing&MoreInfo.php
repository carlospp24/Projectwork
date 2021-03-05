<?php include 'headeer.html'?>
  <!doctype html>
    <html lang="en">
      <head>
        <link rel="stylesheet" href="styling.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Pricing & More Info</title>
      </head>

    <body>
    
    <div class="container">
      <h1>Hotels</h1>
        <div class="row">
            <div class="col-6">
              <p class="hometext">Mexico</p>
                <form name= "form1" method="post" action="create.php">
                  

                  <select>
                          <option value="Mex">Mex</option>
                          <option value="Spain">Spain</option>
                          if ($_POST['demo'] === 'Newest') {
    // Run this
    }
    elseif ( $_POST['demo'] === 'Best Sellers' ) {
    // Run this
    }

                          City: <input type="text" name="city"><br>
                          
                          Destinations:
                          <select name="city"> 
                            <option value="CDMX"> CDMX </option>
                            <option value="Acapulco"> Acapulco </option>
                            <option value="Isla Mujeres"> Isla Mujeres </option>
                            <option value="Los cabos"> Los cabos </option>
                            <option value="Mazatlan"> Mazatlan </option>
                            <option value="Veracruz"> Veracruz </option>
                            <option value="Cancun"> Cancun </option>
                          </select>
                          <br>
                          <input type="submit" value="Submit">
                        </form>
                        <img src="http://localhost:82/Github/Projectwork/images/CDMX.jpg" alt="" style=" width: 400px;">
                          
                              
                    </div>
                    <div class="col-6">
                      <p class="hometext">Spain</p>
                      <form name= "form1" method="post" action="create.php">
                          City: <input type="text" name="city"><br>
                          
                          Destinations:
                          <select name="city"> 
                          <option value="Madrid"> Madrid </option>
                          <option value="Gran Canaria"> Lanzarote </option>
                          <option value="Valencia"> Valencia </option>
                          <option value="barcelona"> Barcelona </option>
                          <option value="Malaga"> Malaga </option>
                          <option value="Mallorca"> Mallorca </option>
                          <option value="Ibiza"> Ibiza </option>
                          </select>
                          <br>
                          <input type="submit" value="Save Data">
                </form>
              <img src="http://localhost:82/Github/Projectwork/images/spain.jpg" alt="" style="width: 400px"></p></a>
            </div>
        </div>
                

                
    </div>
  </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      
    </body>
<footer>
  <?php include 'footer.html';?>
</footer>
</html>