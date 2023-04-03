<?php
//En esta clase crearemos la consulta para eliminar


include("../controller/controlador.php"); // incluimos la db.
//validamos si estamos recibiendo el id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //Realizamos la consulta para Eliminar datod de usuario 
    $query = "DELETE  FROM usuarios WHERE id= $id";

    $result = mysqli_query($con, $query);
    if (!$result) { // si el Usuario no existe imprimiremos un mensaje 
        die("Usuario no existe");
    }

    // Este mensaje se mostrará almonento de eliminar
    echo '<script src="confirmacion.js" ></script>';
    $_SESSION['message'] = 'Usuario eliminado satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    header("Location: ListaUsu.php");
}
?>