<?php

// In this file we create our database configuration data. And this file will
// be imported in the composer.json file

// Importing the needed class to work with our database. The component
// illuminate/database was installed through Composer CLI
use Illuminate\Database\Capsule\Manager;

// Create an instance from the class imported before
$capsule = new Manager;

// Creating the connection with the database. AddConnection() method adds
// specified to the container’s ['config']['database.connections'] array.
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'php-framework',
    'username' => 'amaujipe',
    'password' => ''
]);

// Then bootEloquent() passes a DatabaseManager instance 0as a connection
// resolver to the Eloquent\Model class:
$capsule->bootEloquent();