<?php
require_once 'connect.php';
	$name= $_POST['name'];
	$protein= $_POST['protein'];
	$fat= $_POST['fat'];
	$carbonyhydrates= $_POST['carbonyhydrates'];
	$calories= $_POST['calories'];
	$img_main= $_POST['img_main_download'];
	$ingredients= $_POST['ingredients'];
	$img_sub= $_POST['img_sub_download'];
	$instructions = $_POST['instructions'];
	$id= $_POST['id'];
mysqli_query($connect, "UPDATE `list` SET `name`='$name',`protein`='$protein',`fat`='$fat',`carbhyd`='$carbonyhydrates',`calories`='$calories',`img_main`='$img_main',`ingredients`='$ingredients',`img_sub`='$img_sub',`instructions`='$instructions' WHERE `list`.`id` = '$id'");
header('Location: ../index.php')
?>