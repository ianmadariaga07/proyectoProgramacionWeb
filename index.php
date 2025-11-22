<?php
    session_start(); 
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php"); 
        exit(); 
    }

    include('./logica/db.php');
    $consulta= "SELECT * FROM alumnos";
    $result = $conn->query($consulta);
?>
<?php include('./head.php'); ?>

    <h1>Usuarios</h1>
    <a href="./registro.php">Registrar Usuario</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>noCuenta</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellidoPaterno']; ?></td>
            <td><?php echo $row['apellidoMaterno']; ?></td>
            <td><?php echo $row['noCuenta']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['fechaRegistro']; ?></td>
            <td>
                <a href="./update.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="./logica/delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>

<?php  include('./footer.php'); ?>