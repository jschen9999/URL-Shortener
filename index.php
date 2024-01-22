<?php
$a = $_POST['url'];
// Include database configuration file
require_once 'dbConfig.php';

// Include URL Shortener library file
require_once 'Shortener.class.php';

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($db);

// Long URL
$longURL = $a;

// Prefix of the short URL 
$shortURL_Prefix = 'https://140.138.248.36/webhw4/'; // with URL rewrite

try{
    // Get short code of the URL
    $shortCode = $shortener->urlToShortCode($longURL);
    
    // Create short URL
    $shortURL = $shortURL_Prefix.$shortCode;
    
    // Display short URL
    echo 'Short URL: '.$shortURL;
}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}