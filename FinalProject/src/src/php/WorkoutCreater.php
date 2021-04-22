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
		$sql = "INSERT INTO workouts2 (Date,workout1, workout2, workout3,workout4,workout5,workout6) VALUES
            (:Date,:workout1,:workout2,:workout3,:workout4,:workout5,:workout6)";  
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':Date', $_POST['Date']);
		$stmt->bindParam(':workout1', $_POST['workout1']);
		$stmt->bindParam(':workout2', $_POST['workout2']);
		$stmt->bindParam(':workout3', $_POST['workout3']);
		$stmt->bindParam(':workout4', $_POST['workout4']);
		$stmt->bindParam(':workout5', $_POST['workout5']);
		$stmt->bindParam(':workout6', $_POST['workout6']);
    	$stmt->execute();
	} catch(PDOException $e) {
		die("ERROR");
	}
	}
?>
<html>
	<head>
        <title>Workout Creator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/Workouts.css"/>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

<body class="back-image">
	<br><br>
	<h2 style="text-align: center">Input a Workout</h2>
	<form method="post" action="">
		<span>Date(MMDDYYYY)  </span><input type="number" id="Date" name="Date"><br><br><br>
  		<span>Workout 1  </span><input type="text" id="workout1" name="workout1"><br><br><br>
  		<span>Workout 2  </span><input type="text" id="workout2" name="workout2"><br><br><br>
		<span>Workout 3  </span><input type="text" id="workout3" name="workout3"><br><br><br>
		<span>Workout 4  </span><input type="text" id="workout4" name="workout4"><br><br><br>
		<span>Workout 5  </span><input type="text" id="workout5" name="workout5"><br><br><br>
		<span>Workout 6  </span><input type="text" id="workout6" name="workout6"><br><br><br>
  		<button type="submit" name="Save" value="Save" class="functionbuttons">Save</button>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>