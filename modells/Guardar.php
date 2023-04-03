<!--ESTA "CLASE" RECIBE LOS DATOS DEL FORMULARIO QUE SE ENCUENTRA EN LA "CLASE" INDEX-->
<?php
include('../controller/controlador.php');// Incluimos nuestra base de datos



    if (isset($_GET['Cedula'])) {
        $cedula = $_GET['Cedula'];
         //Preparamos consulta para verificar que no haya usuario
        $query = "SELECT * FROM conductor WHERE  id_cedula=$cedula";
        $result = mysqli_query($con, $query);


        if (mysqli_num_rows($result) >= 0) { //Comprobamos cuantas filas tiene el cedula
            $row = mysqli_fetch_array($result);
            $cedula = $row['Cedula'];

        

    }

    if (isset($_POST['Guardar_usu'])) {

        $_SESSION['message'] = 'Usuario ya existe con éxito';
        $_SESSION['message_type'] = 'success';
    }
    }else{


    
    if (isset($_POST['Guardar_usu'])) { // llamamos los datos del formulario.
        $cedula = $_POST['Cedula'];
        $nombres =  $_POST['Nombres'];
        $estado = $_POST['Estado'];
        $vehiculo = $_POST['Vehiculo'];
        

    $query = "INSERT INTO conductor(id_cedula, nombre_comple, estado, id_vehiculo) VALUES ('$cedula', 
    '$nombres', '$estado', '$vehiculo')"; //Escribimos nuestra consulta y la gaurdamos en la base de datos

    $result = mysqli_query($con, $query); // hacemos o ejecutamos la consulta 

    if (!$result) {
        die('Falla al realizar consulta');
    }
    // creamos los mensajes informativos
    $_SESSION['message'] = 'Usuario guardado con éxito';
    $_SESSION['message_type'] = 'success';

    header("Location: conductores.php");
}
    }
?>