<?php require_once 'connect.php'; 
$recept_id = isset($_GET['id']) ? $_GET['id'] : ''; 
$recept = mysqli_query($connect, "SELECT * FROM `list` WHERE `id` ='$recept_id'"); 
$recept = mysqli_fetch_assoc($recept); 
$query = "SELECT * FROM `categories`"; 
$categories = mysqli_query($connect, $query); 
$categories = mysqli_fetch_all($categories); ?> 
<?php require_once 'components/header.php'; ?> 
<div style="border: 1px solid #ccc; padding: 16px; margin-top: 32px;"> 
    <h2 style="font-size: 28px; font-weight: bold;">Добавить свой рецепт</h2> 
    <form action="new_recipes.php" method="post" enctype="multipart/form-data"> 
        <p style="margin-top: 16px; margin-bottom: 8px; font-size: 16px;">Название блюда</p> 
        <input type="text" name="name" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
 <p style="margin-top: 24px;">Категория</p>
<select name="category_id" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    <?php foreach ($categories as $category) { ?>
        <option value="<?= $category[0] ?>" <?php if (isset($recept['category_id']) && $recept['category_id'] == $category[0]) { echo "selected"; } ?>><?= $category[1] ?></option>
    <?php } ?>
</select>

    <p style="margin-top: 24px; font-size: 16px;">КБЖУ на 100 г.</p>
    <ul style="list-style:none; margin-left: 0; padding-left: 0;">
        <li style="margin-top: 8px; font-size: 16px;">Белки <input type="number" name="protein" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"> </li>
        <li style="margin-top: 8px; font-size: 16px;">Жиры <input type="number" name="fat" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"> </li>
        <li style="margin-top: 8px; font-size: 16px;">Углеводы <input type="number" name="carbohydrates" style="margin-left: 8px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"> </li>
        <li style="margin-top: 8px; font-size: 16px;">Калории <input type="number" name="calories" style="margin-left: 4px; padding: 4px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"> </li>
    </ul>

    <p style="margin-top: 24px; font-size: 16px;">Изображение блюда</p>
    <input type="file" name="main_image" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">Ингредиенты</p>
    <textarea name="ingredients" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"></textarea>

    <p style="margin-top: 24px; font-size: 16px;">Изображение ингредиентов</p>
    <input type="file" name="ingredients_image" value="" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

    <p style="margin-top: 24px; font-size: 16px;">Рецепт</p>
    <textarea name="instructions" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; font-size: 16px;"></textarea>

    <button type="submit" style="margin-top: 24px; background-color: #c3272c; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; font-size: 16px;">Отправить рецепт</button>
</form>
</div> <?php require_once 'components/footer.php'; ?>