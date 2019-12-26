<?php
	$type= filter_var(trim($_POST['type']), FILTER_SANITIZE_STRING);
	$qt= filter_var(trim($_POST['qt']), FILTER_SANITIZE_STRING);
	if ($type=='Стандарт') {
		$mysql = new mysqli ('localhost', 'root', '12345', 'project');
		$mysql->query("DELETE FROM `reserv` WHERE `type`='$type'");
		$mysql->close();
		$max_adult= '2';
		$max_children= '2';
		$suite='2';
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$mysql->query("INSERT INTO `reserv` (`type`,`max_adult`,`max_children`,`suite`, `qt`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$qt')");	
		$mysql->close();
	}else {
		if ($type=='Люкс') {
			$mysql = new mysqli ('localhost', 'root', '12345', 'project');
			$mysql->query("DELETE FROM `reserv` WHERE `type`='$type'");
			$mysql->close();
			$max_adult= '4';
			$max_children= '5';
			$suite='6';
			$mysql= new mysqli('localhost', 'root', '12345', 'project');
			$mysql->query("INSERT INTO `reserv` (`type`,`max_adult`,`max_children`,`suite`, `qt`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$qt')");	
			$mysql->close();
		}else {
		if ($type=='Полулюкс') {
			$mysql = new mysqli ('localhost', 'root', '12345', 'project');
			$mysql->query("DELETE FROM `reserv` WHERE `type`='$type'");
			$mysql->close();
			$max_adult= '2';
			$max_children= '5';
			$suite='3';
			$mysql= new mysqli('localhost', 'root', '12345', 'project');
			$mysql->query("INSERT INTO `reserv` (`type`,`max_adult`,`max_children`,`suite`, `qt`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$qt')");	
			$mysql->close();
		}else echo "Ошибка. Введите правильный класс номера: Стандарт, Полулюкс, Люкс.";
	}
	}
	header('Location: admin.php');
?>
