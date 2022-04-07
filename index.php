<?php

// Importing the helpers file to use the view() function
require 'app/helpers.php';
// Importing 'users' model to get the connection() and requests to the DB
require 'app/user_model.php';

// Using the 'view()' function defined in the 'helpers.php' file.
// We send the (view = 'users/index') we want to see, and the params to
// be used in the 'index.html.php' file to show the requested information.
// These params will take an important role, 'users' will be the name of the
// variable which will store the returned information by the 'all()' function
// created in the users_model.php file.
view('users/index', ['users' => all()]);