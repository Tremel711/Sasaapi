<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/views/index.css">
    <title><?php echo $title; ?></title>
</head>
<div class="header">
    <h1><?php echo $title ?> - Posts </h1>
    <a href="?action=users">Back to Users</a>
</div>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Post</th>
            <th>Show Comments</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post) : ?>
            <tr>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['body']; ?></td>
                <td>
                    <a href="?action=showComments&post_id=<?php echo $post['id']; ?>">Comments</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</html>