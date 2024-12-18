<?php
require('/var/www/html/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try{
    $host = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASS'];
    $dbName = $_ENV['DB_NAME'];

    // DATABASE COMMECTION
    $db_Connection = new PDO("mysql:host=$host;dbname=$dbName; charset=utf8mb4", $user, $pass);
    $db_Connection->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
    $db_Connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e){
    echo $e->getMessage();
}
