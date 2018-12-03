<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

  <title>~Hotel Payment~</title>
  <link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png">

    <style>


body{
    margin: 0;
    padding: 0;
    background: #fff;

    color: #fff;
    font-family: Arial;
    font-size: 14px;
}

.body{
    position: absolute;
    top: -20px;
    left: -20px;
    right: -40px;
    bottom: -40px;
    width: auto;
    height: auto;
    background-image: url("pay.jpg");
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
    top: calc(20% - 75px);
    left: calc(25% - 50px);
    height: 100px;
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
    color: #000000;
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
            <div><span><h3>Payment</h3></span><br><br>
            </div>
        </div>
        <br>
        
        <div class="reg">
        <form action="hotel_php_pay_page.php" method="post"><!-- so that in another page data will be inserted to db-->
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
                    $id=$row['id'];
                }
            }
        }
            

            echo "<h2><font color='Black'>".$id."</font></h2>"?><br><br>
            <input type="text" placeholder="Name"name="name"><br><br>
            <input type="text" placeholder="email" name="email"><br><br>
            <input type="text" placeholder="Mobile Number"name="mobile"><br><br>
            Check In  Date
            <input type="date" id="order_contractStart" name="order_contractStart"><br><br>
            Check Out Date
            <input type="date" id="order_contractEnd" name="order_contractEnd"><br><br>


            <h3>Payment Mode</h3><select name="t1">
              <option value="">Select</option>
              <option value="Paytm">Paytm</option>
              <option value="Net-Banking">Net Banking</option>
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
            $check = "SELECT * from hotel where id='$a'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    
                    echo "<br><table border='1' cellpadding='5'>";
                    echo "<tr>";
                        echo "<th>Id</th>";
                        echo "<th>Location</th>";
                        echo "<th>Name</th>";
                        echo "<th>Guest</th>";
                        echo "<th>Charges</th>";
                        
                    echo "</tr>";
                    echo "<tr>";
                        $_SESSION['h_select'] = $row['id'];
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['location'] . "</td>";
                        echo "<td>" . $row['detail'] . "</td>";
                        echo "<td>" . $row['guest'] . "</td>";
                        echo "<td>" . $row['Charges'] . "</td>";
                        
                    echo "</tr></table>";
        }
    }
}
        ?>
        <input type="Submit" value="Proceed">
        </form>
    </div>
</body>
</html>
