<?php

// We are connecting to the component 'vlucas/phpdotenv'. Basically we are
// telling this component, where is the '.env' file, and to load it.
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();