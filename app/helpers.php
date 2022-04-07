<?php

// This function will print the different views on our website. For that, it
// will receive the 'view' and the params of that view to be printed.
function view($view, array $params = []) {

    // convert the content of the associative array into variables, using the
    // 'extract' function https://www.php.net/manual/es/function.extract
    extract($params);

    // The 'ob_start()' function creates a buffer with the information
    // next to it. In this case, the '$view' code.
    // https://www.php.net/manual/es/function.ob-start.php
    ob_start();

    // Here, we will bring the '$view' that client want to see. This view will
    // be saved in $content to later be used in the template, as shown in the
    // following lines of this function.
    require __DIR__ . "/../views/$view.html.php";

    // With ob_get_clean (https://www.php.net/manual/es/function.ob-get-clean)
    // we get the buffered info and stored it in '$content' which will be used
    // in the template file (layout/app.html.php)
    $content = ob_get_clean();

    // Importing the 'template' view in layout/app.html.php
    require __DIR__ . '/../views/layout/app.html.php';
}
