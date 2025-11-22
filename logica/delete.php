<?php
include('./conexiondb.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM alumnos WHERE id = '$id'";
    
    if(mysqli_query($conn, $sql)){
        echo "success"; 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>