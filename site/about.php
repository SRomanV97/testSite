<!DOCTYPE html>
<html lang='ru'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<title>Контактная форма</title>
	</head>
	<body>
	<?php require "blocks/header.php" ?>
	<div class="container mt-5">	
	<form action="check.php" method="post">
		<input type="email" name="email" placeholder="Введите email" class="form-control"><br>
		<textarea name="message" class="form-control" placeholder="Введите ваше сообщениу"></textarea><br>
		<button type="submit" name="send" class="btn btn-success">Отправить</button>
	</form>	
		</div>	
	<?php require "blocks/footer.php" ?>	
		
	</body>
</html>