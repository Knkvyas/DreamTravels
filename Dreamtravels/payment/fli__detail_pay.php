<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

  <title>Flight Payment</title>
<link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png">
    <style>


body{
    margin: 0;
    padding: 0;
    background: #fff;

    color: #fff;
    font-family: Arial;
    font-size: 12px;
}

.body{
    position: absolute;
    top: -20px;
    left: -20px;
    right: -40px;
    bottom: -40px;
    width: auto;
    height: auto;
    background-image: url("back_image.jpg");
    background-size: cover;
    -webkit-filter: blur(0px);
    z-index: 0;
}

.grad{
    position: absolute;
    top: -20px;
    left: -20px;
    right: -40px;
    bottom: -40px;
    width: auto;
    height: auto;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
    z-index: 1;
    opacity: 0.7;
}

.header{
    position: absolute;
    top: calc(10% - 35px);
    left: calc(60% - 255px);
    z-index: 2;
}

.header div{
    float: left;
    color: #fff;
    font-family: 'Exo', sans-serif;
    font-size: 35px;
    font-weight: 200;
}

.header div span{
    color: #00008B !important;
}

.reg{
    position: absolute;
    top: calc(46% - 75px);
    left: calc(25% - 50px);
    height: 150px;
    width: 350px;
    padding: 10px;
    z-index: 2;
}

.reg input[type=text]{
    width: 250px;
    height: 30px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.6);
    border-radius: 2px;
    color: #fff;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 4px;
}




.reg input[type=submit]{
    width: 260px;
    height: 35px;
    background: #fff;
    border: 1px solid #fff;
    cursor: pointer;
    border-radius: 2px;
    color: #000000;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 6px;
    margin-top: 10px;
}

.reg input[type=submit]:hover{
    opacity: 0.8;
}

.reg input[type=submit]:active{
    opacity: 0.6;
}

.reg input[type=text]:focus{
    outline: none;
    border: 1px solid rgba(255,255,255,0.9);
}
.reg input[type=submit]:focus{
    outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>


</head>

<body>
    <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div><span><h3>DreamTravels Flight</h3></span><br><br>
            </div>
        </div>
        <br>
        
        <div class="reg">
        <form action="f_payment.php" method="post">
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
           $a=$_SESSION['name'];
            $check = "SELECT * from signup where name='$a'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $name=$row['name'];
                }
            }
        }
            

            echo "<h2>".$name."</h2>"?><br>
            <input type="text" placeholder="Name"name="name"><br><br>
            <input type="text" placeholder="email" name="email"><br><br>

            
            <h3>Payment Mode</h3><select name="t1">
              <option value="">Select</option>
              <option value="Paytm">Paytm</option>
              <option value="Net banking">Net Banking</option>
              <option value="Visa">Visa Card</option>
            </select><br>
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
            $a=$_POST['id'];
            $date=$_POST['date'];
            $d=$_POST['d'];
            
            $check = "SELECT * from flight where f_id='$a'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    
                    echo "<table border='1' cellpadding='12' cellspacing='0'>";
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
                    echo "</tr>";
                    echo "<tr>";
                        $_SESSION['f_select'] = $row['f_id'];
                        echo "<td>" . $row['f_id'] . "</td>";
                        echo "<td>" . $row['f_name'] . "</td>";
                        echo "<td>" . $row['depart'] . "</td>";
                        echo "<td>" . $row['depart_time'] . "</td>";
                        echo "<td>" . $row['arrival'] . "</td>";
                        echo "<td>" . $row['arrival_time'] . "</td>";
                        echo "<td>" . $row['duration'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['route'] . "</td>";
                        echo "<td>" . $date."</td>";
                    echo "</tr></table>";
        }
    }
}
        ?>
                <input type='hidden' name="date" value="<?php echo $d;?>" >
        <input type="Submit" value="Proceed">
        </form>
    </div>
</body>
</html>
