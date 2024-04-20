<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
</head>
<body>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?=$error;?></li>
        <?php endforeach;?>
    </ul>
    <form action="signup" method="post">
        <input type="text" required name="name" placeholder="Name">
        <input type="text" required name="email" placeholder="Email">
        <input type="text" required minlength="6" name="password" placeholder="Password">
        <button type="submit">Signup</button>
    </form>
</body>
</html>

