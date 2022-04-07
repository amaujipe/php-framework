<?php

// This instance creates a connection with the DB
$connection = new PDO(
    'mysql:host=localhost;dbname=php-framework', // driver, machine name, database name
    'amaujipe', // database username
    ''
);

// We fetch the information from a single user in the 'users' table
// this info is obtained by the id into the URL through GET Method
// and then stored in the 'users' variable as an array of object
$query = $connection->query('SELECT id, name FROM users WHERE id =' . $_GET['id']);
$user = $query->fetch(PDO::FETCH_OBJ);

?>

<!-- We create the HTML structure that will show us
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
    <h1>Usuario</h1>
    <p>
        <strong>ID</strong> <?php echo $user->id; ?>
        <br />
        <?php echo $user->name; ?>
    </p>
</body>
</html>