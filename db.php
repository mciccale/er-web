<?php

session_start();

$mysql = mysqli_connect(
    'localhost', // IP adress of the DB
    'root', // Username of the DB
    'root', // Password
    'eldenring_db' // Name of the DB
);
?>