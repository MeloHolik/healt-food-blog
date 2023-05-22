<?php 
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles.css">
</head> 
<body style="background-color: #f2f2f2; font-family: Arial, sans-serif; padding: 20px;">
  <header>
    <h1>Авторизация</h1>
  </header>
 <nav style="background-color: #fff; padding: 20px;">
  <ul style="list-style: none; margin: 0; padding: 0; display: flex; justify-content: space-between; font-family: Arial, sans-serif;">
    <li><a href="index.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Главная</a></li>
    <li><a href="calculate.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Калькулятор КБЖУ</a></li>
    <li><a href="new_recipe.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Добавить блюдо</a></li>
    <li><a href="update.php" style="text-transform: uppercase; text-decoration: none; color: #333; font-size: 18px; font-weight: bold; transition: all 0.3s ease;">Редактировать блюдо</a></li>
    <li><a href="authorization.php" style="text-transform: uppercase; text-decoration: none; color: #fff; font-size: 18px; font-weight: bold; background-color: #c3272c; padding: 10px 20px; border-radius: 3px; transition: all 0.3s ease;">Вход</a></li>
  </ul>
</nav>
<main style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; font-family: Arial, sans-serif;">
	<form method="post" action="auth_check.php" style="display: flex; flex-direction: column; align-items: center; background-color: #f2f2f2; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
		<label style="font-size: 20px; font-weight: bold; margin-bottom: 5px; text-align: center;">Имя пользователя:</label>
		<input type="text" name="username" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: none; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
		<label style="font-size: 20px; font-weight: bold; margin-bottom: 5px; text-align: center;">Пароль:</label>
		<input type="password" name="password" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: none; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
		<button type="submit" style="background-color: #c3272c; color: #fff; font-size: 24px; font-weight: bold; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; transition: all 0.3s ease;">Войти</button>
		<a href="register.php" style="color: #c3272c; text-decoration: none; margin-top: 10px; font-size: 16px;">Регистрация</a> 
	</form> 
</main>
<footer style="background-color: #222; color: #fff; padding: 32px;">
  <div style="max-width: 1200px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
      <h4 style="font-size: 24px; margin: 0;">БЛОГ О ЗДОРОВОЙ ЕДЕ</h4>
      <ul style="list-style: none; margin: 0; padding: 0; display: flex;">
        <li style="margin-right: 16px;"><a href="#" style="color: #fff; text-decoration: none; font-size: 16px;">Главная</a></li>
        <li style="margin-right: 16px;"><a href="calculate.php" style="color: #fff; text-decoration: none; font-size: 16px;">Калькулятор КБЖУ</a></li>
        <li><a href="authorization.php" style="color: #fff; text-decoration: none; font-size: 16px;">Войти</a></li>
      </ul>
    </div>
    <p style="font-size: 16px; margin-top: 16px;">Весь материал на сайте является авторским, не является лекарственной рекомендацией и не заменяет консультацию специалиста.</p>
    <p style="font-size: 16px; margin-top: 8px;">© 2023 Блог о здоровой еде. Все права защищены.</p>
  </div>
</footer>
</body> 

</html>