<!-- The 'ob_start()' function creates a buffer with the information
 next to it. More about this function in the next link
 https://www.php.net/manual/es/function.ob-start.php -->
<?php ob_start(); ?>
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
<!-- With ob_get_clean (https://www.php.net/manual/es/function.ob-get-clean)
we get the bufered info and stored it in the '$content' which
will be sent to the same variable in the template file
(layout/app.html.php)-->
<?php $content = ob_get_clean(); ?>

<!-- Importing the 'template' view in layout/app.html.php-->
<?php require __DIR__ . '/../layout/app.html.php'; ?>
