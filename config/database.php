<?php

// In this file we create our database configuration data.

// Importing the needed class to work with our database. The component
// illuminate/database was installed through Composer CLI.
use Illuminate\Database\Capsule\Manager;

// Create an instance from the class imported before.
$capsule = new Manager;

// Creating the connection with the database. AddConnection() method adds
// specified to the container’s ['config']['database.connections'] array.
// Furthermore, we are using the ENVs Variables created in the '.env' file.
$capsule->addConnection([
    'driver'    => $_ENV['DB_CONNECTION'],
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_DATABASE'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASSWORD']
]);

// Then bootEloquent() passes a DatabaseManager instance as a connection
// resolver to the Eloquent\Model class:
$capsule->bootEloquent();