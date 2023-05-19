<?php
require_once 'connect.php';
$recept = mysqli_query($connect, "SELECT * FROM `list`");
$recept = mysqli_fetch_all($recept);
echo '<pre>';
print_r($recept);
echo '</pre>';
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
        img {
            width: 500px;
            height: auto;
        }
       * {
            margin: 10px;
            padding: 10px;
        }
    </style>
</head> 
<body>
<header>
    <h1>Блог о здоровой еде</h1> 
</header> 
<nav> 
    <ul> 
        <li>
            <a href="index.html">Главная</a>
        </li> <li><a href="calculator.php">Калькулятор КБЖУ</a></li> 
        <li><a href="new_recipe.php">Добавить блюдо</a></li> 
        <li><a href="update.php">Редактировать блюдо</a></li> 
        <li><a href="authorization.php">Вход</a></li>
    </ul> 
    </nav> 
  <?php
  foreach($recept as $num) {
  	?>
  	<h1><?= $num[1] ?></h1>
    <p>
    <h2>КБЖУ на 100 г.</h2>
Белки:<?= $num[4] ?><br>
Жиры: <?= $num[5] ?><br>
Углеводы: <?=$num[6] ?><br>
Калории: <?=$num[7] ?><br>
    <img><?php  
    if ($num[9]) {
  echo "<img src='img/$num[9]'/>";;
} else { 
     echo $recept=''; 
 } ?></img><br>
    <h2>Ингредиенты:</h2>
    <?= $num[8]?><br>
    <img><?php  
    if ($num[10]) {
  echo "<img src='img/$num[10]'/>";;
} else { 
     echo $recept=''; 
 } ?></img>
<br>
    <h2>Рецепт</h2>    
  <p align="left"><?= $num[3]?></p><br>
    </p>
<p><a href="update.php?id=<?= $num[0] ?>">Редактировать рецепт</a></p>
<?php
}
  ?>
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
<textarea name='instructions' size="80"></textarea>
<button type='submit' >Отправить рецепт</button>
 </form>
</div>
    <footer>
      Подвал
    </footer>

  </body>
</html>