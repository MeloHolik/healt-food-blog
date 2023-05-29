<?php
	require_once 'connect.php';
	$recept_id = $_GET['id'];
	$recept = mysqli_query($connect, "SELECT * FROM `list` WHERE `id` ='$recept_id'");
	$recept = mysqli_fetch_assoc($recept);
?>

<? require_once 'components/header.php'; ?>

<div style="border: 1px solid #ccc; padding: 16px; margin-top: 32px;">
    <h2> Обновить рецепт </h2>
    <form action='updater.php' method='post'>
        <input type="hidden" name="id" value="<?= $recept_id ?>">
        <p>Название блюда</p>
        <input type='text' name='name' value="<?= $recept['name']?>" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
        <p>КБЖУ на 100 г.<p>
        <ul style="list-style:none; margin-left: 0; padding-left: 0;">
            <li style="margin-top: 8px; font-size: 16px;">Белки
                <input type='number' name='protein' value="<?= $recept['protein']?>" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
            </li>
            <li style="margin-top: 8px; font-size: 16px;">Жиры
                <input type='number' name='fat' value="<?= $recept['fat']?>" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
            </li>
            <li style="margin-top: 8px; font-size: 16px;">Углеводы
                <input type='number' name='carbonyhydrates' value="<?= $recept['carbhyd']?>" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
            </li>
            <li style="margin-top: 8px; font-size: 16px;">Калории
                <input type='number' name='calories' value="<?= $recept['calories']?>" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
            </li>
        </ul>
        <p> Изображение блюда</p>
        <input type='file' name='img_main_download' value="<?= $recept['img_main_download']?>" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"><br>
        <p>Ингредиенты</p>
        <textarea name='ingredients' size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"><?= $recept['ingredients']?></textarea>
        <p>Изображение ингредиентов</p>
        <input type='file' name='img_sub_download' value="<?= $recept['img_sub_download']?>" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
        <p> Рецепт </p>
        <textarea name='instructions' size="80" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"><?= $recept['instructions']?></textarea>
        <button type='submit' style="margin-top: 16px; background-color: #c3272c; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; font-size: 16px;">Обновить рецепт</button>
    </form>
</div>
<? require_once 'components/footer.php'; ?>

