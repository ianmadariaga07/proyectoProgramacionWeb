<?php
$host = 'sql306.infinityfree.com';
$user = 'if0_40480455';  
$password = 'TiZhJeDVX1GDy';
$dbname = 'if0_40480455_crudLogin';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
