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
<?php require 'components/header.php'; ?>
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

<?php
require 'components/formadd.php';
require 'components/footer.php'; ?>
