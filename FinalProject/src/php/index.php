<?php
session_start();
include_once "header.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit;
}


?>

<html>
<head>
  	<title>Home</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="../style/indexstyle.css"/>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body class="back-image">
	<h1>Workout and Health Tracker</h1>
	<h2>This website will help you keep track of workouts, calories consumed for the day, as well as weight. Click one of the navigation bar items to get started!</h2><br><br>
	<?php
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";
	
$conn = new mysqli($servername, $username, $password, $dbname);
	
	$name = $_SESSION["user_id"];
	$sql = "SELECT * FROM users2 WHERE id LIKE '%$name%'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc() ) {
			echo "<h2>Account Details</h2>";
			echo "<h3>";
			echo "Username: ";
			echo $row["username"];
			echo "</h3>";
			echo "<h3>";
			echo "Age: ";
			echo $row["age"];
			echo "</h3>";
			echo "<h3>";
			echo "Gender: ";
			echo $row["gender"];
			echo "</h3>";


		}
	} else {
		echo "0";
	}
	?>
	<a href="login.php"><button class="functionbuttons">Sign Out of Your Account</button></a>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
    