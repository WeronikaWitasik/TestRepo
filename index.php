<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="project_1/html" href="project_1.html">;
    <link rel="stylesheet" type="layout/css" href="layout.css">;
</head>
<body>
<?php

/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'weronika');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');*/
////$link = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$username = 'nazwa użytkownika';
$password = 'hasło';
$database = 'localhost';

$connection = @mysqli_connect('localhost', $username, $password);

if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
</body>
</html>
