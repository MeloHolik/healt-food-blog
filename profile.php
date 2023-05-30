<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: auth_check.php');
    exit;
}

$username = $_SESSION['user']['username'];
?>

<?php require_once 'components/header.php'; ?>

<body style="background-color: #f2f2f2; font-family: Arial, sans-serif; padding: 20px;">

    <!-- Профиль -->

    <form>
        <h2 style="margin: 10px 0;"><?php echo $username; ?></h2>
        <a href="logout.php">Выход</a>
    </form>

    <?php require_once 'components/footer.php'; ?>
