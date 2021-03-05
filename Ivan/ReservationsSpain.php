<?php include 'headeer.html'?>
  <!doctype html>
    <html lang="en">
      <head>
        <link rel="stylesheet" href="Booking.css">
        <link rel="stylesheet" href="styling.css">
        <meta charset="utf-8">
         <title>Pricing & More Info</title>
      </head>

<body>

<fieldset>
    <form action="" method="Post">
        <div class="row1">
            <div class="col-1">
            <fieldset>
                <legend>
                Log in
                </legend>
                <label for ="uname">Username: </label><input type="text" name ="uname" id="uname" required autofocus placeholder="" pattern="[a-zA-Z]{3,}" title="please enter more than 3 letters">
                <label for ="email">Email: </label><input type="text" name ="email" id="email" required placeholder="" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter a valid email">
                <label for ="password">password: </label><input type="password" name ="password" id="password" required >  
            </fieldset>
            </div>
            
        </div>
    </form>
</fieldset>

    <form action="regSpain.php" method="post">
        <div class="row1">
            <div class="col">
                <fieldset>
                    <legend>
                    Registration:
                    </legend>
                        <label for ="fname">First Name:</label><input type="text" name ="fname" id="fname" required autofocus placeholder="First name" pattern="[a-zA-Z]{3,}" title="Name">
                        <label for ="lname"></label>Last Name:<input type="text" name ="lname" id="lname" required placeholder="Last name" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Last name">
                        <label for ="phone">Phone: </label><input type="tel" name ="phone" id="phone" required placeholder="Phone number" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" title="Please enter a valid phone number">
                </fieldset>
            </div>    
                <div class="col">
                <fieldset>
                        <legend>
                        Address
                        </legend>
                        <label for ="street">Street:</label><input type="text" name ="street" id="street" required autofocus placeholder="Street" pattern="[a-zA-Z]{10,}[0-9]{10}" title="Street">
                        <label for ="city">city:</label><input type="text" name ="city" id="city" required autofocus placeholder="city" pattern="[a-zA-Z]{3,}" title="city">
                        <label for ="country">country:</label><input type="text" name ="country" id="country" required autofocus placeholder="country" pattern="[a-zA-Z]{3,}" title="country">
                        <label for ="zip">Zipcode </label><input type="number" name ="zip" id="zip" required placeholder="Zipcode" pattern="[0-9]{5}" title="Please enter a valid zipcode number">
                    </fieldset>
            </div>
            <div class="col">
                <fieldset>
                    <legend>
                        Gender:
                    </legend>
                    <label for ="male">Male</label><input type="radio" name ="gender" id="male">
                    <label for ="female">Female</label><input type="radio" name ="gender" id="female">
                </fieldset>
            </div>
            <div class="col">
                <fieldset>
                    <legend></legend>
                    <label for ="passp">Passport Number:</label><input type="text" name ="passp" id="passp" required autofocus placeholder="Passport Number" pattern="[a-zA-Z]{10,}[0-9]{10}" title="Passport">
                </fieldset>
            </div>
        </div>
  
        <div class="row1">
            <div class="col">
                <fieldset>
                    <legend></legend>
                    <label for ="age">Age:</label><input type="number" name ="age" id="age" required placeholder="Age" pattern="[0-9]{3}" title="Enter a valid Age">
                    <label for ="bday">birthday</label><input type="date" name ="bday" id="bday" min "1930-01-01" >
                </fieldset>
            </div>
            <fieldset>
            <div class="col">
                <legend>
                    Select Destination:
                </legend>
                Select City of destination:<select name="dest" required placeholder="City"
                    <option value="Madrid"> Madrid </option>
                    <option value="Gran Canaria"> gran Canaria </option>
                    <option value="Valencia"> Valencia </option>
                    <option value="barcelona"> Barcelona </option>
                    <option value="Malaga"> Malaga </option>
                    <option value="Mallorca"> Mallorca </option>
                    <option value="Ibiza"> Ibiza </option>
                </select>
                </div>
            </fieldset> 
            <div class="col">
                <fieldset>
                    <legend></legend>
                    <label for ="date">Date</label><input type="date" name ="date" id="date" min "1930-01-01" >
                </fieldset>
            </div>
            <div class="col">
                <fieldset>
                    <legend>
                        Meals & Buffet
                    </legend>
                    <label for ="Breakfast">Breakfast</label><input type="checkbox" name ="breakfast" id="breakfast">
                    <label for ="Lunch">Lunch</label><input type="checkbox" name ="lunch" id="lunch">
                    <label for ="dinner">Dinner</label><input type="checkbox" name ="dinner" id="dinner">
                </fieldset>
            </div>
            <div class="col">
                <fieldset>
                <div class="col">
                <legend>
                    Log in:
                </legend>
                    <label for ="uname">Username: </label><input type="text" name ="uname" id="uname" required autofocus placeholder="" pattern="[a-zA-Z]{3,}" title="please enter more than 3 letters">
                    <label for ="email">Email: </label><input type="text" name ="email" id="email" required placeholder="" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter a valid email">
                    <label for ="password">password: </label><input type="password" name ="password" id="password" required >
                </div>
                </fieldset>


            </div>
        </div>
    </form>

<fieldset>
<form method="post" action="http://localhost:82/Github/Projectwork/regSpain.php">
    <button type="submit" class="bookbut1">book it!</button>
</form>

  
</body>

<footer>
  <?php include 'footer.html';?>
</footer>
</html>