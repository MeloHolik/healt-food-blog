<?php
session_start();
?>

<? require_once 'components/header.php'; ?>

<body style="background-color: #f2f2f2; font-family: Arial, sans-serif; padding: 20px;">

    <!-- Профиль -->

    <form>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['username'] ?></h2>
        <a href="logout.php">На главную</a>
    </form>

<? require_once 'components/footer.php'; ?>
