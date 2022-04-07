<?php

// Import the file that contains the connection to the database
require __DIR__ . '/model.php';

function all() {
    // We fetch all the information from the 'users' table
    // and store it in the 'users' variable as an array of objects
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users');
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function find($id) {
    // We fetch the information from a single user in the 'users' table
    // this info is obtained by the id into the URL through GET Method
    // and then stored in the 'users' variable as an array of object
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users WHERE id =' . $id);
    return $query->fetch(PDO::FETCH_OBJ);
}