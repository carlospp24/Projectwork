
<html>
  <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styling.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
      <title>Pricing and Info</title>
  </head>
  <body>
  <form action="" method="Post">
        <fieldset>
        <div>
            Select Country:<select name="Contry" required>
                <option value="empt"></option>
                <option value="Mex">Mexico</option>
                <option value="Spain">Spain</option>
                </select>
                <br>
                <input type="submit" value="Save Data">
        </div>
        </fieldset>
        <fieldset>
            <legend>
            Cities
            </legend>
            <div>
            Select City:<select name="city" required>
                <option value="CDMX"> CDMX </option>
                <option value="Acapulco"> Acapulco </option>
                <option value="Isla Mujeres"> Isla Mujeres </option>
                <option value="Los cabos"> Los cabos </option>
                <option value="Mazatlan"> Mazatlan </option>
                <option value="Veracruz"> Veracruz </option>
                <option value="Cancun"> Cancun </option>
            </select>
            <br>
            <input type="submit" value="Save Data">
            </div>
        </fieldset>
            <fieldset>
                <legend>
                Cities
                </legend>
                <div>
                Destinations:
                <select name="city" id="=showHide3" onclick="showHide3">
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
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    Personal Details:
                </legend>
            
                <div>
                    <label for ="name">Username: </label><input type="text" name ="username" id="name" required autofocus placeholder="Username" pattern="[a-zA-Z]{3,}" title="please enter more than 3 letters">
                    <label for ="email">Email: </label><input type="text" name ="email" id="email" required placeholder="Email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter a valid email">
                </div>
                <div>
                    <label for ="phone">Phone: </label><input type="tel" name ="phone" id="phone" required placeholder="Phone number" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" title="Please enter a valid phone number">
                </div>
            </fieldset>
    </form>
    
    </script>
  </body>
  <footer>
  <?php include 'footer.html';?>
</footer>
</html>