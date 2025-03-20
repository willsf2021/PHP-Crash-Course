<?php

// Cookies is stored on the BROWSER! on CLIENT SIDE!
// Is used to store user name, usaer email, for example.


// Set cookie

setcookie('name', 'Wilson', time() + 86400 * 30);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);