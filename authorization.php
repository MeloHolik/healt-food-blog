<?php 
require_once 'connect.php';
?>

<?php require_once 'components/header.php'; ?>

<main style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; font-family: Arial, sans-serif;">
	<form method="post" action="auth_check.php" style="display: flex; flex-direction: column; align-items: center; background-color: #f2f2f2; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
		<label style="font-size: 20px; font-weight: bold; margin-bottom: 50px; text-align: center;">Имя пользователя:</label>
		<input type="text" name="username" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: none; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
		<label style="font-size: 20px; font-weight: bold; margin-bottom: 5px; text-align: center;">Пароль:</label>
		<input type="password" name="password" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: none; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
		<button type="submit" style="background-color: #c3272c; color: #fff; font-size: 24px; font-weight: bold; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; transition: all 0.3s ease;">Войти</button>
		<a href="register.php" style="color: #c3272c; text-decoration: none; margin-top: 10px; font-size: 16px;">Регистрация</a> 
	</form> 
</main>

<?php require_once 'components/footer.php'; ?>