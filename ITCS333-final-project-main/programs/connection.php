<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=333project-database;charset=utf8', 'root', '');
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
