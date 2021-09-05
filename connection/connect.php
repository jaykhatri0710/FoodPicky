<?php

//main connection file for both admin & front end
$servername = "remotemysql.com"; //server
$username = getenv('USERNAME'); //username
$password = getenv('PASSWORD'); //password
$dbname = getenv('USERNAME');  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>