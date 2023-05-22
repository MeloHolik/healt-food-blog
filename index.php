<?php
require_once 'connect.php';
$recept = mysqli_query($connect, "SELECT * FROM `list`");
$recept = mysqli_fetch_all($recept);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>health-food-blog</title>
    <link rel="stylesheet" href="styles.css">
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
<?php
  foreach($recept as $num) {
?>
<div style="border: 1px solid #ccc; padding: 16px; margin-bottom: 16px; font-family: Arial, sans-serif; color: #333;">
  <h1 style="font-size: 36px; font-weight: bold; margin-top: 0; margin-bottom: 16px;"><?= $num[1] ?></h1>
  <div style="display: flex; justify-content: space-between;">
    <div>
      <h2 style="font-size: 24px; font-weight: bold; margin-top: 0; margin-bottom: 16px;">КБЖУ на 100 г.</h2>
      <p style="font-size: 16px; line-height: 1.5; margin-bottom: 8px;">Белки:<?= $num[4] ?></p>
      <p style="font-size: 16px; line-height: 1.5; margin-bottom: 8px;">Жиры: <?= $num[5] ?></p>
      <p style="font-size: 16px; line-height: 1.5; margin-bottom: 8px;">Углеводы: <?=$num[6] ?></p>
      <p style="font-size: 16px; line-height: 1.5; margin-bottom: 0;">Калории: <?=$num[7] ?></p>
    </div>
    <div>
      <img src="<?php  
      if ($num[9]) {
        echo "img/$num[9]";
      } else { 
        echo ''; 
      } 
      ?>" style="max-width: 100%;">
    </div>
  </div>
  <h2 style="font-size: 24px; font-weight: bold; margin-top: 32px; margin-bottom: 16px;">Ингредиенты:</h2>
  <p style="font-size: 16px; line-height: 1.5; margin-bottom: 16px;"><?= $num[8]?></p>
  <img src="<?php  
    if ($num[10]) {
      echo "img/$num[10]";
    } else { 
      echo ''; 
    } 
  ?>" style="max-width: 100%; margin-bottom: 16px;">
  <h2 style="font-size: 24px; font-weight: bold; margin-top: 32px; margin-bottom: 16px;">Рецепт</h2>    
  <p style="font-size: 16px; line-height: 1.5; margin-bottom: 16px;"><?= $num[3]?></p>        
  <p style="text-align: right; margin-bottom: 0;">
    <a href="update.php?id=<?= $num[0] ?>" style="display: inline-block; text-decoration: none; background-color: #c3272c; color: #fff; padding: 8px 16px; border-radius: 4px; transition: all 0.3s ease;">Редактировать рецепт</a>
  </p>
</div>
<?php
  }
?>

<div style="border: 1px solid #ccc; padding: 16px; margin-top: 32px;">
  <h2 style="font-size: 28px; font-weight: bold;">Добавить свой рецепт</h2>
  <form action="new_recipes.php" method="post">
    <p style="margin-top: 16px; margin-bottom: 8px;">Название блюда</p>
    <input type="text" name="name" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

    <p style="margin-top: 24px;">КБЖУ на 100 г.</p>
    <ul style="list-style:none; margin-left: 0; padding-left: 0;">
      <li style="margin-top: 8px;">Белки
        <input type="number" name="protein" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
      <li style="margin-top: 8px;">Жиры
        <input type="number" name="fat" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
      <li style="margin-top: 8px;">Углеводы
        <input type="number" name="carbonyhydrates" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
      <li style="margin-top: 8px;">Калории
        <input type="number" name="calories" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px;">
      </li>
    </ul>

    <p style="margin-top: 24px;">Изображение блюда</p>
    <input type="file" name="img_main_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

    <p style="margin-top: 24px;">Ингредиенты</p>
    <textarea name="ingredients" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>

    <p style="margin-top: 24px;">Изображение ингредиентов</p>
    <input type="file" name="img_sub_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

    <p style="margin-top: 24px;">Рецепт</p>
    <textarea name="instructions" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>

    <button type="submit" style="margin-top: 24px; background-color: #c3272c; color: #fff; padding: 8px 16px; border: none; border-radius: 4px;">Отправить рецепт</button>
  </form>
</div>
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