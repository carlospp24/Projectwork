<?php include 'headeer.html'?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Corona Information</title>
  <style>


li {
margin-top: 10mm;
margin-left: 10mm;
font-family: Georgia, 'Times New Roman', Times, serif;
color: #ffffff;
font-size: 25px;
}
    h2 {
    margin-left: 10mm;
    padding-top:20mm;

}
    .covid{
      margin-top: 10mm;
margin-left: 10mm;
font-family: Georgia, 'Times New Roman', Times, serif;

font-size: 25px;
color: white;
    }
    li{
      color: white;
    }
    .dropbtn {
    background-color: rgba(114, 108, 108, 0.589);
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width:100%;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
    margin-left: 100mm;
   margin-bottom: 1mm;
   
    
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color:blueviolet;
    min-width: 160px;
    box-shadow: blueviolet;
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: whitesmoke
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: blueviolet;
}
   .login-btn{
        margin: 5px auto 0px;
        
    }
    .login-btn a{
        width: 150px;
        text-decoration: none;
        display: inline block;
        margin:  10px;
        padding: 6px ;
        color: white;
        border: .5px solid white;
        position: relative;
        z-index: 1;
        transition: color 0.5s;
        text-align: center;
        float: right;
    }
    .login-btn a span{
        width: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        z-index: -1;
        transition: 0.5s;
    }
    .login-btn a:hover span{
        width: 100%;
    }
    .login-btn a:hover{
        color: black;
    }
    @media screen and (max-width : 770px){
    .banner-btn a{
        display: block;
        margin: 20px auto;
    }
  }
  </style>
  </head>



  <body>
  <h2>Government travel restrictions and advisories </h2>
    <div class="row">
    <div class="col-4">
        <p class="covid"><br>Please check for travel restrictions before booking and travelling to an accommodation. Travel may be permitted only for certain purposes and in particular, touristic travel may not be allowed. To help you on your way, we included publicly available links to government websites for several countries around the world. Please note that not all countries are covered below. If a country is not included in this overview it doesn’t mean that no travel restrictions are in place and we recommend that you seek out information for any country you are planning to travel to. We are not responsible for the content of the public (government) websites linked below. Government responses continue to evolve, so please check back often for updates and rely on your national and local government for the most current information.</p>
    </div>
    <div class="col-8">
                <img url="http://localhost/Projectwork-master/images/Corona-Info-INSTA.jpg" alt="" style=" width: 800px;padding-top: 2rem; padding-left: 15rem; ">
                 </div>
    </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="dropdown">
                <button class="dropbtn">Travel restrictions and advisories in Africa</button>
                <div class="dropdown-content">
                    <a href="#">Egypt</a>
                    <a href="#">Ghana </a>
                    <a href="#">Tunisia</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="dropdown">
                <button class="dropbtn">Travel restrictions and advisories in Asia-Pacific</button>
                <div class="dropdown-content">
                    <a href="#">American Samoa</a>
                    <a href="#">Astralia</a>
                    <a href="#">Brunei</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="dropdown">
                <button class="dropbtn">Travel restrictions and advisories in Europe</button>
                <div class="dropdown-content">
                    <a href="#">Finland</a>
                    <a href="#">France</a>
                    <a href="#">Spain</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="dropdown">
                <button class="dropbtn">Travel restrictions and advisories in Latin America and the Caribbean</button>
                <div class="dropdown-content">
                    <a href="#">Bhamas</a>
                    <a href="#">Costa Rica</a>
                    <a href="#">Mexico</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="dropdown">
                <button class="dropbtn">Travel restrictions and advisories in the Middle East</button>
                <div class="dropdown-content">
                    <a href="#">Jordan</a>
                    <a href="#">Oman</a>
                    <a href="#">United Arab Emirates</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="dropdown">
                <button class="dropbtn">Travel restrictions and advisories in North America</button>
                <div class="dropdown-content">
                    <a href="#">Canada</a>
                    <a href="#">Nova Scotia</a>
                    <a href="#">New Brunswick</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="dropdown">
                <button class="dropbtn">Travel restrictions and advisories in South America</button>
                <div class="dropdown-content">
                    <a href="#">Peru</a>
                    <a href="#">Brazil</a>
                    <a href="#">Colombia</a>
                </div>
            </div>
        </div>
    </div>
    <h2>How do I cancel my booking in this situation?</h2>
    <div class="col-8">
    <p class="covid">For the best support, please sign in using your account. If you do not have an account, you can use your booking confirmation number and PIN code to sign in on a desktop computer or a laptop.<br>


        <li>If your booking is no longer free to cancel or is non-refundable, you may incur a cancellation fee. Properties can also choose to change the dates of your reservation at no extra cost, so it’s worth contacting the property to see if this is possible.
        </li>
        <li>If your reservation was affected by Coronavirus-related events such as border closures or travel limitations enforced by authorities, but is no longer free to cancel or is non-refundable, sign in to check options to manage the reservation.
     </li>
    </p>
    </div>

    <h2>Can I move my booking to a future date?</h2>
    <div class="col-8">
    <p class="covid">Moving your booking to a future date depends on the policies of the reservation. Please sign in using either your account or confirmation number and PIN, select the booking you want to change, and you’ll see what options are available.
        <br>
        You may also contact the property to ask for a date change.
    </p>
    </div>
    <h2>Will I get charged additionally if I move my reservation to a future date?</h2>
    <div class="col-8">
    <p class="covid">If you change your dates and the property has availability there may be a difference in price (higher or lower). This may be due to seasonality or different rates on weekdays versus weekends.
        <br>
        If the rates are higher, you will have to pay the difference between the original price and the price for your new dates. If they are lower, the price difference will be reflected in your booking.
    </p>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
  </body>
  <footer>
  <?php include 'footer.html';?>
  </footer>
</html>




