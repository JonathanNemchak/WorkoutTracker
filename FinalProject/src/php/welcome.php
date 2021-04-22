<?php
// Initialize the session and include header
session_start();
include_once "header.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
			<link rel="stylesheet" href="../style/Workouts.css">
	</head>
	<body class="back-image">

			<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["user_id"]); ?></b>. Welcome to our site.</h1><br><br>
			<a href="login.php"><button class="functionbuttons">Sign Out of Your Account</button></a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
</html>