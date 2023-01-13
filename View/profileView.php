<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль <?= $login ?></title>
</head>
<body>
    <p>Профиль <?= $login ?></p>
    <a href="/message.php?id_friend=<?= $id_friend ?>">Написать сообщение <?= $login ?></a>
    <?php if ($posts): ?>
        <p>Посты:</p>
        <?php foreach($postList as $post): ?>
            <p><span><?= $post["date_post"] ?></span> <?= $post["post"] ?></p>
        <?php endforeach; ?>
    <?php endif; ?> 
    <a href="index.php">Главная страница</a> 
</body>
</html>