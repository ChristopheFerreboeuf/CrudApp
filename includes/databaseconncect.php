<?php

$host = 'mysql';
$user = 'root';
$password = 'password';
$database = 'scandiweb';

/** @var mysqli $mysqli */
$conn = new mysqli($host, $user, $password, $database);

if (!empty($mysqli->connect_error)) {
    if ($mysqli->connect_error) {
        printf("Connection failed: %s/n", $mysqli->connect_error);
        die();
    }
}
