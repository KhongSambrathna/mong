<?php
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=Mong; port:3306', 'root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection error";
    }
?>