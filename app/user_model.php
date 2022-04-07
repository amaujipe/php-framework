<?php

// Import the file that contains the connection to the database
require __DIR__ . '/model.php';

function all() {
    // We fetch all the information from the 'users' table in the DB
    // and return it to the 'users' controller (index.php in this case)
    // as an array of objects.
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users');
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function find($id) {
    // We fetch the information from a single user in the 'users' table,
    // this info is obtained by the id into the URL through the GET Method,
    // and finally returned to the 'show' controller (show.php in this case)
    // as an array of objects
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users WHERE id =' . $id);
    return $query->fetch(PDO::FETCH_OBJ);
}