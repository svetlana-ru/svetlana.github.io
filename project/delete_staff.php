<?php
		$id= filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `info` WHERE `id`='$id'");
		$user=$result->fetch_assoc();		
		$type=$user['type'];
		$mysql->close();
	if ($type=='Стандарт') {
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `reserv` WHERE `type`='$type'");
		$user=$result->fetch_assoc();
		$user1=$user['qt']+1;
		$mysql->close();
	$mysql = new mysqli ('localhost', 'root', '12345', 'project');
	$mysql->query("DELETE FROM `reserv` WHERE `type`='$type'");
	$mysql->close();
		$max_adult= '2';
		$max_children= '2';
		$suite='2';
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$mysql->query("INSERT INTO `reserv` (`type`,`max_adult`,`max_children`,`suite`, `qt`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$user1')");	
		$mysql->close();
	}
	if ($type=='Люкс') {
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `reserv` WHERE `type`='$type'");
		$user=$result->fetch_assoc();
		$user1=$user['qt']+1;
		$mysql->close();
	$mysql = new mysqli ('localhost', 'root', '12345', 'project');
	$mysql->query("DELETE FROM `reserv` WHERE `type`='$type'");
	$mysql->close();
		$max_adult= '4';
		$max_children= '5';
		$suite='6';
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$mysql->query("INSERT INTO `reserv` (`type`,`max_adult`,`max_children`,`suite`, `qt`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$user1')");	
		$mysql->close();
	}
	if ($type=='Полулюкс') {
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `reserv` WHERE `type`='$type'");
		$user=$result->fetch_assoc();
		$user1=$user['qt']+1;
		$mysql->close();
	$mysql = new mysqli ('localhost', 'root', '12345', 'project');
	$mysql->query("DELETE FROM `reserv` WHERE `type`='$type'");
	$mysql->close();
		$max_adult= '2';
		$max_children= '5';
		$suite='3';
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$mysql->query("INSERT INTO `reserv` (`type`,`max_adult`,`max_children`,`suite`, `qt`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$user1')");	
		$mysql->close();
	}
	
	$name= filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$mysql = new mysqli ('localhost', 'root', '12345', 'project');
	$mysql->query("DELETE FROM `info` WHERE `id`='$name'");
	$mysql->close();
	header('Location: ' . $_SERVER['HTTP_REFERER']); 
	
?>
