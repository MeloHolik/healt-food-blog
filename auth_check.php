<?php 
require_once 'connect.php';
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row;
            header('Location: profile.php');
        } else {
            echo "Неправильный пароль!";
        }
    } else {
        echo "Пользователь не найден!";
    }
}
?>