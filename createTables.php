<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>
You have successfully logged in
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db_db = "practice";
$db_port = 8889;

// The above used four variables servername,username,password and dbname 
// are according to my environment setting.

// Now your task would be to check 
// what your values would be accoring to your environment and change the values of above mentioned variables

// Note : This is the most crucial step for you DB connection. Please double check and change the values.

// Create connection

// create a variable conn and use it to establish the connection to the DB
$conn = new mysqli(
	$servername,
	$username,
	$password,
	$db_db,
	$db_port
);

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE albums (artist VARCHAR(20), name VARCHAR(50), genre VARCHAR(20), rdate INT(4))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
// Hnadle this condition
echo "Album table already exits. Click OK to continue.<br/>";
}

$sql = "CREATE TABLE artists (name VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
// Handle this condition
echo "Artists table already exists. Click OK to continue.<br/>";
echo mysqli_error($conn);
}

$conn->close();
?>  

	<div>
		<!-- Fill the below blanks with appropriate files.-->
		<!-- so that you application looks it is redirecting to the required pages   -->
		<a href="addAlbum.php"><input type="button" id="btn1"  value="OK"></a>
		<a href="login.php"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	</div>
</body>

</html>