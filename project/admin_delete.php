<?php
	$id= filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
	if($id>1) {
		$mysql = new mysqli ('localhost', 'root', '12345', 'project');
		$mysql->query("DELETE FROM `users` WHERE `id`='$id'");
		$mysql->close();
	}else {
		echo "Нельзя удалить администратора";
	}
	header('Location: /admin.php');
	
?>