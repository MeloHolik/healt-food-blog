<?php
require_once 'connect.php';
$category_id = @$_GET['category_id'];
$query = "SELECT * FROM `list`"; 
if ($category_id) { 
    $query .= " WHERE `category_id` = $category_id"; 
} 
$recept = mysqli_query($connect, $query); 
$recept = mysqli_fetch_all($recept); 
$query = "SELECT * FROM `categories`"; 
$categories = mysqli_query($connect, $query); 
$categories = mysqli_fetch_all($categories); 
?>
<?php require_once 'components/header.php'; ?>
<p style="margin-top: 24px;">Категория</p> 
<select name="category_id" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;" onchange="location = this.value;"> 
    <option value="">Все категории</option> 
    <?php foreach ($categories as $category) { 
        $category_id = $category[0]; 
        $category_name = $category[1]; 
        $selected = ($category_id == @$_GET['category_id']) ? 'selected' : ''; 
        echo "<option value=\"?category_id=$category_id\" $selected>$category_name</option>"; 
    } ?> 
</select> 

<?php foreach($recept as $num) { ?> 
<div style="border: 1px solid #ccc; padding: 16px; margin-bottom: 16px; font-family: Arial, sans-serif; color: #333;"> 
    <h1 style="font-size: 36px; font-weight: bold; margin-top: 0; margin-bottom: 16px;"><?= $num[1] ?></h1> 
    <div style="display: flex; justify-content: space-between;"> 
        <div> 
            <h2 style="font-size: 24px; font-weight: bold; margin-top: 0; margin-bottom: 16px;">КБЖУ на 100 г.</h2> 
            <p style="font-size: 16px; line-height: 1.5; margin-bottom: 8px;">Белки:<?= $num[4] ?></p> 
            <p style="font-size: 16px; line-height: 1.5; margin-bottom: 8px;">Жиры: <?= $num[5] ?></p> 
            <p style="font-size: 16px; line-height: 1.5; margin-bottom: 8px;">Углеводы: <?=$num[6] ?></p> 
            <p style="font-size: 16px; line-height: 1.5; margin-bottom: 0;">Калории: <?=$num[7] ?></p> 
            <img src="<?php echo $num[9]; ?>" alt="<?php echo $num[9]; ?>" style="max-width: 100%; margin-bottom: 16px;">
        </div> 
    </div> 
    <h2 style="font-size: 24px; font-weight: bold; margin-top: 32px; margin-bottom: 16px;">Ингредиенты:</h2> 
    <p style="font-size: 16px; line-height: 1.5; margin-bottom: 16px;"><?= $num[8]?></p> 
    <img src="<?php echo $num[10]; ?>" alt="<?php echo $num[10]; ?>" style="max-width: 100%; margin-bottom: 16px;">
    <h2 style="font-size: 24px; font-weight: bold; margin-top: 32px; margin-bottom: 16px;">Рецепт</h2> 
    <p style="font-size: 16px; line-height: 1.5; margin-bottom: 16px;"><?= $num[3]?></p> 
    <p style="text-align: right; margin-bottom: 0;"> 
        <a href="update.php?id=<?= $num[0] ?>" style="display: inline-block; text-decoration: none; background-color: #c3272c; color: #fff; padding: 8px 16px; border-radius: 4px; transition: all 0.3s ease;">Редактировать рецепт</a> 
    </p> 
</div> 
<?php } ?> 

<div style="border: 1px solid #ccc; padding: 16px; margin-top: 32px;"> 
    <h2 style="font-size: 28px; font-weight: bold;">Добавить свой рецепт</h2>
    <form action="new_recipes.php" method="post" enctype="multipart/form-data">
        <p style="margin-top: 16px; margin-bottom: 8px; font-size: 16px;">Название блюда</p>
        <input type="text" name="name" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">

     <p style="margin-top: 24px;">Категория</p>
<select name="category_id" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    <?php foreach ($categories as $category) { ?>
        <option value="<?= $category[0] ?>" <?php if ($recipe['category_id'] == $category[0]) { echo "selected"; } ?>><?= $category[1] ?></option>
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
</div>
<?php require_once 'components/footer.php'; ?>