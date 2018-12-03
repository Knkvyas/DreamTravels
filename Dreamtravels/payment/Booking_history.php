<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
    background-color: #C0C0C0;

}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="http://localhost/Dreamtravels/Home.php">Home</a>
  <a href="http://localhost/Dreamtravels/Flight/fli_rough.html">Flight Search</a>
  <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php">Hotel</a>
  <a href="http://localhost/Dreamtravels/L&RPage.html">Logout</a>
</div>
<h3 align="center">Booking History</h3><hr>
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

            

            $sql="SELECT * from booking";
            $check = "SELECT * from booking ";
            $result = mysqli_query($conn, $check);
            
            if(mysqli_num_rows($result) > 0)
            {

                  while($row = mysqli_fetch_array($result)){

                          echo $row['id'].'&nbsp';
                          echo $row['name'].'&nbsp';
                          echo $row['type'].'&nbsp';
                          echo $row['cost'].'&nbsp';
                          echo $row['date'].'&nbsp';
                          echo '<hr>';
                  }
        // Free result set
        mysqli_free_result($result);
     }
     else
     {
        echo "No Booking History";
     }
 }
 
// Close connection
mysqli_close($conn);
?>
</body>
</html>
