<?php
try {
    $pdoDatabase = new PDO('mysql:host=mysql;dbname=project', 'root', '123456');
    echo 'Success';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
}
