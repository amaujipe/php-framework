<!-- This is the HTML structure that will show us
the information of each user on the web -->

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