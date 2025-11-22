<?php
    session_start(); 
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php"); 
        exit(); 
    }

    include('./logica/conexiondb.php');
    $consulta= "SELECT * FROM alumnos";
    $result = $conn->query($consulta);
?>
<?php include('./head.php'); ?>

    <h1>Usuarios</h1>
    <a href="./registro.php">Registrar Usuario</a>
    <table border="1" class="striped"> <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>No. Cuenta</th> 
            <th>Email</th>
            <th>Telefono</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr id="fila-<?php echo $row['id']; ?>">
            <td><?php echo $row['id']; ?></td>
            <td class="editable" data-campo="nombre"><?php echo $row['nombre'];?></td>
            <td class="editable" data-campo="apellidoPaterno"><?php echo $row['apellidoPaterno'];?></td>
            <td class="editable" data-campo="apellidoMaterno"><?php echo $row['apellidoMaterno'];?></td>
            <td class="editable" data-campo="noCuenta"><?php echo $row['noCuenta'];?></td>
            <td class="editable" data-campo="email"><?php echo $row['email']; ?></td>
            <td class="editable" data-campo="telefono"><?php echo $row['telefono'];?></td>
            <td><?php echo $row['fechaRegistro']; ?></td>
            
            <td>
                <button class="btn-flat waves-effect waves-light btn-editar" onclick="activarEdicion(<?php echo $row['id'];?>)">
                    <i class="material-icons">edit</i>
                </button>
                <button class="btn-flat waves-effect waves-light red-text btn-eliminar" onclick="eliminarFila(<?php echo $row['id'];?>)">
                    <i class="material-icons">delete</i>
                </button>

                <button class="btn green btn-guardar" style="display:none; margin-bottom:5px;" onclick="guardarEdicion(<?php echo $row['id'];?>)">
                    Guardar
                </button>
                <button class="btn red btn-cancelar" style="display:none;" onclick="cancelarEdicion(<?php echo $row['id'];?>)">
                    Cancelar
                </button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php  include('./footer.php'); ?>