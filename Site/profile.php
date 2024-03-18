<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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

    <!-- Профиль -->

    <form>
    <h1>Профиль</h1>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
        <label><?= $_SESSION['user']['email'] ?></label>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>