<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
</head>
<body>
    <h2>List of Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>login</th>
            <th>nome</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['idUsuario']; ?></td>
                <td><?= $usuario['login']; ?></td>
                <td><?= $usuario['nome']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>