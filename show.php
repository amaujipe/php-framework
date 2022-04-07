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

require 'views/users/show.html.php';