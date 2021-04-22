<?php
	session_start();
	include_once 'header.php';
	include('config.php');
	if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit;
	}

	if(isset($_POST['Save'])) {
	try{
    		$pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");
			// Set the PDO error mode to exception
    		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
    		die("ERROR: Could not connect. " . $e->getMessage());
	}
	try {
		$sql = "INSERT INTO weight (username,Date, weight) VALUES
            (:username,:Date,:weight)";  
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':username', $_SESSION["user_id"]);
		$stmt->bindParam(':Date', $_POST['Date']);
		$stmt->bindParam(':weight', $_POST['weight']);
    	$stmt->execute();
	} catch(PDOException $e) {
		die("ERROR");
	}
	}
?>
<html>
<head>
    <title>Weight Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/Workouts.css"/>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head> 
<body class="back-image">
	<h1>Input a weight for today in pounds</h1>
	<form action="" method="post">
		<input type="number" id="Date" name="Date" style="align-content: center">
		<input type="number" id="weight" name="weight" style="align-content: center">
		<input type="submit" name="Save" value="Save" class="functionbuttons">
	</form>
	<h2>View Weights</h2>
	<a href="ViewWeights.php"><button class="functionbuttons">View Past Weights</button></a>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>