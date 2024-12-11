<?php
try{
    $host = "localhost";
    $user = "root";
    $pass = "@123ASDubuntu";
    $dbName = "bytant";

    // DATABASE COMMECTION
    $db_Connection = new PDO("mysql:host=127.0.0.1; dbname=$dbName; charset=utf8mb4", $user, $pass);
    $db_Connection->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
    $db_Connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "success";
} catch(PDOException $e){
    echo $e->getMessage();
}
