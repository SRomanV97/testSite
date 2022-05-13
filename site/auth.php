<?php


if($_COOKIE['user'] == 'true'){
	setcookie('user', 'true', time() - 3600, '/site/');
}else{
	setcookie('user', 'true', time() + 3600, '/site/');
}

header('Location: /site/index.php');
?>