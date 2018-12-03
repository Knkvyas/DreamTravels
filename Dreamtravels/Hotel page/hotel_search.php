<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Hotel</title>
<link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png"></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    
    <p class="w3-center"><img src="<?php echo $_SESSION['img'];?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa-fw w3-margin-right w3-text-theme"></i>Hi' &nbsp;<?php echo $_SESSION['name'];?></p>
    </p>
  </div>
  <div class="w3-bar-block"><hr />
    <a href="#Profile" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Profile</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a onclick="location.href='http://localhost/Dreamtravels/Home.php';" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a>
    <a onclick="location.href='http://localhost/Dreamtravels/Flight/fli_rough.html';" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plane fa-fw w3-margin-right"></i>Flight</a>

    <a onclick="location.href='http://localhost/Dreamtravels/L&RPage.html';" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>Log Out</a>
    
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="Profile">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Dream Travel</b></h1>

    <form action="http://localhost/Dreamtravels/Hotel%20page/hotel.php" method="post">
      City,Hotel or Area 
      <input type="text" name="location">
      <input type="Submit" value="Submit">
    </form>


    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="hotel-interior-room0416.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Bangalore</b></p>
        <p><b>Vits Mumbai Hotel</b></p>
          <p>Best view with classical Room 
            Near Central</p>
      <div class="w3-panel w3-large">
        <i class="fa fa-wifi w3-hover-opacity"></i>
        <i class="fa fa-cab w3-hover-opacity"></i>
        <i class="material-icons" style="font-size:26px">mood</i>  
        <i class="material-icons" style="font-size:26px">pool</i>
           </div>   
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="maxresdefault.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Mumbai</b></p>
        <p><b>FabHotel Le Western Andheri</b></p>
        <p>Classic Rooms with view<br><br>
        <i class="fa fa-wifi w3-hover-opacity" style="font-size:20px"></i>
        <i class="material-icons" style="font-size:26px">mood</i>
        <i class="material-icons" style="font-size:26px">pool</i>
        <i class="fa fa-cab w3-hover-opacity" style="font-size:22px"></i>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="hoteletq1015.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Goa</b></p>
        <p><b>Aurora Terrace Suite</b></p>
        <p>Located 2.4m form Goa Beach</p>
        <i class="material-icons" style="font-size:26px">sentiment_neutral</i>  
        <i class="material-icons" style="font-size:26px">pool</i>
        <i class="material-icons" style="font-size:26px">signal_wifi_off</i>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="hotel-interior-room0416.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Delhi</b></p>
        <p><b>Villa Malta Suite</b></p>
        <p>Classic Rooms with view</p>
        <i class="fa fa-wifi w3-hover-opacity" style="font-size:20px"></i>
        <i class="material-icons" style="font-size:26px">mood</i>
        <i class="material-icons" style="font-size:26px">pool</i>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="SunwayHotelHanoiSuperiorRoom.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Kolkata</b></p>
        <p><b>Bellavista Penthouse</b></p>
        <p>Best view with classical Room 
            Near Central</p>
        <i class="material-icons" style="font-size:26px">sentiment_neutral</i>  
        <i class="material-icons" style="font-size:26px">signal_wifi_off</i>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="TS_Hotel_King.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Jaipur</b></p>
        <p><b>PREMIUM ROOM</b></p>
         <p>Classic Rooms with view</p>
        <i class="fa fa-wifi w3-hover-opacity" style="font-size:20px"></i>
        <i class="material-icons" style="font-size:26px">mood</i>
      </div>
    </div>
  </div>
   <!--3rd Section-->

   <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="6926_ho_00_p_2048x1536.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Kolkata</b></p>
        <p><b>Sabah Oriental Hotel.</b></p>
        <p>Classic Rooms with view</p>
        <i class="fa fa-wifi w3-hover-opacity" style="font-size:20px"></i>
        <i class="material-icons" style="font-size:26px">mood</i>
        <i class="material-icons" style="font-size:26px">pool</i>
        <i class="fa fa-cab w3-hover-opacity" style="font-size:22px"></i>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="Grand_Hyatt_Exterior.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Jaipur</b></p>
        <p><b>S&N International Hotel.</b></p>
        <p>3.4m form Central Railway Station</p>
        <i class="material-icons" style="font-size:26px">sentiment_neutral</i>  
        <i class="material-icons" style="font-size:26px">pool</i>
        <i class="material-icons" style="font-size:26px">signal_wifi_off</i>
        
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="Taj-Lands-End-RetailInAsia-1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
         <p><b>Delhi</b></p>
        <p><b>Rambagh Palace</b></p>
        <p>Best view with classical Room 
            Near Central</p>
        <i class="fa fa-wifi w3-hover-opacity" style="font-size:20px"></i>
        <i class="material-icons" style="font-size:26px">mood</i>
        
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>VIT University,India</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
  </div>s

  <!-- Footer --><header id="about">
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div>
      <h4><p>Why Book Hotels on the Country’s Best Travel Site ?</h4>

Planning a vacation or business trip, and haven’t found a hotel yet? Then use our web portal to find a hotel, which suits you in every way. The best travel site in India, Dream Travel has the largest database of hotels in the country and outside. Our user-friendly website makes online hotel booking an easy task, which can be completed in mere minutes.

<h4>How to book hotels on Dreamtravels.com?</h4>

Now, suppose you are travelling to Goa. All you have to do is click on the “Hotels” tab on the homepage. After typing Goa under the “I WANT TO GO” header, select your option.On clicking the “Search Hotels” button, all the accommodation options are displayed on a single page. To make your task easier, our portal is provided with filters that you can use to narrow down your search.

<h4>What Dreamtravels.com has in store for you?</h4>

We have all sorts of hotels, ranging from luxury to cheap, so whatever be your requirement, you will get the accommodation. When you find the hotel of your choice, just click on its name to see its detailed description. Apart from Goa, our database includes myriad properties in all holiday and business destinations in India. <b>Our payment gateway is totally secure</b>, so all your bank details are safe. A smooth transfer process means that making payment is as swift as searching the hotel. So, whether you are looking for budget or upscale hotels in Delhi, Shimla, Mumbai, Chennai or any other destination, visit Dreamtravel, and get the best deal.</p>
    </div>

    <div>
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Surat</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Mumbai</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Delhi</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Rameshwaram</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Udaipur</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">bangalore
</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">kerala</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Chennai</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Goa</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Agra</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Kolkata</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Jaipur</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Gauhati</span>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24"> DreamTravels.com</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>