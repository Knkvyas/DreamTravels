<html>
<head><title>Reschedule</title></head>
<body>
    <?php
    session_start();
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
            $start = date("Y-m-d", strtotime($_POST['order_contractStart']));

            $u_id=$_POST["id"];//user id
            $f_id=$_POST['f_id'];//hotel id
            $booked_name=$_POST['booked_name'];//kiske name pe booked kiya h
            //updating date 
            $sql="UPDATE flight_booking SET date_booked = '$start' WHERE f_id = '$f_id' and id='$u_id' and name='$booked_name'"; 
            $repasswordes=mysqli_query($conn,$sql);
            
            echo "<p style='text-align:center;font-size:50px;'>"."Thankyou<br>Successfully Updated"."</p>";
            echo "<a href = 'http://localhost/Dreamtravels/Home.php'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";
    }
    ?>
</body>
</html>