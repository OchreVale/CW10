<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Album to DB</title>
</head>

<body>
	<div>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_db = "practice";
$db_port = 8889;


$conn = @new mysqli($servername,
 $username,
 $password,
 $db_db,
$db_port);

// Step -1 : Create DB connection
// Step-2 : check if the DB connection is established or not
if ($conn->connect_error){
	die("Couldn't talk to the database. <br/>". $conn->connect_error.",br/>");
}

// Get the data from the "addAlbum" page and assign it to the below variables

$artist_name= $_POST["artist"];
$name_= $_POST["name"];
$genre=$_POST["genre"];

$rdate=$_POST["rdate"];
if (! is_null($artist_name) and ! is_null($name_) and ! is_null($genre) and ! is_null($rdate)){


// write the sql query in php file to Insert the data into the table

$sql = "INSERT INTO albums ( artist, name, genre, rdate)
VALUES ('$artist_name', '$name_', '$genre', '$rdate')";
//$conn->query($sql);
if ($conn->query($sql) === TRUE) {
 echo "New Album successfully saved";
}
else {
  echo mysqli_error($conn);
}
}

$conn->close();
?>
	<!-- Redirect the user to show the data -->
	<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>