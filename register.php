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
<body style="background-color: #f2f2f2; font-family: Arial, sans-serif; padding: 20px;">
  <header>
    <h1>Регистрация</h1>
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
<form action="register.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
  <p style="margin: 10px 0;">
    <label for="username" style="font-size: 20px; font-weight: bold;">Имя пользователя:</label> 
    <input type="text" id="username" name="username" style="padding: 10px; border: none; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
  </p>
  <p style="margin: 10px 0;">
    <label for="password" style="font-size: 20px; font-weight: bold;">Пароль:</label> 
    <input type="password" id="password" name="password" style="padding: 10px; border: none; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
  </p>
  <p style="margin: 10px 0;">
    <button type="submit" name="register" style="background-color: #c3272c; color: #fff; font-size: 24px; font-weight: bold; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; transition: all 0.3s ease;">Зарегистрироваться</button>
  </p>
</form>
 <?php 
 if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Регистрация прошла успешно!";
    } else {
        echo "Произошла ошибка, попробуйте еще раз.";
    }
}

mysqli_close($connect);
?> 
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