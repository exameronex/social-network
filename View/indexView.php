<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личная страница</title>
</head>
<body>
    <?php if ($auth): ?>
        <p>Здравствуйте <?=  $login; ?></p>  
        <a href="friends.php">Ваши друзья</a>        
        <a href="logout.php">Выход</a>
        <p>Напишите пост</p>
        <form action="" method="POST">
            <textarea name="text" rows="5" cols="55"></textarea>
            <input type="submit">
        </form>
        <?php if ($posts): ?>
            <?php foreach($postList as $post): ?>
                <p><span><?= $post["date_post"] ?></span> <?= $post["post"] ?></p>
            <?php endforeach; ?>
        <?php endif; ?>   
    <?php else: ?>
        <a href="auth.php">Авторизуйтесь</a>
        <a href="registration.php">Зарегистрируйтесь</a>
    <?php endif; ?>    
</body>
</html>
