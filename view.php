<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        img{height: 200px; max-width: 300px ; border-radius: 10px}
    </style>
</head>
<body>
<table>
    <tr>
        <th>username</th>
        <th>Image</th>
    </tr>
    <?php foreach($fetchedDatas as $data): ?>
    <tr>
        <td><?= $data->username; ?></td>
        <td><img src="<?= $data->image; ?>"></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="insert.php">Add new</a>
</body>
</html>

