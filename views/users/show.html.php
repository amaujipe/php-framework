<!-- The 'ob_start()' function creates a buffer with the information
 next to it. More about this function in the next link
 https://www.php.net/manual/es/function.ob-start.php -->
<?php ob_start(); ?>
<h1>Usuario</h1>
<p>
    <strong>ID</strong> <?php echo $user->id; ?>
    <br />
    <?php echo $user->name; ?>
</p>
<!-- With ob_get_clean (https://www.php.net/manual/es/function.ob-get-clean)
we get the bufered info and stored it in the '$content' which
will be sent to the same variable in the template file
(layout/app.html.php)-->
<?php $content = ob_get_clean(); ?>

<!-- Importing the 'template' view in layout/app.html.php-->
<?php require __DIR__ . '/../layout/app.html.php'; ?>
