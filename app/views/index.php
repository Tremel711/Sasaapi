<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/views/index.css">
    <title>SASA APP</title>
</head>

<body>
    <div class="header">
        <h1><?php echo $title; ?></h1>
    </div>
    <div class="container">
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><a href="?user_id=<?php echo $user['id']; ?>"><?php echo $user['name']; ?></a></li>
        <?php endforeach; ?>
    </ul>
    </div>
</body>

</html>