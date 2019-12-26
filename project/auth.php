<?php
	$username= filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
	$password= filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	$password = md5($password."ygfrtss562sd");
	
	$mysql= new mysqli('localhost', 'root', '12345', 'project');
	$result= $mysql->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
	$user=$result->fetch_assoc();
	if(count($user)==0) {
		echo "Такой пользователь не найден :(";
		exit();
	}else {
		if ($password=="dbfdf4ad7119835b74e8f265d671dfd0") {
			header('Location: /admin.php');
			exit();
		}else {
			if ($password=='32eef33650df695ad17e1c3fd3f2da1e') {
				header('Location: /staff.php');
				exit();
			}else {
				header('Location: /index.html'); exit();
			}
		}
	}
	$mysql->close();
	
?>