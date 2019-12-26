<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Форма admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/btn.css">



</head>

<body>
	<div class="container mt-4">	
	<div class="col">
		
	<h3>Изменить данные в таблице reserv</h3>
		<form action="admin_change.php" method="post">
			<input type="text" class="form-control" name="type" id="type" placeholder="Введите класс номера"><br>
			<input type="text" class="form-control" name="qt" id="qt" placeholder="Введите количество доступных номеров"><br>
			<button class="btn btn-success" type="submit">Изменить</button>
		</form>
	<h3>Зарегистрировать нового пользователя</h3>
		<form action="check.php" method="post">
			<input type="text" class="form-control" name="username" id="username" placeholder="Введите логин"><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
			<input type="text" class="form-control" name="email" id="email" placeholder="Введите email"><br>
			<button class="btn btn-success" type="submit">Зарегистрировать</button>
		</form>
		
		<table class="table">

<thead class="thead-inverse"  align="center">
    <tr>
      <th>id пользователя</th>
	  <th>Login пользователя</th>
      <th>Email пользователя</th>
      <th>Пароль пользователя</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `users`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['id'].'<br>';
   }
echo '</center>';
   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `users`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['username'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `users`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['email'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `users`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['password'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>
  
    </tr>
  </tbody>
</table>
		
		<h3>Удалить пользователя из таблицы users</h3>
		<form action="admin_delete.php" method="post">
			<input type="text" class="form-control" name="id" id="id" placeholder="Введите id пользователя"><br>
			<button class="btn btn-success" type="submit">Удалить</button>
		</form>
	<?php
			include_once 'staff.php';
			?>
	<div class="string">
	
	<a href="/index.html class="string">Перейти на сайт гостиницы</a>
	</div>
	</div >
	</div>
</body>

</html>