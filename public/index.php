<?php

// Importing the 'app.php' file where we are importing the different files we
// are using in our app. With this, we are cleaning our index file importing
// everything in one single line.
require __DIR__ . "/../bootstrap/app.php";

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