<?php
try {
    $dsn = 'mysql:host=localhost;dbname=mabdd';
    $pdo = new PDO($dsn, 'root', 'password');
} catch (PDOException $exception) {
    die($exception->getMessage());
}