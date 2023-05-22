<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новый рецепт</title>
    <link rel="stylesheet" href="styles.css">
</head> 
<body style="background-color: #f2f2f2; font-family: Arial, sans-serif; padding: 20px;">
  <header>
    <h1>Добавить свой рецепт</h1>
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
<div style="border: 1px solid #ccc; padding: 16px; margin-top: 32px;">
  <h2 style="font-size: 28px; font-weight: bold;">Добавить свой рецепт</h2>
  <form action="new_recipes.php" method="post">
    <p style="margin-top: 16px; margin-bottom: 8px; font-size: 16px;">Название блюда</p>
    <input type="text" name="name" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">КБЖУ на 100 г.</p>
    <ul style="list-style:none; margin-left: 0; padding-left: 0;">
      <li style="margin-top: 8px; font-size: 16px;">Белки
        <input type="number" name="protein" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
      <li style="margin-top: 8px; font-size: 16px;">Жиры
        <input type="number" name="fat" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
      <li style="margin-top: 8px; font-size: 16px;">Углеводы
        <input type="number" name="carbonyhydrates" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
      <li style="margin-top: 8px; font-size: 16px;">Калории
        <input type="number" name="calories" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
      </li>
    </ul>

    <p style="margin-top: 24px; font-size: 16px;">Изображение блюда</p>
    <input type="file" name="img_main_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">Ингредиенты</p>
    <textarea name="ingredients" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"></textarea>

    <p style="margin-top: 24px; font-size: 16px;">Изображение ингредиентов</p>
    <input type="file" name="img_sub_download" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">Рецепт</p>
    <textarea name="instructions" size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"></textarea>

    <button type="submit" style="margin-top: 24px; background-color: #c3272c; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; font-size: 16px;">Отправить рецепт</button>
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