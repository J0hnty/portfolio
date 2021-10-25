<?php
$host = '127.0.0.1';
$db   = 'portfolio';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    include_once ('./Classes/Projects.php');
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
//
//$servername = "localhost";
//$username = "username";
//$password = "password";
//
//try {
//    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//    // set the PDO error mode to exception
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//} catch(PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}
