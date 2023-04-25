<?php
	$connect = mysqli_connect('localhost', 'root', '', 'recipes');
	if(!$connect) {
		die('Ошибка подключения');
	}