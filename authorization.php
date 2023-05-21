<?php 
require_once 'connect.php';
?>

<!DOCTYPE html> 
<html lang="ru">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<head> 
	<title>Вход</title> 
</head> 
<body> 
	<header> 
		<h1>Авторизация</h1> 
	</header> 
<nav> 
    <ul> 
        <li>
            <a href="index.html">Главная</a>
        </li> <li><a href="calculate.php">Калькулятор КБЖУ</a></li> 
        <li><a href="new_recipes.php">Добавить блюдо</a></li> 
        <li><a href="update.php">Редактировать блюдо</a></li> 
        <li><a href="authorization.php">Вход</a></li>
    </ul> 
</nav> 
<main> 
	<form method="post" action="auth_check.php">
	 <label>Имя пользователя:</label>
        <input type="text" name="username" required><br><br>
        <label>Пароль:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Войти</button>
	 <a href="register.php">Регистрация</a> 
	</form> 
</main>
<footer> 
	<p> Подвал</p> 
</footer> 
</body> 

</html>