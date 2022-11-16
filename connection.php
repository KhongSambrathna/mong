<?php
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=Mong; port:3306', 'root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        
    }
    $stmt = $pdo->prepare("SELECT * FROM position;");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $key => $value) {
        echo $value['id'] . ' ' . $value['position'];
    }
?>