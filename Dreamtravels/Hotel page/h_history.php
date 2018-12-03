<html>
<head><title>Hotel History</title>
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
<h1> Hotel History</h1>
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
                    $u_id=$row['id'];

                }
            }


        	$reg=$_SESSION['name'];
        	echo "<h2>".$reg."</h2>";
            $sql="SELECT * from booking";
            $check = "SELECT * from booking where id='$u_id'";
            $result = mysqli_query($conn, $check);
            
            if(mysqli_num_rows($result) > 0){
            echo "<table border='1' cellpadding='6' cellspacing='0'>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Hotel Name</th>";
                echo "<th>Name</th>";
                echo "<th>email</th>";
                echo "<th>mobile</th>";   
                echo "<th>Location</th>";
                echo "<th>Check-In</th>";
                echo "<th>Check-Out</th>";
                echo "<th>Guest</th>";
                echo "<th>Payment Mode</th>";
                echo "<th>Charges</th>";
                echo "<th>Cancel Booking Now?</th>";
                echo "<th>Reschedule</th>";
            echo "</tr>";
           
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['detail'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['check_in'] . "</td>";
                echo "<td>" . $row['check_out'] . "</td>";
                echo "<td>" . $row['guest'] . "</td>";
                echo "<td>" . $row['payment_mode'] . "</td>";
                echo "<td>" . $row['cost'] . "</td>";
                ?>

                <td>
                <form action='http://localhost/Dreamtravels/cancellation.php' method='post'>
                    <input type='hidden' name="id" value="<?php echo $row['h_id'];?>" >
                    <input type='hidden' name="booked_name" value="<?php echo $row['name'];?>" >
                    <input type ="submit" value="Cancel Now">
              </form>
                </td>
                <td>
                <form action='http://localhost/Dreamtravels/Hotel%20page/reschedule.php' method='post'>
                    Check In  Date
                    <input type="date" id="order_contractStart" name="order_contractStart"><br><br>
                    Check Out Date
                    <input type="date" id="order_contractEnd" name="order_contractEnd"><br><br>
                    <input type='hidden' name="h_id" value="<?php echo $row['h_id'];?>" >
                    <input type='hidden' name="book_n" value="<?php echo $row['name'];?>" >
                    <input type='hidden' name="u_id" value="<?php echo $row['id'];?>" >
                    <input type ="submit" value="Reschedule Now">
              </form>
                </td>
                <?php
            echo "</tr>";
            

        }

        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
     
     
 }
 
// Close connection
mysqli_close($conn);

?>
            


</p>
</body>