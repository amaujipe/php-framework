<?php

// We are connecting to the new component 'vlucas/phpdotenv' we just install.
// Basically we are telling this component, where is the '.env' file, and to
// load it.
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();