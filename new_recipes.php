<?php
	require_once 'connect.php';
	$name= $_POST['name'];
	$protein= $_POST['protein'];
	$fat= $_POST['fat'];
	$carbonyhydrates= $_POST['carbonyhydrates'];
	$calories= $_POST['calories'];
	$img_main= $_FILES['variable']['img_main_download'];
	$ingredients= $_POST['ingredients'];
	$img_sub= $_FILES['variable']['img_sub_download'];
	$instructions = $_POST['instructions'];

mysqli_query($connect, "INSERT INTO `list` (`id`, `name`, `description`, `instructions`, `protein`, `fat`, `carbhyd`, `calories`, `ingredients`, `img_main`, `img_sub`, `img_main_download`, `img_sub_download`, `created_at`, `updated_at`) VALUES (NULL, '$name', NULL, '$instructions', '$protein' , '$fat', '$carbonyhydrates', '$calories', '$ingredients', NULL, NULL, '$img_main', '$img_sub', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
	header('Location: ../index.php');
move_uploaded_file($img_sub, "img/" .$img_sub);

?>