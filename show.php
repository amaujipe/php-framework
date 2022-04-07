<?php

// Importing the helpers file to use the view() function
require 'app/helpers.php';
// Importing 'users' model to get the connection() and requests to the DB
require 'app/user_model.php';

// Using the 'view()' function defined in the 'helpers.php' file.
// We send the (view = 'users/show') we want to see, and the params to
// be used in the 'show.html.php' file to show the requested information.
// These params will take an important role, 'user' will be the name of the
// variable which will store the returned information by the 'find()' function
// created in the users_model.php file.
view('users/show', ['user' => find($_GET['id'])]);