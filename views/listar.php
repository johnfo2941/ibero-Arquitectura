<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista conductores</title>
</head>
<!-- Incluimos nuestra base de datos-->
<?php include('../controller/controlador.php') ?>
<!-- Incluimos La Encabezado-->




                <?php if (isset($_SESSION['message'])) { ?>
                    <!-- se  hace validación para verificar si hay datos guardados -->

                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                        <!--traemos un estito de bootstrap-->
                        <?= $_SESSION['message'] ?>
                        <!--Mostramos el mensaje-->
                       
                       
                    </div>
                <?php session_unset();
                } ?>
                <!-- Tabla de almacenamiento de datos -->
                <table >
                    <thead>

                        <tr>
                            <!--Creamos  la cabeza de la tabla-->
                           
                            <th>Cedula</th>
                            <th>Nombres</th>
                            <th>Estado</th>
                            <th>Vehiculo</th>
                            <th> Acciones </th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM conductor "; // Realizamos la consulta por consecucion de id 
                        $result_usu = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($result_usu)) { ?>
                            <!--Se ingresa la lista de usuarios para ver por pantalla-->
                            <tr>
                                <td><?php echo $row['Cedula'] ?></td>
                                <td><?php echo $row['Nombres'] ?></td>
                                <td><?php echo $row['Estado'] ?></td>
                                <td><?php echo $row['Vehiculo'] ?></td>
                              
                              
                                <?php


                                ?>
                                <td>



                                    <a href="Editar.php?id=<?php echo $row['id'] ?> " class="btn btn-success">
                                        <i class="fas fa-user-edit"></i>.=Editar</i>
                                    </a>
                                    <!--Direccionamos a clase Editar -->



                                    <a href="Eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" class="table__item__link">
                                        <i class="fa fa-trash" aria-hidden="true">Eliminar</i>
                                    </a>
                                    <!--Direccionamos a clase Eliminar -->

                                </td>

                            </tr>


                        <?php } ?>





                    </tbody>


                </table>


            </div>

        </div>

    </div>


</div>
<!-- BOTENES DEL MODAL cerrrar -->
<div class="modal-futer">
    <button class="btn btn-info" type="button" data-dismiss="modal">
        Cerrar
    </button>

</div>
</div>
</div>

</html>