<?php
include('./db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apellidoPaterno'];
    $apMaterno = $_POST['apellidoMaterno'];
    $noCuenta = $_POST['noCuenta'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fechaRegistro = date('Y-m-d H:i:s');

    $sql = "INSERT INTO alumnos(nombre, apellidoPaterno, apellidoMaterno, noCuenta, email, telefono, fechaRegistro) 
        VALUES ('$nombre', '$apPaterno', '$apMaterno', '$noCuenta', '$email', '$telefono', '$fechaRegistro')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>