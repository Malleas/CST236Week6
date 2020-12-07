<?php

require_once 'Autoloader.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$usersArray = array(
    (new User(1, "John", "Smith")),
    (new User(2, "Sue", "Jones")),
    (new User(3, "Bob", "Jackson")),
    (new User(4, "Bilbo", "Baggins")),
    (new User(5, "Sally", "Summers")),
);

echo json_encode($usersArray);