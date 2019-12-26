<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Форма регистрации и авторизации</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/btn.css">

</head>

<body>
	<div class="container mt-4">	
	<div class="col">
	<h1>Форма регистрации</h1>
		<form action="check.php" method="post">
			<input type="text" class="form-control" name="username" id="username" placeholder="Введите логин"><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
			<input type="text" class="form-control" name="email" id="email" placeholder="Введите email"><br>
			<button class="btn btn-success" type="submit">Зарегистрироваться</button>
		</form>
	</div>
	<br><br>
	<div class="col">
	<h1>Форма авторизации</h1>
		<form action="auth.php" method="post">
			<input type="text" class="form-control" name="username" id="username" placeholder="Введите логин"><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
			<button class="btn btn-success" type="submit">Авторизоваться</button>
		</form>
	</div>
	</div>
</body>

</html>