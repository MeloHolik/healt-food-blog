<?php
require_once 'connect.php';

// Проверяем, что все данные переданы из формы
if (!isset($_POST['name'], $_POST['protein'], $_POST['fat'], $_POST['carbohydrates'], $_POST['calories'], $_POST['ingredients'], $_POST['instructions'], $_POST['category_id'])) {
    echo 'Не все данные переданы из формы';
    exit();
}

$name = $_POST['name'];
$protein = $_POST['protein'];
$fat = $_POST['fat'];
$carbohydrates = $_POST['carbohydrates'];
$calories = $_POST['calories'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
$category_id = $_POST['category_id'];

// Обработка загруженных изображений
if (isset($_FILES['main_image']) && $_FILES['main_image']['error'] === UPLOAD_ERR_OK) {
    $img_main = $_FILES['main_image']['name'];
    move_uploaded_file($_FILES['main_image']['tmp_name'], 'img/' . $img_main);
}
if (isset($_FILES['ingredients_image']) && $_FILES['ingredients_image']['error'] === UPLOAD_ERR_OK) {
    $img_sub = $_FILES['ingredients_image']['name'];
    move_uploaded_file($_FILES['ingredients_image']['tmp_name'], 'img/' . $img_sub);
}

// Выполняем запрос для записи данных в БД
$query = "INSERT INTO `list`(`name`, `protein`, `fat`, `carbhyd`, `calories`, `img_main_download`, `ingredients`, `img_sub_download`, `instructions`, `category_id`) VALUES ('$name', '$protein', '$fat', '$carbohydrates', '$calories', 'img/$img_main', '$ingredients', 'img/$img_sub', '$instructions', '$category_id')";

if (mysqli_query($connect, $query)) {
    // Редирект на страницу со списком рецептов
    header('Location: index.php');
} else {
    echo 'Ошибка при добавлении рецепта: ' . mysqli_error($connect);
}

mysqli_close($connect);
?>