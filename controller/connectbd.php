<?php

$link = 'mysql:host=localhost;dbname=recibos';
$usuario = 'root';
$pass =  '';

try {
    $pdo = new PDO($link,$usuario,$pass);
    echo 'conectado';

} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage() ." <br/>";
    die();
}