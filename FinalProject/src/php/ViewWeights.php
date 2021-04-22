<?php
session_start();
include_once 'header.php';

?>

<html>
	<head>
        <title>Past Weights</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/Workouts.css"/>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

<body class="back-image">
	<br><br>
	<table>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";
	
$conn = new mysqli($servername, $username, $password, $dbname);
	
if ($conn->connect_error) {
	die("Connection failed");
}
	$name = $_SESSION["user_id"];
	$sql = "SELECT * FROM weight WHERE username LIKE '%$name%'";
		
	$result = $conn->query($sql);
	echo "<h2 style='text-align:center;'>Date and Weight</h2>";
	echo "<tr><th>Date</th><th>Weight</th></tr>";
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc() ) {
			echo "<tr>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Date"];
			echo "</th>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["weight"];
			echo "</th>";
			echo "</tr>";
		}
	} else {
		echo "<h1>0 Results</h1>";
	}

?>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
</html>