<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
				header("location: index.php");
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="../style/Workouts.css"/>	
</head>
<body class="back-image">
	<h1>Log In!</h1>
	<form method="post" action="" name="signin-form">
  		<div class="form-element">
    		<span>Username</span>
    		<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  		</div>
  		<div class="form-element">
    		<span>Password</span>
    		<input type="password" name="password" required />
  		</div>
  		<button type="submit" name="login" value="login" class="functionbuttons">Log In</button>
		
	</form>
	<h2>New to the website?</h2>
	<a href="registration.php"><button class="functionbuttons">Register</button></a>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>