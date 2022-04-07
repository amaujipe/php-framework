<?php

// Import the file that contains the connection to the database
require __DIR__ . '/model.php';

function all() {

    // Fetch all the information from the 'users' table in the DB, and return
    // it as an array of objects to index() function created in the
    // users_controller.php file
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users');
    return $query->fetchAll(PDO::FETCH_OBJ);

}

function find($id) {

    // Fetch the information from a single user in the 'users' table,
    // this info is obtained by the id into the URL through the GET Method,
    // and finally returned as an array of objects to the 'show()' function
    // created in the user_controller.php file
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users WHERE id =' . $id);
    return $query->fetch(PDO::FETCH_OBJ);

}