<?php
require 'conexion.php';

$rut = $_POST['rut']; 
$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];
$curso = $_POST["curso"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];

function actualizarDatos ($rut,$nombre,$contraseña,$curso,$sexo,$edad,$conn) {

  mysqli_select_db($conn, 'avb');
  $sql = "UPDATE alumnos SET nombre = '$nombre', contraseña = '$contraseña', curso = '$curso', sexo = '$sexo', edad = '$edad' WHERE rut = '$rut'";
  mysqli_query($conn, $sql);
  header("location: lista.php");
}

actualizarDatos($rut,$nombre,$contraseña,$curso,$sexo,$edad,$conn);

?>