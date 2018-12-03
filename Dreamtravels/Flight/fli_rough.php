<?php session_start();?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png">
<style type="text/css">
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #ff0000;
    color: white;
}

/* botton image background with text*/
.container {
    position: relative;
    text-align: center;
    color: black;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>


<title>Flight</title>
<!--image slide-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/Dreamtravels/Home.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
   <a href="http://localhost/Dreamtravels/Flight/fli_rough.html" class="w3-button w3-padding-large"><i class="fa fa-plane w3-margin-right"></i>Flight Search</a>
   <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php" class="w3-button w3-padding-large"><i class="fa fa-hotel w3-margin-right"></i>Hotel</a>
   <a align="center" class="w3-bar-item w3-padding-large">Welcome &nbsp;<?php echo $_SESSION['name'];?></a>
  
  
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">2</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="http://localhost/Dreamtravels/Flight/f_history.php" class="w3-bar-item w3-button">Flight Booked History</a>
      <a href="http://localhost/Dreamtravels/Hotel%20page/h_history.php" class="w3-bar-item w3-button">Hotel Booked History</a>
    </div>
  </div>
  </div>
</div>



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:2000px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w2-col m2">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="<?php echo $_SESSION['img'];?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa-fw w3-margin-right w3-text-theme"></i>Name: &nbsp;<?php echo $_SESSION['name'];?></p>
         
        </div>
      </div>
      <br>
      
      
      
      <!-- Interests --> 
      <div class="w3-card-2 w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Related Search</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">Air India</span>
            <span class="w3-tag w3-small w3-theme-d4">Jet Airways</span>
            <span class="w3-tag w3-small w3-theme-d3">IndiGo</span>
            <span class="w3-tag w3-small w3-theme-d2">SpiceJet</span>
            <span class="w3-tag w3-small w3-theme-d1">GoAir</span>
            <span class="w3-tag w3-small w3-theme">JetLite</span>
            <span class="w3-tag w3-small w3-theme-l1">Air India Express</span>
          </p>
        </div>
      </div>
      <br>
      
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w2-col m9">
    
      <div class="w2-row-padding">
        <div class="w2-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2 class="w3-opacity"><b>Dream Travels Package</b></h2>
              <div class="w3-content w3-display-container">
                <img class="mySlides" src="cheapticket-domestic-flight-offer-d.jpg" style="width:100%">
  <img class="mySlides" src="bigbreaks-banners_1360_400_wknd500.png" style="width:100%">
  <img class="mySlides" src="bigbreaks-banners_1360_400_bb10.png" style="width:100%">
  <img class="mySlides" src="mega-flight-sale-lp-1490546183.jpg" style="width:100%">
  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <?php
        $host="localhost";
        $dbuser="root";
        $password="";
        $dbname="makemytrip";
        $conn=mysqli_connect($host,$dbuser,$password,$dbname);
        if(mysqli_connect_errno())
        {
            die("Connection lost");
        }
        else
        {
            $start = date("Y-m-d", strtotime($_POST['order_contractStart']));//date selected is fetch 
            $dt = new DateTime($start);

            $date = $dt->format('d');//helps to get only date form yyyy-mm-dd formate
            $d_form = $dt->format('d-M');

            $Name=$_POST["t1"];
            $arr=$_POST["t2"];
            $sql="SELECT * from flight";
            $check = "SELECT * from flight where depart='$_POST[t1]' and arrival='$_POST[t2]' and dat=' $date'";
            $result = mysqli_query($conn, $check);
            
            if(mysqli_num_rows($result) > 0){
            echo "<table border='1'>";
            echo "<tr>";
                echo "<th>F_id</th>";
                echo "<th>Flight_name</th>";
                echo "<th>Departure</th>";
                echo "<th>Dep_time</th>";
                echo "<th>Arrival</th>";
                echo "<th>Arri_time</th>";
                echo "<th>Duration</th>";
                echo "<th>Price</th>";
                echo "<th>Route</th>";
                echo "<th>Date-Month</th>";
                echo  "<th><b>Select</b></th>";
            echo "</tr>";
            $i=0;
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['f_id'] . "</td>";
                
                echo "<td>" . $row['f_name'] . "</td>";
                echo "<td>" . $row['depart'] . "</td>";
                echo "<td>" . $row['depart_time'] . "</td>";
                echo "<td>" . $row['arrival'] . "</td>";
                echo "<td>" . $row['arrival_time'] . "</td>";
                echo "<td>" . $row['duration'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['route'] . "</td>";
                echo "<td>" . $d_form. "</td>";// formate of dd-Month
                ?>
                <td>
                <form action='http://localhost/Dreamtravels/payment/fli__detail_pay.php' method='post'>
                <input type='hidden' name="id" value="<?php echo $row['f_id'];?>" >
                <input type='hidden' name="date" value="<?php echo $d_form;?>" >
                <input type='hidden' name="d" value="<?php echo $start;?>" >

                <input type ="submit" value="Book Now">
              </form>
                </td>
                <?php
            echo "</tr>";
            $i=$i+1;

        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
     }
     else
     {
        echo "Oops Pls Enter the details";
        echo "<script> window.location.assign('http://localhost/Dreamtravels/Flight/fli_rough.html'); </script>";
     }
 }
 
// Close connection
mysqli_close($conn);
?><br /><br>
        
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <h3>Booking Flights with Dream Travel</h3>

<p>Book your flights tickets with India’s leading flight booking company since the year 2000.
 While booking flights with DreamTravel, you can expect the ultimate online booking experience. </p>
 <p>With premium customer service, 24/7 dedicated helpline for support, and over 5 million delighted customers, 
 DreamTravel takes great pride in enabling customer satisfaction.
  With a cheapest flight guarantee,  book your tickets at the lowest airfares. Avail great offers,
  exclusive deals for loyal customers and get instant updates for your flight status and fare drops.</p> 

  <div class="container">
  <img src="long_img.jpg" alt="Flight Image" style="width:100% ;">
</div>
      </div>  
        </div> 
      
    <!-- End Middle Column -->
    </div>
    
    
  
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d2 w3-padding-10">
  <h5 align="center">Dream Travels</h5>
</footer>
<script>
//image slide show
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 