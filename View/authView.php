<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <h1>Авторизация</h1>
    <form action="" method="POST">
        <label>Логин
            <input name="login">
        </label>
        <label>Пароль
            <input name="password" type="password">
        </label>
        <input type="submit">
    </form>
    <?php if ($authError): ?>
        <p>Неверный логин или пароль</p>
    <?php endif; ?>
</body>
</html>