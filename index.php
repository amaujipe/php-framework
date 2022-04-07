<?php

// This instance creates a connection with the DB
$connection = new PDO(
    'mysql:host=localhost;dbname=php-framework', // driver, machine name, database name
    'amaujipe', // database username
    ''
);

// We fetch all the information from the 'users' table
// and store it in the 'users' variable as an array of objects
$query = $connection->query('SELECT id, name FROM users');
$users = $query->fetchAll(PDO::FETCH_OBJ);

// Importing the view
require 'views/users/index.html.php';