<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
</head>
<body>

    <ul>
        <?php if (!empty($errors)): ?>
            <?php foreach ($errors as $error): ?>
                <li><?=$error;?></li>
                <?php endforeach;?>
        <?php endif;?>
    </ul>
    <form action="postlogin" method="post">
        <input type="text" required name="email" placeholder="Email">
        <input type="text" required minlength="6" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
