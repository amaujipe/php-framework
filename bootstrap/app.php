<?php

// Importing the autoload.php file from composer and all the config files
// we are using in our app. With this, we are cleaning our index file importing
// everything in one single file and using the composer autoload system.
require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../config/dotenv.php";
require __DIR__ . "/../config/database.php";
require __DIR__ . "/../config/route.php";