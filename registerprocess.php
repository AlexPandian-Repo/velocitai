<?php
session_start();
require_once 'config/connect.php';
if (isset($_POST) & !empty($_POST) & isset($_POST['email']) & !empty($_POST['email']) & isset($_POST['password']) & !empty($_POST['password'])) {

	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password = md5($_POST['password']);
	$sqll = "SELECT * FROM users WHERE email='$email'";
	$res = mysqli_query($connection, $sqll);
	$r = mysqli_fetch_assoc($res);
	if ($r < 1) {
		$token = bin2hex(random_bytes(15));
		echo $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		if ($result) {
			
			$_SESSION['customer'] = $email;
			$_SESSION['customerid'] = mysqli_insert_id($connection);
			

			header("location: login.php?message=12");
		} else {
			
			header("location: login.php?message=2");
		}
	} else {
		
		header("location: login.php?message=10");
	}
} else {
	header("location: login.php?message=11");
}
