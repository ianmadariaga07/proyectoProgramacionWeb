<?php
$host = 'localhost:3306';
$user = 'root';  
$password = '1234567';
$dbname = 'crudLogin';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
