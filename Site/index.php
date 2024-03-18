<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Кафедра</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <!-- Форма авторизации -->

    <form>
     <h1>Авторизация</h1>
        <label>Email</label>
        <input type="text" name="email" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <p class="msg none">Текст сообщения</p>
    </form>

   
    <script src="jquery-3.4.1.min.js"></script> 
    <script src="main.js"></script>
    
</body>
</html>