<?php

$servername = "localhost"; //sets tge server name for the database

$username = "rza"; //sets username for the database user

$password = "rza"; //sets the password for the database user

$dbname = "rza"; //sets the database name to connect to
//this is the most secure i can make it in this environment i have
// password in plaintext isnt ideal, i would use environment variables
//if i could, but no avaliable to me in the local system

try { // try to connect to the database with the above credentials
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}






