<?php
require_once 'connect.php';

// Получаем данные из формы
$name = $_POST['name'];
$protein = $_POST['protein'];
$fat = $_POST['fat'];
$carbonyhydrates = $_POST['carbonyhydrates'];
$calories = $_POST['calories'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
$id = $_POST['id'];
$category_id = $_POST['category_id'];

// Проверяем, загрузил ли пользователь файл и не возникло ли ошибок
if (isset($_FILES['img_main_download']) && $_FILES['img_main_download']['error'] === UPLOAD_ERR_OK && isset($_FILES['img_sub_download']) && $_FILES['img_sub_download']['error'] === UPLOAD_ERR_OK) {
    $img_main = basename($_FILES['img_main_download']['name']);
    $img_sub = basename($_FILES['img_sub_download']['name']);
    if (move_uploaded_file($_FILES['img_main_download']['tmp_name'], "img/$img_main") && move_uploaded_file($_FILES['img_sub_download']['tmp_name'], "img/$img_sub")) {
        mysqli_query($connect, "UPDATE `list` SET `name`='$name', `protein`='$protein', `fat`='$fat', `carbhyd`='$carbonyhydrates', `calories`='$calories', `img_main_download`='img/$img_main', `ingredients`='$ingredients', `img_sub_download`='img/$img_sub', `instructions`='$instructions', `category_id`='$category_id' WHERE `list`.`id`='$id'");
        // Перенаправляем пользователя на главную страницу
        header('Location: ../index.php');
        exit();
    }
} else {
    mysqli_query($connect, "UPDATE `list` SET `name`='$name', `protein`='$protein', `fat`='$fat', `carbhyd`='$carbonyhydrates', `calories`='$calories', `ingredients`='$ingredients', `instructions`='$instructions', `category_id`='$category_id' WHERE `list`.`id`='$id'");
    // Перенаправляем пользователя на главную страницу
    header('Location: ../index.php');
    exit();
}
?>