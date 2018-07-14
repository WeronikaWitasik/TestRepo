<?php
//connection to datebase
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = ""; //XAMPP nie ma hasła jako root
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);