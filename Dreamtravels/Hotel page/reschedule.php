<html>
<head><title>Signup</title></head>
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
            $end = date("Y-m-d", strtotime($_POST['order_contractEnd']));

            $u_id=$_POST["u_id"];//user id
            $h_id=$_POST['h_id'];//hotel id
            $book_n=$_POST['book_n'];//kiske name pe booked kiya h
            //updating date 
            $sql="UPDATE booking SET check_in = '$start',check_out= '$end' WHERE h_id = '$h_id' and id='$u_id' and name='$book_n'"; 
            $repasswordes=mysqli_query($conn,$sql);
            echo "<p style='text-align:center;font-size:50px;'>"."Thankyou<br>Successfully Updated"."</p>";
            echo "<a href = 'http://localhost/Dreamtravels/Home.php'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";
        }
    ?>
</body>
</html>