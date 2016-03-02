<?php
$servername = "localhost";
$user = "root";
$mysqlPassword = "";
$dbname="mynews";

$link=mysqli_connect($servername,$user,$mysqlPassword,$dbname);

$username = mysqli_real_escape_string($link, $_POST["username"]);
$password = md5($_POST["password"]);
$sq= $_POST["sq"];
$sa = $_POST["sa"];

if(mysqli_query($link,"INSERT INTO signup(username, password, securityquestion, securityanswer) VALUES ('$username', '$password','$sq', '$sa')")){
	echo "New records created successfully";
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<html>
<div>
			<a href="mainpage.html">
				Home
			</a>
</html>