<?php 

include 'Database/ticket.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$date1 = ($_POST['date1']);
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);
	

	if ($password == $cpassword) {
		$sql = "SELECT * FROM login_user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO login_user (username, email, image, date1, password)
					VALUES ('$username', '$email' ,'$image', '$date1' ,'$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$image = "";
				$date1 = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="CSS/loginStyle.css">

	<title>KPI Cinemas - Register</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register User</p>
			<div class="input-group">&nbsp;&nbsp;
				<label>Username:</label><br>
				<input type="text"  name="username" value="<?php echo $username; ?>" required>
			</div><br>

			<div class="input-group">&nbsp;&nbsp;
				<label>Email:</label><br>
				<input type="email"  name="email" value="<?php echo $email; ?>" required>
			</div><br>

			<div class="input-group">&nbsp;&nbsp;
				<label>Profile Picture:</label><br>
				<input type="file"  name="image" value="<?php echo $_POST['image']; ?>"  required>
			</div><br>

			<div class="input-group">&nbsp;&nbsp;
				<label>Date of Birth:</label><br>
				<input type="date"  name="date1" id = "date1"  required>
				<small> &nbsp;&nbsp; * once you register you can't change your date of <br>&nbsp;&nbsp;&nbsp;&nbsp; birth</small>
		    </div><br><br><br>

			<div class="input-group">&nbsp;&nbsp;
				<label>Password:</label><br>
				<input type="password"  name="password" value="<?php echo $_POST['password']; ?>" required>
            </div><br>

            <div class="input-group">&nbsp;&nbsp;
            	<label>Confirm Password:</label><br>
				<input type="password"  name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div><br>
			 
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>

			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
	
		</form>
	</div>
</body>
</html>
