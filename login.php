<?php 
/* User Login */
include 'Database/ticket.php';
session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: bookTicket.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM login_user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: bookTicket.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

/* Admin Login */
include 'Database/ticket.php';
session_start();
error_reporting(0);

if (isset($_SESSION['user_name'])) {
    header("Location: ManageUser.php");
}

if (isset($_POST['login'])) {
	$mail = $_POST['mail'];
	$pass_word = ($_POST['pass_word']);

	$sql = "SELECT * FROM login_admin WHERE mail='$mail' AND pass_word='$pass_word'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_name'] = $row['user_name'];
		header("Location: ManageUser.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="CSS/loginStyle.css">

	<title>KPI Cinemas - Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login User</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Admin</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="mail" value="<?php echo $mail; $_POST['mail'];?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pass_word" value="<?php echo $_POST['pass_word']; ?>" required>
			</div>
			<div class="input-group">
				<button name="login" class="btn">Login</button>
			</div>
		</form>
	</div>
</body>
</html>