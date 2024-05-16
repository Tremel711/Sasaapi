<!DOCTYPE html>
<html>

<head>

    <title>Comments</title>
    <link rel="stylesheet" href="../app/views/index.css">
</head>

<body>
    <div class="header">
        <h1>Comments</h1>
        <a href="?action=users">Back to Users</a>
    </div>
    <?php foreach ($comments as $comment) : ?>
        <section>
            <header>
                <h2><?php echo $comment['email']; ?></h2>
                <h3><?php echo $comment['name']; ?></h3>
            </header>
            <article>
                <p><?php echo $comment['body']; ?></p>
            </article>
        </section>
    <?php endforeach; ?>
</body>

</html>