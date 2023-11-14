<?php
include 'database/config.php';

$query = "SELECT * FROM Usuario";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
<a href="http://localhost/clinica/view/create.php">Create</a>
<h1>User List</h1>
<table border="1">
    <tr>
        <th>idUsuario</th>
        <th>login</th>
        <th>senha</th>
        <th>nome</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                      <td>{$row['idUsuario']}</td>
                      <td>{$row['login']}</td>
                      <td>{$row['senha']}</td>
                      <td>{$row['nome']}</td>
                  </tr>";
    }
    ?>
</table>
</body>
</html>