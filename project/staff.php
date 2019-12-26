<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Форма staff</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/btn.css">

</head>

<body>
	<div class="container mt-4">	
	<div class="col">
	
	<table class="table">

<thead class="thead-inverse"  align="center">
    <tr>
      <th>Класс номера</th>
		<th>Количество взрослых</th>
      <th>Количество детей</th>
      <th>Количество комнат в номере</th>
      <th>Имя владельца номера</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `info`");
	
	while ($row = $result->fetch_assoc())
	{
       echo $row['type'].'<br>';
   }

   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `info`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['max_adult'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `info`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['max_children'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `info`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['suite'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `info`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['id'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>

	  
    </tr>
  </tbody>
</table>
	
	
	
	
	
	<br><br>
	<h1>Отменить бронирование</h1>
		<form action="delete_staff.php" method="post">
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя гостя"><br>
			<button class="btn btn-success" type="submit">Удалить</button>
		</form>
	</div>
	<br><br>
	<?php 
		include_once 'request.php';
	?>
</body>

</html>