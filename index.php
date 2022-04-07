<?php

// Importing 'users' model
require 'app/user_model.php';

// Using the 'all()' function defined in the 'users' model
$users = all();

// Importing the 'users' view
require 'views/users/index.html.php';