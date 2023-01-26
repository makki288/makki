<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "datebase");
require_once "functions.php";
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
// mysqli_set_charset($conn,"utf8mb4_general_ci");
?>