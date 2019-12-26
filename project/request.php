<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Бронирование номера в отеле</title>
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
		<th>Максимальное количество взрослых</th>
      <th>Максимальное количество детей</th>
      <th>Максимальное количество комнат в номере</th>
      <th>Количество номеров</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `reserv`");
	
	while ($row = $result->fetch_assoc())
	{
       echo $row['type'].'<br>';
   }

   $mysql->close();
?></td>
      <td><?php
		$mysql= new mysqli('localhost', 'root', '12345', 'project');
		$result= $mysql->query("SELECT * FROM `reserv`");
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
		$result= $mysql->query("SELECT * FROM `reserv`");
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
		$result= $mysql->query("SELECT * FROM `reserv`");
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
		$result= $mysql->query("SELECT * FROM `reserv`");
	echo '<center>';
	while ($row = $result->fetch_assoc())
	{
       echo $row['qt'].'<br>';
   }
   	echo '</center>';
   $mysql->close();
?></td>

	  
    </tr>
  </tbody>
</table>


	</div>
	<br><br>
	<div class="col">
	<h1>Забронировать номер</h1>
		<form action="request2.php" method="post">
			<input type="text" class="form-control" name="type" id="type" placeholder="Введите класс номера"><br>
			<input type="number" class="form-control" name="max_adult" id="max_adult" placeholder="Введите количество взрослых"><br>
			<input type="number" class="form-control" name="max_children" id="max_children" placeholder="Введите количество детей"><br>
			<input type="number" class="form-control" name="suite" id="suite" placeholder="Введите количество комнат"><br>
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
			<button class="btn btn-success" type="submit">Отправить запрос</button>
		</form>
		<br><a href="/index.html">Перейти на сайт с информацией</a><br>
		<a href="/index.php">Сменить пользователя</a>
	</div>
	</div>
</body> 
</html>
