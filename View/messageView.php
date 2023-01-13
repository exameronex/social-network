<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщения</title>
</head>
<body>
    <?php if ($message): ?>
        <p>Сообщения:</p>
        <?php foreach($messageList as $message): ?>
            <?php if ($message["id_first_user"] == $id): ?>
                <p><span><?= $message["date_message"] ?></span> <span><?= $login ?></span>: <?= $message["text"] ?></p>
            <?php else: ?>
                <p><span><?= $message["date_message"] ?></span> <span><?= $loginFriend ?></span>: <?= $message["text"] ?></p>
            <?php endif; ?> 
        <?php endforeach; ?>
    <?php else: ?>
        <p>Напишите другу что-нибудь</p>
    <?php endif; ?> 
    <form action="" method="POST">
            <textarea name="text" rows="5" cols="55"></textarea>
            <input type="submit">
    </form>
    <a href="index.php">Главная страница</a> 
</body>
</html>