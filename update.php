<?php
include('./logica/db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM alumnos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apellidoPaterno'];
    $apMaterno = $_POST['apellidoMaterno'];
    $noCuenta = $_POST['noCuenta'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fechaRegistro = date('Y-m-d H:i:s');

    $sql = "UPDATE alumnos SET nombre='$nombre', apellidoPaterno='$apPaterno', apellidoMaterno='$apMaterno', noCuenta='$noCuenta', 
                                email='$email', telefono='$telefono', fechaRegistro='$fechaRegistro' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: ./index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php include('./head.php');  ?>
    <h1>Editar Alumno</h1>
    <form method="POST" action="./update.php?id=<?php echo $id; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        <label>Apellido Paterno:</label>
        <input type="text" name="apellidoPaterno" value="<?php echo $row['apellidoPaterno']; ?>" required><br>
        <label>Apellido Materno:</label>
        <input type="text" name="apellidoMaterno" value="<?php echo $row['apellidoMaterno']; ?>" required><br>
        <label>Numero de Cuenta:</label>
        <input type="text" name="noCuenta" value="<?php echo $row['noCuenta']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required><br>
        <input type="submit" value="Actualizar Usuario">
    </form>
    <br>
    <a href="./index.php">Volver a la lista</a>

<?php include('./footer.php'); ?>