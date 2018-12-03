<html>
<head><title>Login</title><link rel="shortcut icon" href="https://logopond.com/logos/211d9c927ce358e20581c624b74aaae1.png"></head>
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
            $email=$_POST['email'];
            $password=$_POST['password'];
          if(empty($email)||empty($password))
          {
              echo "Oops! can't leave any field blank";
          }
          else if(!empty($_POST['email']))
          {
              $query = mysqli_query($conn, "SELECT * FROM signup where email = '$_POST[email]' and password = '$_POST[password]'") or die("Invalid Username or Password");
              $query1 = mysqli_query($conn, "SELECT * FROM signup where email = '$_POST[email]' and password = '$_POST[password]'");
              $row = mysqli_fetch_array($query) or die(mysqli_connect_errno());
              $row1 = mysqli_fetch_array($query1);
              if(!empty($row['email']) AND !empty($row['password']) AND $row>0) 
                { 
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['i'] = $row['id'];
                  $_SESSION['img'] = $row['img'];
                  
                      echo "Welcome : ";
                      echo $row1[0];
                      echo "<script> window.location.assign('http://localhost/Dreamtravels/Home.php'); </script>";
                } 
              else 
              {
                echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
              } 
            }
          }
    ?>
</body>
</html>