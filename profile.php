<?php
session_start();
?>

<!doctype html>
<!DOCTYPE html> 
<html lang="ru">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <head> 
    <title>Профиль</title> 
</head> 
<body> 
    <header> 
        <h1>Ваш профиль</h1> 
    </header> 
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['username'] ?></h2>
        <a href="logout.php">На главную</a>
    </form>

</body>
</html>