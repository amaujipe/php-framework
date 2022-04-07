<!--This is the HTML structure that will show us
the information of the 'users' table on the web -->

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Framework</title>
</head>
<body>
<h1>Usuarios</h1>
<table>
    <tbody>
    <!-- Since the information of the 'users' comes as an
    array of object, we create a loop to go through the
    array extracting each object information. -->
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><a href="/show.php?id=<?php echo $user->id
                ?>">Ver</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>