<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "jessie";
$dbPassword = "000000";
$dbName     = "url_shortener";

// Create database connection
try{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}