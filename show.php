<?php

// Importing 'users' model
require 'app/user_model.php';

// Using the 'find()' function defined in the 'users' model
$user = find($_GET['id']);

// Importing the 'show' view
require 'views/users/show.html.php';