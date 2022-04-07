<h1>Usuarios</h1>
<table>
    <tbody>
    <!-- Since the information of the 'users' comes as an array of objects
    (from index.php in this case), we create a loop to go through the
    array extracting each object's information. -->
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><a href="/show?id=<?php echo $user->id
                ?>">Ver</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>