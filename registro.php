<?php  include ('head.php'); ?> 
    <h1>Agregar Usuario</h1>
    <form method="POST" action="./logica/create.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Apellido Paterno:</label>
        <input type="text" name="apellidoPaterno" required><br>
        <label>Apellido Materno:</label>
        <input type="text" name="apellidoMaterno" required><br>
        <label>noCuenta:</label>
        <input type="text" name="noCuenta" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br>
        <input type="submit" value="Agregar Usuario">
    </form>
    <br>
    <a href="./index.php">Volver a la lista</a>
<?php  include ('footer.php'); ?>



