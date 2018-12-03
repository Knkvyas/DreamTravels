<?php
session_start();
    if(isset($_POST['Submit']))
    {   
        $host="localhost";
        $dbuser="root";
        $pass="";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $comp=$_POST['deleteme'];
        $query = "delete from hostel where complain_no = '$_POST[deleteme]'";
        $repasses=mysqli_query($conn,$query);
    }?>


<!DOCTYPE html>
<html>
<head></head>
<body>

<h1 style="background-color: black; color:red; align;">
        <?php
        $host="localhost";
        $dbuser="root";
        $pass="";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        echo "Welcome Warden";
        ?>
</h1>
<h2>
<?php
        $host="localhost";
        $dbuser="root";
        $pass="";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $query = mysqli_query($conn, "SELECT * FROM hostel");
        $row2 = mysqli_fetch_array($query);
        $query1 = "SELECT complain_no, comp, dept, room_no FROM hostel where dept='Room' and block = 'B'";
        $row1 = mysqli_query($conn,$query1);
        while($row = mysqli_fetch_assoc($row1)) {
        echo $row["dept"]."   :  ".$row["room_no"]."   :  ".$row["comp"]."   =>  ".$row["complain_no"]."<br>";
        }
        $query3 = "SELECT complain_no, comp, dept, room_no FROM hostel where dept='Washroom' and block = 'B'";
        $row3 = mysqli_query($conn,$query3);
        while($row = mysqli_fetch_assoc($row3)) {
        echo $row["dept"]."   :  ".$row["room_no"]."   :  ".$row["comp"]."   =>  ".$row["complain_no"]."<br>";
        }

        $query4 = "SELECT complain_no, comp, dept, room_no FROM hostel where dept='Wifi' and block = 'B'";
        $row4 = mysqli_query($conn,$query4);
        while($row = mysqli_fetch_assoc($row4)) {
        echo $row["dept"]."   :  ".$row["room_no"]."   :  ".$row["comp"]."   =>  ".$row["complain_no"]."<br>";
        }

        $query5 = "SELECT complain_no, comp, dept, room_no FROM hostel where dept='Mess' and block = 'B'";
        $row5 = mysqli_query($conn,$query5);
        while($row = mysqli_fetch_assoc($row5)) {
        echo $row["dept"]."   :  ".$row["room_no"]."   :  ".$row["comp"]."   =>  ".$row["complain_no"]."<br>";
        }
?>
</h2>
<br><br><br><br><br><br>
DELETE THE COMPLAINT WHICH IS SOLVED 
<br><br>
<form action="" method="POST">
<input type="number" name="deleteme" placeholder="Complaint Number"/><br><br>
<input type="submit" name="Submit" value="Submit"/>
</form>
</h2>
</body>
</html>