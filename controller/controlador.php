<?php

//Creamos una sesion para mensajes 
session_start();

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="#1q2w3e4r5t#";
$dbname="control_vehi";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('NO se ha podido conectar a la base de datos' . mysqli_connect_error());

//$con->close();

//if(isset($conn)){
 //   echo'se ha conectado exitosamente ';
//}
?>