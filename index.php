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
    <img src="https://xn--b1aqjenlka.xn--p1ai/img/recepty/1935/social.jpg" alt="Борщ">
    <h2>Ингредиенты:</h2>
    <?= $num[8]
     ?><br>

    <img src="https://vilkin.pro/wp-content/uploads/2018/06/borsh-so-svininoi-1-770x513.jpg" alt="Борщ">
    <h2>Рецепт</h2>    
    <?= $num[3] ?><br>
    </p>

<?php
}
  ?>
    
    <footer>
      Подвал
    </footer>

  </body>
</html>