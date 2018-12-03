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
			$loc=$_POST[""]
			$sql = "SELECT image FROM iamges WHERE location=" . $_GET['loc'];
			$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
			$row = mysql_fetch_array($result);
			header("Content-type: " . $row["imageType"]);
			echo $row["image"];
			
			mysql_close($conn);
		}
?>