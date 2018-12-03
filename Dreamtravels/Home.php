<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-button w3-text-white w3-padding-large w3-hover-white"><b><i class="fa fa-map-marker w3-margin-right"></i>DreamTravel</b></a>
    <a class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="http://localhost/Dreamtravels/L&RPage.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">2</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="http://localhost/Dreamtravels/Flight/f_history.php" class="w3-bar-item w3-button">Flight Booked History</a>
      <a href="http://localhost/Dreamtravels/Hotel%20page/h_history.php" class="w3-bar-item w3-button">Hotel Booked History</a>
    </div>
  </div>
 
    <a word-spacing: 30px; align="center" class="w3-bar-item w3-padding-large ">Welcome &nbsp;
      <?php 
      session_start();
      echo $_SESSION['name'];
      ?></a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="http://localhost/Dreamtravels/L&RPage.html" class="w3-bar-item w3-button w3-padding-large" align="right">Log Out</a>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="hotel.jpg" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Flight</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Hotel');"><i class="fa fa-bed w3-margin-right"></i>Hotel</button>
      
    </div>

    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Travel the world with us</h3>
      <p><button class="w3-button w3-dark-grey" onclick="location.href='http://localhost/Dreamtravels/Flight/fli_rough.html'">Search Flight</button></p>
    </div>

    <div id="Hotel" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Find the best hotels</h3>
      <p>Book a hotel with us and get the best fares and promotions.</p>
      <p>We know hotels - we know comfort.</p>
      <p><button class="w3-button w3-dark-grey" onclick="location.href='http://localhost/Dreamtravels/Hotel%20page/hotel_search.php';">Search Hotels</button></p>
    </div>

    
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3>Good Offers Right Now</h3>
    <h6>Up to <strong>50%</strong> discount.</h6>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" target="_self"><img src="f-terre.jpg" alt="Cinque Terre" style="width:100%"></a>
        <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" target="_self"><img src="f_newyork.jpg" alt="New York" style="width:100%"></a>
            <span class="w3-display-bottomleft w3-padding">New York</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" target="_self"><img src="f_sand.jpg" alt="San Francisco" style="width:100%"></a>
            <span class="w3-display-bottomleft w3-padding">San Francisco</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" target="_self"><img src="f_pisa.jpg" alt="Pisa" style="width:100%"></a>
            <span class="w3-display-bottomleft w3-padding">Pisa</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" target="_self"><img src="f_paris.jpg" alt="Paris" style="width:100%"></a>
            <span class="w3-display-bottomleft w3-padding">Paris</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore Nature</h3>
    <p>Travel with us and see nature at its finest.</p>
  </div>
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" target="_self"><img src="f_norway.jpg" alt="Norway" style="width:100%"></a>
      <div class="w3-container w3-white">
        <h3>West Coast, Norway</h3>
        <p class="w3-opacity">Roundtrip from $79</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="w3-button w3-margin-bottom">Buy Tickets</button>
      </div>
    </div>
    <div class="w3-half w3-margin-bottom">
      <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" target="_self"><img src="f_Aust.jpg" alt="Austria" style="width:100%"></a>
      <div class="w3-container w3-white">
        <h3>Mountains, Austria</h3>
        <p class="w3-opacity">One-way from $39</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="w3-button w3-margin-bottom">Buy Tickets</button>
      </div>
    </div>
  </div>

  
  
  <!-- Contact -->
  <div class="w3-container">
    <h2>Contact</h2>
    <p>Let us book your next trip!</p>
    <i class="fa fa-map-marker" style="width:30px"></i> Chennai,India<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9999999999<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: dreamtravels@gmail.com<br>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->


<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
