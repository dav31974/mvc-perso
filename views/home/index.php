<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>

<body>
    <h1>HomePage</h1>
    <h2>Bienvenue sur la HomePage</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?php echo $user->email ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>