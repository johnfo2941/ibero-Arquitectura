<?php include('../controller/controlador.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conductores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4a82702199.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="continer p-4 " height="40vw">


        <div class="row">
            <!--Creamos una fila  -->

            <div class="col-md-6 mx-auto ">
                <!--Columna de 6 -->


                <?php if (isset($_SESSION['message'])) { ?>
                    <!-- se  hace validación para verificar si hay datos guardados -->

                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                        <!--traemos un estito de bootstrap para ver los mensajes -->
                        <?= $_SESSION['message'] ?>
                        <!--Mostramos el mensaje-->
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset();
                } ?>
                <!--Limpiamos datos que tenemos en sesión -->

                <div class="card card-body">
                    <!--Creamos una tarjeta en donde creamos un formulario -->
                    <form action="Guardar.php" method="POST">

                        <!--A traves del metodo post enviará los datos del formulario a Guardar.php -->
                        <div class="form-group">

                            <label for="Name" class="btn btn-info btn-block " class="form-control" class="text-center">Registro de conductores nuevos</label>


                        </div>

                        <div class="form-group">
                            <input minlength="6" maxlength="10" type="text" name="Cedula" class="form-control" placeholder="Cédula de ciudadania" autofocus required pattern="[0-9]+">
                            <!--Cédula -->

                        </div>
                        <input minlength="4" maxlength="30" type="text" name="Nombres" class="form-control" placeholder=" Nombre de conductor " autofocus required="" pattern="[a-z A-Z]+">
                        <!--Creamos campo para nombre -->
                        </div>

                        <div class="form-group">
                            <input minlength="6" maxlength="8" type="text" name="Estado" class="form-control" placeholder="Estado del conductor" autofocus required pattern="[a-z A-Z]+">
                            <!--estado-->
                        </div>
                        <div class="form-group">
                            <input minlength="4" maxlength="20" type="text" name="Vehiculo" class="form-control" placeholder="Placas de vehiculo" autofocus required pattern="[a-z A-Z 0-9]+">
                            <!--estado-->
                        </div>

                        <input type="submit" class="btn btn-dark btn-block " name="Guardar_usu" value="Guardar Conductor">
                        <!--Creamos el boton de guardar usuario-->


                    </form>

                </div>

            </div>



        </div>

    </div>


</body>

</html>