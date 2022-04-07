<?php

// This function returns the connection with the DB configuration
function connection() {
    return new PDO(
        'mysql:host=localhost;dbname=php-framework', // driver, machine name, database name
        'amaujipe', // database username
        ''  // database user password
    );
}
