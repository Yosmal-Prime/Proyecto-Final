<?php
$host = 'sql109.infinityfree.com';
$db = 'if0_36989929_libreria';
$user = 'if0_36989929';
$pass = 'Yosmal123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}
?>
