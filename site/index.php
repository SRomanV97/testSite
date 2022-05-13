<!DOCTYPE html>
<html lang='ru'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<title>PHP web site</title>
	</head>
	<body>
	<?php require "blocks/header.php" ?>
		<div class = "container mt-5">
		<h1 class="mb-5 myclass">Немного котиков</h1>
			
			<div class="d-flex flex-wrap">
			
				<div class="col">
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h3 class="my-0 fw-normal">Котик</h4>
			  </div>
			  <div class="card-body">
				<img src="img/1.jpg" class = "img-thumbnail">
				<ul class="list-unstyled mt-3 mb-4">
				  <li>Серьезный котик</li>
				</ul>
				<button type="button" class="w-100 btn btn-lg btn-outline-primary" href="/site">Подробнее</button>
			  </div>
			</div>
		  </div>
				<div class="col">
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h3 class="my-0 fw-normal">Котик</h3>
			  </div>
			  <div class="card-body">
				<img src="img/2.jpg" class = "img-thumbnail">
				<ul class="list-unstyled mt-3 mb-4">
				  <li>Игривый котик</li>
				</ul>
				<button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
			  </div>
			</div>
		  </div>
				<div class="col">
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h3 class="my-0 fw-normal">Котик</h3>
			  </div>
			  <div class="card-body">
				<img src="img/3.jpg" class = "img-thumbnail">
				<ul class="list-unstyled mt-3 mb-4">
				  <li>Расслабленный котик</li>
				</ul>
				<button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
			  </div>
			</div>
		  </div>
				
			</div>
      </div>
		<?php require "blocks/footer.php" ?>
	</body>
</html>