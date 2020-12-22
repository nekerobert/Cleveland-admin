<?php 

// Connection to the data base
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cleveland_db";

// create connection to connect the database
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//Check connection
if (!$conn) {
    die("ERROR: Connection failed. " . mysqli_connect_error());
}
?>