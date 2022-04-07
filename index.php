<?php

// Importing the helpers file to use the view() function
require 'app/helpers.php';

// Importing 'users' model to get the connection() and requests to the DB
require 'app/user_model.php';

// Importing 'users' controller to get the requests view
require 'app/user_controller.php';

// parse_url (https://www.php.net/manual/es/function.parse-url.php) analyze
// the URL of the current page sent in the $_SERVER['REQUEST_URI'] variable
// (https://www.php.net/manual/es/reserved.variables.server) and then returns
// all the URL elements in an associative array.
// With the PHP_URL_PATH constant, we ask to parse_url() function, that just
// return to us the 'value' for key 'path' in the associative array it returns.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// This block will display the information according to $path. The match()
// function https://www.php.net/manual/es/control-structures.match.php,
// branches evaluation based on an identity check (===) of a value.
// The match() function works similarly to a switch statement.
return match($path) {
    '/'     => index(),
    '/show' => show($_GET['id'])
};