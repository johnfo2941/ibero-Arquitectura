<?php
// A traves de esta clase podremos actualizar un usuario

include('../controller/controlador.php'); // incluimois la bd.

if (isset($_GET['id'])) { // validamos si existe id lo guardamos para traer los datos 
    $id = $_GET['id'];
    $query = "SELECT * FROM conductor WHERE  id= $id";
    $result = mysqli_query($conn, $query);




    if (mysqli_num_rows($result) == 1) { //Comprobamos cuantas filas tiene el id
        $row = mysqli_fetch_array($result);
        $cedula = $row['Cedula'];
        $nombre = $row['Nombres'];
        $estado = $row['Estado'];
        $vehiculo = $row['Vehiculo'];
       
    }
}
// Validamos que mientras exista un id actualice
if (isset($_POST['Actualizar'])) {
    // copiamos los datos del usuario  a actualizar 
    $id = $_GET['id'];
    $cedula= $_POST['Cedula'];
    $nombre = $_POST['Nombres'];
    $estado = $_POST['Estado'];
    $vehiculo = $_POST['Vehiculo'];
    


    $query = "UPDATE conductor set  id_cedula ='$cedula',  nombre_comple ='$nombre', estado= '$estado'
      WHERE id = $id"; //alistamos consulta 
    $result = mysqli_query($conn, $query); // ejecutamoc consulta
    header('Locatione: Listar.php');
    if (!$result) {
        die("falla al actualizar");
    }
    $query = "UPDATE vehiculos set  id_placa ='$vehiculo'
    WHERE id = $id"; //alistamos consulta 
  $result = mysqli_query($conn, $query); // ejecutamoc consulta
  header('Locatione: Listar.php');
  if (!$result) {
      die("falla al actualizar");
  }
    //Mostramos mensaje de usuario actualizado
    $_SESSION['message'] = 'Usuario actualizado satisfactoriamente';
    $_SESSION['message_type'] = 'success ';
    header("Location: index.php");
}


?>
<div class="modal-dialog">
    <div class="modal-content ">
        <div class="modal-header">
            <h3 id="tituloVentana">Ingresa los datos a actualizar</h3>
            <button class="close" data-dismiss="modal" aria-label="Cerrar">
                <span arria-hidden="true">&times</span>

            </button>
        </div>
        <div class="modal-body">
            <div class="alert -alert-success">


                <div class="card card-bady">
                    <form action="Editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <!--Enviamos actialización por método post-->

                        <div class="form-group">
                            <input type="text" name="Cedula" class="form-control" value="<?php echo $nombre ?>" placeholder=" Actualizar Cedula " autofocus>
                            <!--Creamos campo para nombre -->

                        </div>

                        <div class="form-group">
                            <input type="text" name="Nombres" class="form-control" value="<?php echo $apellidos ?>" placeholder="Actualizar Nombres" autofocus>
                            <!--nombres -->

                        </div>

                        <div class="form-group">
                            <input type="text" name="Estado" class="form-control" value="<?php echo $cedula ?>" placeholder="Actualizar Estado " autofocus>
                            <!--estado -->
                        </div>


                        <div class="form-group">
                            <input type="text" name="Vehiculo" class="form-control" value="<?php echo $correo ?>" placeholder="Actualizar Vehiculo  " autofocus>
                            <!--vehiculo-->
                        </div>

                       


                        <button class="btn btn-dark btn-block" name="Actualizar">Actualizar</button><!-- Boton de envío de datod actualizados-->
                    </form>

                </div>

            </div>
        </div>
        <div class="modal-futer">
            <button class="btn btn-info" type="button" data-dismiss="modal">
                Cerrar
            </button>


        </div>
    </div>
</div>