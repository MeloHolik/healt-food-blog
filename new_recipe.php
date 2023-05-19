<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>health-food-blog</title>
    <link rel="stylesheet" href="styles.css">
 
</head> 
<body>
<header>
    <h1>Блог о здоровой еде</h1> 
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
<div class ="container">
    <h2> Добавить свой рецепт </h2>
 <form action ='new_recipes.php' method='post'>
 	<p>Название блюда</p>
 	<input type='text' name='name'>
 	<p>КБЖУ на 100 г.<p>
<ul>
    <li>Белки
    	<input type='number', name='protein'>
    </li>
    <li>Жиры
    	<input type='number', name='fat'>
    </li>
    <li>Углеводы
    	<input type='number', name='carbonyhydrates'>
    </li>
    <li>Калории
    	<input type='number', name='calories'>
    </li>
</ul>
<p> Изображение блюда</p>
<input type='file' name='img_main_download' value="<?= $recept['img_main_download']?>"><br>
<p>Ингредиенты</p>
<textarea name='ingredients' size="80"></textarea>
<p>Изображение ингредиентов</p>
<input type='file' name='img_sub_download' value="<?= $recept['img_sub_download']?>">
<p> Рецепт </p>
<textarea name='instructions' size="80"></textarea><br>
<button type='submit' >Отправить рецепт</button>
 </form>
</div>
    <footer>
      Подвал
    </footer>

  </body>
</html>