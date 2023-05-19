<?php
	require_once 'connect.php';
	$recept_id = $_GET['id'];
	$recept = mysqli_query($connect, "SELECT * FROM `list` WHERE `id` ='$recept_id'");
	$recept = mysqli_fetch_assoc($recept);
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
 <div class ="container">
    <h2> Обновить рецепт </h2>
 <form action ='updater.php' method='post'>
 	<input type="hidden" name="id" value="<?= $recept_id ?>" >
 	<p>Название блюда</p>
 	<input type='text' name='name' value="<?= $recept['name']?>">
 	<p>КБЖУ на 100 г.<p>
<ul>
    <li>Белки
    	<input type='number', name='protein' value="<?= $recept['protein']?>">
    </li>
    <li>Жиры
    	<input type='number', name='fat' value="<?= $recept['fat']?>">
    </li>
    <li>Углеводы
    	<input type='number', name='carbonyhydrates' value="<?= $recept['carbhyd']?>">
    </li>
    <li>Калории
    	<input type='number', name='calories' value="<?= $recept['calories']?>">
    </li>
</ul>
<p> Изображение блюда</p>
<input type='file' name='img_main_download' value="<?= $recept['img_main_download']?>"><br>
<p>Ингредиенты</p>
<textarea name='ingredients' size="80"><?= $recept['ingredients']?></textarea>
<p>Изображение ингредиентов</p>
<input type='file' name='img_sub_download' value="<?= $recept['img_sub_download']?>">
<input type="submit" name="submit_image" value="Upload">
<p> Рецепт </p>
<textarea name='instructions' size="80"> <?= $recept['instructions']?></textarea>
<button type='submit' >Обновить рецепт</button>
 </form>
</div>

