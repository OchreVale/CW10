<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Artist to DB</title>
</head>

<body>
	<div>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "practice";
$port = 8889;

// Step -1 : Create DB connection
// Step-2 : check if the DB connection is established or not
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Read the data that the user enetred in the input text field artist1 and assign ot to varibale below.
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$name = $_POST["artist1"];


// Now understand the table structure and write a sql query to insert the artist name into the table
$sql = "INSERT INTO artists (name) VALUES('$name')";

if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
	<!-- Redirect the below link. Once the user clicks the on ok show the user all the artist and albums  -->
	<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>
