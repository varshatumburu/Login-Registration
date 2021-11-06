<?php
//Connect to MySQL server 
require 'config.php';
session_start();

//If there is no session user, then redirect to login page 
if (!isset($_SESSION['sess_user'])) {
	header("location: index.php");
}

//Find various fields for an employee and save them in variables for display purposes 
$empid = $_SESSION['sess_user'];
$result = mysqli_query($conn, "SELECT * FROM emp WHERE empID='$empid'");
$row = mysqli_fetch_array($result);

$name = $row["empName"];
$dept = $row["department"];
$sal = $row["salary"];
$phno = $row["mobileNo"];
$email = $row["email"];
$doj = $row["DoJ"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
</head>

<body>
	<h2> <?php echo "Welcome " . $name; ?> </h2>
	<h3>Profile Details</h3>
	<table>
		<tr>
			<td>Name: </td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td>Department: </td>
			<td><?php echo $dept; ?></td>
		</tr>
		<tr>
			<td>Salary: </td>
			<td><?php echo $sal; ?></td>
		</tr>
		<tr>
			<td>Date of Joining: </td>
			<td><?php echo $doj; ?></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Mobile Number: </td>
			<td><?php echo $phno; ?></td>
		</tr>
	</table>
	<br />
	<a href="update.php"> Update email/mobile </a><br />
	<a href="index.php"> Log out </a>
</body>

</html>
