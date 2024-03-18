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

    <!-- Форма регистрации -->

    <form>
        <h1>Регистрация</h1>
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите свое имя">
        <label>Фамилия</label>
        <input type="text" name="surname" placeholder="Введите свою фамилию">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="register-btn">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <p class="msg none">Текст сообщения</p>
    </form>
    
    <script src="jquery-3.4.1.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>