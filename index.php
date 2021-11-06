<?php
require 'config.php';
if (isset($_POST['submit'])) {
	$empid = $_POST['emp'];
	$pwd = $_POST['pass'];
	
	// select query to check if profile exists 
	$query = "SELECT * FROM emp WHERE empID='$empid' and passwd='$pwd'";
	$result = mysqli_query($conn, $query);
	
	//If there exists a row with the given credentials, then redirect to respective profile page otherwise stay on same page by alert 
	if (mysqli_num_rows($result) != 0) {
		session_start();
		$_SESSION['sess_user'] = $empid;
		header("Location: profile.php");
	} else {
		echo "<script>alert('Invalid empid or password.')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->

<body>
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h1 style="text-align: center;">Sign In</h1>
				</div>
				<div class="panel-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="form-label" for="eid">Employee ID</label>
							<input type="text" class="form-control" name="emp" id="eid" placeholder="E123" required />
						</div>
						<div class="form-group">
							<label for="pwd" class="form-label">Password</label>
							<input type="password" class="form-control" id="pwd" name="pass" required />
						</div>
						<div class="row">
							<div style="align-items: center;padding-left: 3%;">
								<input type="submit" value="Login" name="submit" />
								No credentials yet? <a href="register.php">Register</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
