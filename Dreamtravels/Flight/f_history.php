<html>
<head><title>Flight History</title>
    <link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png">
<style>
body {
    background-color:#c4c4c4;
}
h1 {
    background-color: orange;
    text-align: center;
}
</style>
</head>
<body>
<h1> Flight History</h1>
<hr>
<hr>
<p>
<?php
        $host="localhost";
        $dbuser="root";
        $password="";
        $dbname="makemytrip";
        session_start();
        $conn=mysqli_connect($host,$dbuser,$password,$dbname);
        if(mysqli_connect_errno())
        {
            die("Connection lost");
        }
        else
        {
            //fetching id of user 
            $a=$_SESSION['name'];
            $check = "SELECT * from signup where name='$a'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $id=$row['id'];
                }
            }


        	$reg=$_SESSION['name'];
        	echo "<h2>".$reg."</h2>";
            $sql="SELECT * from flight_booking";
            $check = "SELECT * from flight_booking where id='$id'";
            $result = mysqli_query($conn, $check);
            
            if(mysqli_num_rows($result) > 0){
            echo "<table border='1' cellpadding='6' cellspacing='0'>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>f_id</th>";
                echo "<th>name</th>";
                echo "<th>email</th>";
                echo "<th>flight_name</th>";
                echo "<th>arrival</th>";
                echo "<th>arrival Time</th>";
                echo "<th>departure</th>";
                echo "<th>departure Time</th>";
                echo "<th>Booked Date</th>";
                echo "<th>Charges</th>";
                echo "<th>pay_mode</th>";
                echo "<th>Cancel Booking Now?</th>";
                echo "<th>Reschedule</th>";
            echo "</tr>";
           
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['f_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['flight_name'] . "</td>";
                echo "<td>" . $row['arrival'] . "</td>";
                echo "<td>" . $row['arrival_time'] . "</td>";
                echo "<td>" . $row['departure'] . "</td>";
                echo "<td>" . $row['departure_time'] . "</td>";
                echo "<td>" . $row['date_booked'] . "</td>";
                echo "<td>" . $row['Charges'] . "</td>";
                echo "<td>" . $row['pay_mode'] . "</td>";
                ?>
                <td>
                <form action='http://localhost/dreamtravels/fli_cancellation.php' method='post'>
                    <input type='hidden' name="id" value="<?php echo $row['f_id'];?>" >
                    <input type='hidden' name="booked_name" value="<?php echo $row['name'];?>" >
                    <input type ="submit" value="Cancel Now">
                </form>
                </td>

                <td>
                <form action='http://localhost/Dreamtravels/Flight/f_reschedule.php' method='post'>
                    Select Date
                    <input type="date" id="order_contractStart" name="order_contractStart"><br><br>
                    <input type='hidden' name="f_id" value="<?php echo $row['f_id'];?>" >
                    <input type='hidden' name="id" value="<?php echo $row['id'];?>" >
                    <input type='hidden' name="booked_name" value="<?php echo $row['name'];?>" >
                    <input type ="submit" value="Reschedule">
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
        echo "Oops No details";
        
     }
 }
 
// Close connection
mysqli_close($conn);
?>


</p>
</body>