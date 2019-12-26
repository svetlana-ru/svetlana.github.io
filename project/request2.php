<?php 
	$type= filter_var(trim($_POST['type']), FILTER_SANITIZE_STRING);
	$name= filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$max_adult= filter_var(trim($_POST['max_adult']), FILTER_SANITIZE_STRING);
	$max_children= filter_var(trim($_POST['max_children']), FILTER_SANITIZE_STRING);
	$suite= filter_var(trim($_POST['suite']), FILTER_SANITIZE_STRING);
	if ($type=='Стандарт' || $type=='Полулюкс' || $type=='Люкс') {
		if($type=='Люкс') {
			if($max_adult<1 || $max_adult>5 || $max_children>6 || $max_children<0 || $suite>7 || $suite<1) {
				echo "Ошибка. Количество взрослых должно быть от 1 до 4, количество комнат в номере не должно превышать 6, количество детей не должно превышать 5";
				exit();
			}else {
				$mysql = new mysqli ('localhost', 'root', '12345', 'project');
				$mysql->query("INSERT INTO `info` (`type`, `max_adult`, `max_children`, `suite`, `id`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$name')");
				$mysql->close();
				include_once 'change_delete.php';
			}
		}
		if($type=='Полулюкс') {
			if($max_adult<1 || $max_adult>3 || $max_children>6 || $max_children<0 || $suite>4 || $suite<1) {
				echo "Ошибка. Количество взрослых должно быть от 1 до 2, количество комнат в номере не должно превышать 3, количество детей не должно превышать 5";
				exit();
			}else {
				$mysql = new mysqli ('localhost', 'root', '12345', 'project');
				$mysql->query("INSERT INTO `info` (`type`, `max_adult`, `max_children`, `suite`, `id`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$name')");
				$mysql->close();
				include_once 'change_delete.php';
			}
		}
		if($type=='Стандарт') {
			if($max_adult<1 || $max_adult>3 || $max_children>3 || $max_children<0 || $suite>3 || $suite<1) {
				echo "Ошибка. Количество взрослых должно быть от 1 до 2, количество комнат в номере не должно превышать 2, количество детей не должно превышать 2";
				exit();
			}else {
				$mysql = new mysqli ('localhost', 'root', '12345', 'project');
				$mysql->query("INSERT INTO `info` (`type`, `max_adult`, `max_children`, `suite`, `id`) VALUES ('$type', '$max_adult', '$max_children', '$suite', '$name')");
				$mysql->close();
				include_once 'change_delete.php';
			}
		}
		}else {
		echo "Ошибка. Выберите класс номера: Люкс, Полулюкс, Стандарт";
		exit();
	}
	 header('Location: ' . $_SERVER['HTTP_REFERER']); 
?>
