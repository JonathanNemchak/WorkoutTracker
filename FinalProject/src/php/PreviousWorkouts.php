<?php
session_start();
include_once 'header.php';

?>
<html>
	<head>
        <title>Workout Creator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/Workouts.css"/>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

<body class="back-image">
	<h2 style="text-align: center">Showing previous workouts</h2>
	<table>
	<?php
echo "<table>";
 echo "<tr><th>Date</th><th>Workout 1</th><th>Workout 2</th><th>Workout 3</th><th>Workout 4</th><th>Workout 5</th><th>Workout 6</th></tr>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";
		
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed");
}
	$name = $_SESSION["user_id"];
	$sql = "SELECT * FROM indworkouts WHERE username LIKE '%$name%'";
		
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc() ) {
			echo "<tr>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Date"];
			echo "</th>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Workout1"];
			echo "</th>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Workout2"];
			echo "</th>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Workout3"];
			echo "</th>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Workout4"];
			echo "</th>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Workout5"];
			echo "</th>";
			echo "<th style='width: 150px; border: 1px solid black;'>";
			echo $row["Workout6"];
			echo "</th>";
			echo "</tr>";
		}
	} else {
		echo "<h1>0 Results</h1>";
	}


?>
	</table>
	
	<h1>Want to Search for a Specific Day?</h1>
	<form action="Search2.php" method="post">
  		<input type="text" id="Date" name="Date">
  		<input type="submit" name= "Save" value="Save" class="functionbuttons">
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>