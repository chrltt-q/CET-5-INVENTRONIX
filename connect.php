<?php

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "inventronix";

$connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (!$connect) {
    die("Unable to select database");
}
?>