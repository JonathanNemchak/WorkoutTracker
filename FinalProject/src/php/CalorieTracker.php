<?php
session_start();
include_once 'header.php';

if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit;
}

if(isset($_POST['Save'])) {
	$number = $_POST['cal'];
}
?>
<html>
<head>
    <title>Calorie Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/Workouts.css"/>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head> 
<body class="back-image">
	<h1>Input how many calories you consumed</h1>
	<form action="" method="post">
		<input type="number" id="cal" name="cal" style="align-content: center">
		<input type="submit" name="Save" value="Save" class="functionbuttons">
	</form>
	<h2>Total for the day</h2>
	<?php
	$number = $_POST['cal'];
	echo "<h2>$number</h2>";
	?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
