<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
<title>Assignment Demo</title>
	<style>
	table {
   border: 1px solid black;
	border-collapse: collapse;
}

th, td {
	border: 1px solid black;
    text-align: center;
    padding: 8px;
}
tr:nth-child(even){background-color: #a0a0a0}
tr:nth-child(odd){background-color: #ffffff}
tr:nth-child(1){font-weight: bold;}
	</style>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_db = "practice";
$db_port = 8889;

// Step -1 : Create DB connection
// Step-2 : check if the DB connection is established or not
$conn = new mysqli($servername, $username, $password, $db_db, $db_port);

if($conn->connect_error){
	die("Couldn't communicate with the database. <br/>");
}
$sql = "SELECT artist, name, genre, rdate FROM albums";
$result = $conn->query($sql);


echo "<h3>Albums</h3>";
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Artist</th><th>Name</th><th>Genre</th><th>Release Date</th></tr>";

	//  Run a loop and display the records on screen dynamically
	// lets say the above query returned 20 rows
	// Now display the table on screen with 20 records
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>";
		echo $row["artist"];
		echo "</td>";
		echo "<td>";
		echo $row["name"];
		echo "</td>";
		echo "<td>";
		echo $row["genre"];
		echo "</td>";
		echo "<td>";
		echo $row["rdate"];
		echo "</td>";
		echo "</tr>";
	}
	 echo "</table>";
} else {
     echo "0 results";
}

$sql = "SELECT name FROM artists";
$result = $conn->query($sql);
echo "<h3>Artists</h3>";
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Artist</th></tr>";
	// Now Run a loop and display the data received that we have retrived from DB.
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>";
		echo $row["name"];
		echo "</td>";
		echo "</tr>";
	}
	 echo "</table>";
} else {
     echo "0 results";
}


$conn->close();
?>  

	<div>
		<!-- Redirect the below link where a page will be displayed to add an artist -->
		<a href="addArtist.php"><input type="button" id="btn1" value="Add new Artist"></a>
		<!-- Redirect the below link where a page will be displayed to add a new alubum -->
		<a href="addAlbum.php"><input type="button" id="btn1" value="Add new Album"></a>
		<!-- Redirect the below links to login page again as the user clicked logout -->
		<a href="login.php"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	</div>
</body>

</html>
