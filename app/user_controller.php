<?php

// Importing the model which will work with this controller, in this case,
// the user model works with the user controller.
use App\Models\User;

// This function will return all we need to build the 'users/index' view.
function index() {

    // Using the 'view()' function defined in the 'helpers.php' file.
    // We send the view ('users/index') we want to see, and the params to
    // be used in the 'index.html.php' file to show the requested information.
    // These params will take an important role, 'users' will be the name of the
    // variable which will store the returned information by the 'all()'
    // function created in the users_model.php file.
    view('users/index', [
        'users' => User::all() // Imports all user's data through the User Model
    ]);

}

// This function will return all we need to build the 'users/show' view.
function show($id) {

    // Using the 'view()' function defined in the 'helpers.php' file.
    // We send the view ('users/show') we want to see, and the params to
    // be used in the 'show.html.php' file to show the requested information.
    // These params will take an important role, 'user' will be the name of the
    // variable which will store the returned information by the 'find()'
    // function created in the users_model.php file.
    view('users/show', [
        'user' => User::find($id) // Imports user data through the User Model
    ]);

}