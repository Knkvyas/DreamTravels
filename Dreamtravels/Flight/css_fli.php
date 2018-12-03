<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css"-->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
    .container:after,.container:before{content:"";display:table;clear:both}
    .container{padding:0.01em 16px}
    .card-2{box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}
    .white{color:#000!important;background-color:#fff!important}
    .round{border-radius:4px}
    .margin{margin:16px!important}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;

}
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
</head>
<body>
<ul>
  <li><a class="active" href="http://localhost/Dreamtravels/Home.php">Home</a></li>
  <li><a href="http://localhost/Dreamtravels/Flight/f_history.php">Flight History</a></li>
  <li><a href="http://localhost/Dreamtravels/Hotel%20page/h_history.php">Hotel History</a></li>
  <li><a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php">Hotel</a></li>
  <li><a href="http://localhost/Dreamtravels/L&RPage.html">Logout</a></li>
</ul>
    
<div class="w3-theme-l5">
      <div class="container card-2 white round margin"><br>
        
        
        <h2><b>Flight</b></h2><br>
        <hr>
        </div>
    </div>
<div class="w3-theme-l5">
      <div class="container card-2 white round margin">
    <img class="mySlides" src="cheapticket-domestic-flight-offer-d.jpg" style="width:100%">
</div>
    </div>

<div class="w3-theme-l5">
      <div class="container card-2 white round margin">
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

            $Name=$_POST["t1"];
            $arr=$_POST["t2"];
            $sql="SELECT * from flight";
            $check = "SELECT * from flight where depart='$_POST[t1]' and arrival='$_POST[t2]' and dat='$_POST[date]'";
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
                echo "<td>" . $row['dat'] ."-". $_POST['month'] . "</td>";
                ?>
                <td>
                <form action='http://localhost/Dreamtravels/payment/fli__detail_pay.php' method='post'>
                <input type='hidden' name="id" value="<?php echo $row['f_id'];?>" >
                <input type ="submit" value="Book Now">
              </form>
                </td>
                <?php
            echo "</tr>";
            

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
?>
</div>
</div>
<div class="w3-theme-l5">
      <div class="container card-2 white round margin">
        <p align="center"><b>Dream Travels</b></p>
    </body>
    </html>
