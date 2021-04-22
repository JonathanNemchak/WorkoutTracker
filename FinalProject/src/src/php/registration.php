<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users2 WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users2(username,password,email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
				header("location: login.php");
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" href="../style/Workouts.css"/>
</head>
	
<body class="back-image">
	<h1>Register</h1>
	<form method="post" action="" name="signup-form">
		<div class="form-element">
			<span>Email</span>
			<input type="email" name="email" required />
		</div>
		<div class="form-element">
			<span>Username</span>
			<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
		</div>
		<div class="form-element">
			<span>Password</span>
			<input type="password" name="password" required />
		</div>
		<div class="form-element">
			<span>Age</span>
			<input type="age" name="age" required />
		</div>
		<div class="form-element">
			<span>Gender</span>
			<input type="gender" name="gender" required />
		</div>
		<button type="submit" name="register" value="register" class="functionbuttons">Register</button>
	</form>
	
</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>