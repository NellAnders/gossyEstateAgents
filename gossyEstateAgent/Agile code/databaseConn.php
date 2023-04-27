<?php

$host = "localhost";
$username = "josephathey";
$password = "2200980";
$dbname = "josephathey";

//create connection

$conn = new mysqli($host, $username, $password, $dbname);

//check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>