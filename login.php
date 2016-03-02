<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="mynews";

$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);

$username = mysqli_real_escape_string($link, $_POST["username"]);
$password = md5($_POST["password"]);
$sql="SELECT * FROM `signup` WHERE `username` LIKE '$username' AND `password` LIKE '$password'" ;
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
	
if ($count === 1) {
    echo "login successful "; 
	echo "  jeet gye";
} else {
    echo "Unsuccessful!";
}	
?>
<html>
<div>
			<a href="mainpage.html">
				Home
			</a>
</html>