<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>health-food-blog</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       * {
            margin: 10px;
            padding: 10px;
        }
    </style>
</head> 
<body>
  <header>
    <h1>Регистрация</h1>
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
<form action="register.php" method="post"> <p> 
	<label for="username">Имя пользователя:</label> 
	<input type="text" id="username" name="username"> </p> 
<p> 
	<label for="password">Пароль:</label> 
	<input type="password" id="password" name="password"> </p> 
<p> 
	<button type="submit" name="register">Зарегистрироваться</button> </p> 
</form>
 <?php 
 if (isset($_POST['register'])) 
 	{ $username = $_POST['username']; 
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
 //проверка имени пользователя на уникальность 
 $sql = "SELECT * FROM `users` WHERE username='$username'";
  $result = mysqli_query($connect, $sql);
   if (mysqli_num_rows($result) > 0) 
   	{ echo "Имя пользователя уже занято!"; } 
   else { 
   	$sql = "INSERT INTO `users`(username, password) VALUES('$username', '$password')";
   	 if (mysqli_query($connect, $sql)) 
   	 	{ header('location: authorization.php'); } 
   	 else 
   	 	{ echo "Ошибка: " . mysqli_error($connect); 
   	} 
   } 
} 
mysqli_close($connect);
?> 
</body> 
</html>