<?php
include('./conexiondb.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apellidoPaterno'];
    $apMaterno = $_POST['apellidoMaterno'];
    $noCuenta = $_POST['noCuenta'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE alumnos SET nombre = '$nombre', apellidoPaterno = '$apPaterno', apellidoMaterno = '$apMaterno', noCuenta = '$noCuenta', 
                                email = '$email', telefono = '$telefono' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        echo "success"; 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
