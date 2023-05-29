<?php
require_once 'connect.php';
?>

<? require_once 'components/header.php'; ?>



<form action="register.php" method="post" style="display: flex; flex-direction: column; align-items: center; margin: 100px;">
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
<? require_once 'components/footer.php'; ?>