<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Друзья</title>
</head>
<body>
    <form action="" method="POST">
        <input type="search" name="search" placeholder="Найти друзей" aria-label="Search"/>
        <input type="submit">
    </form>
    <?php if($friend): ?>
        <?php foreach($friendsList as $friend): ?>
                <a href="/profile.php?id_friend=<?= $friend["id_user"]?>"><?= $friend["login"] ?> </a><a href="/friends.php?id_friend=<?= $friend["id_user"] ?>">Добавить в друзья</a></br>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if($friendID): ?>
        <p>Ваши друзья:</p>
        <?php foreach($friendsListID as $friend): ?>
                <a href="/profile.php?id_friend=<?= $friend["id_user"]?>"><?= $friend["login"] ?></a></br>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Найдите друзей через поиск</p>
    <?php endif; ?>
    <a href="index.php">Главная страница</a> 
</body>
</html>