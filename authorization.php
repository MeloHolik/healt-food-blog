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
	<form method="post" action="login_handler.php">
	 <label for="username">Имя пользователя:</label> 
	 <input type="text" name="username" id="username" required> <br> 
	 <label for="password">Пароль:</label> <input type="password" 4name="password" id="password" required> <br> 
	 <button type="submit">Войти</button>
	 <a href="register.php">Регистрация</a> 
	</form> 
</main>

<?php 
session_start();
if 
	(isset($_POST['login'])) { 
$username = $_POST['username']; 
$password = $_POST['password']; 
$sql = "SELECT * FROM `users` WHERE username='$username'"; 
$result = mysqli_query($connect, $sql); 
	if (mysqli_num_rows($result) == 1) { 
		$row = mysqli_fetch_assoc($result);
	if (password_verify($password, $row['password'])) { 
		$_SESSION['user_id'] = $row['user_id']; 
		$_SESSION['username'] = $row['username'];
		$_SESSION['role'] = $row['role'];
		header('location: index.php');
	exit();
				    } 
	else 
		{ echo "Неправильный пароль!"; } 
} 
	else { echo "Неправильное имя пользователя!"; } 
}
mysqli_close($connect); 
?>
<footer> 
	<p> Подвал</p> 
</footer> 
</body> 

</html>