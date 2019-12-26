<?php
	$username= filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
	$password= filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	$email= filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = md5($password."ygfrtss562sd");
	$mysql= new mysqli('localhost', 'root', '12345', 'project');
	$mysql->query("INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')");	
	$mysql->close();
	header('Location: ' . $_SERVER['HTTP_REFERER']); 
?>