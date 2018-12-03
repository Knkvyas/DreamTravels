<html>
<head><title>Signup</title></head>
<body>
    <?php
        $host="localhost";
        $dbuser="root";
        $password="";
        $dbname="images";
        $conn=mysqli_connect($host,$dbuser,$password,$dbname);
        if(mysqli_connect_errno())
        {
            die("Connection lost");
        }
        else
        {

            $Name=$_POST["name"];
            $sql="SELECT * from store";
            $check = "SELECT * from store where name='$_POST[name]'";
            $result = mysqli_query($conn, $check);
            
            if(mysqli_num_rows($result) > 0){
            echo "<table border='1'>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>registration</th>";
                echo "<th>email</th>";
                echo "<th>password</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['reg'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
     }
 }
 
// Close connection
mysqli_close($conn);
?>
</body>
</html>