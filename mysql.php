<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

$link = mysqli_connect("172.17.0.3", "root", "secret", "mysql");

if (!$link) {
    echo "<pre>";	
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo "</pre>";
   exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

