<html>
<head><title>Signup</title><link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png"></head>
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

            $Name=$_POST["name"];
            $id=$_POST['id'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $repassword=$_POST['repassword'];
            $check = "SELECT * from signup where id='$_POST[id]'";
            $lala = mysqli_query($conn, $check);
            $data = mysqli_fetch_array($lala, MYSQLI_NUM);
        if(empty($Name)||empty($email)||empty($id)||empty($password)||empty($repassword))
        {
            echo "Oops! can't leave any field blank";
        }
        else if($password!=$repassword)
        {
            echo("Oops! password do not match");
        }
        else if($data[0] > 0)
        {
            echo "ALREADY REGISTERED";
        }
        else
        {
            echo "<p style='text-align:center;font-size:50px;'>"."Successfully Registered"."</p>";
            echo "<a href = 'http://localhost/Dreamtravels/L&RPage.html'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";

            $sql="insert into signup(name,id,email,password)"."values('$Name','$id','$email','$password')";
            $repasswordes=mysqli_query($conn,$sql);
        }
    }
    ?>
</body>
</html>