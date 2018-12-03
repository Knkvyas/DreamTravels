<html>
<head><title>Cancellation</title></head>
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
            $cancel=$_POST['id'];//flight id
            $a=$_SESSION['name'];//user name 
            $book_user_name=$_POST['booked_name']; //booked user name
            $check = "SELECT * from signup where name='$a'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $id=$row['id'];

                }
            }
            
            $check = "DELETE FROM flight_booking WHERE f_id ='$cancel' and id='$id' and name='$book_user_name'";
            $result = mysqli_query($conn, $check);
            if ($result==true)
                {
                    
                    echo "<br>";

                echo "<p style='text-align:center;font-size:50px;'>"."<br>Cancelled Successfully"."</p>";
                echo "<a href = 'http://localhost/Dreamtravels/Home.php'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";
        
                    
                }
            else
            {
                echo "ERROR!";
                }
    }
    ?>
</body>
</html>