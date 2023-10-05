<?php

  require 'conexion.php';


  $rut = $_POST['rut'];  
  $nombre = $_POST['nombre'];
  $contrasena = $_POST['contraseña'];
  $edad = $_POST['edad'];
  $curso = $_POST['curso'];
  $sexo = $_POST['sexo'];
  $indicador = $_POST['indicador'];



  function insertarEnAlumno($rut, $nombre, $contrasena, $curso, $sexo, $edad, $conn) {

    mysqli_select_db($conn,'avb');
    $sql = "INSERT INTO alumnos (rut, nombre, contraseña, curso, sexo, edad) 
    VALUES ('$rut', '$nombre', '$contrasena', '$curso', '$sexo', $edad)";  
    if (mysqli_query($conn, $sql)) {
      echo " Inserción exitosa";
    } else {
      echo "Error :" . $sql . "<br> " . mysqli_error($conn);
    }
    header("location: lista.php");
  }

  function actualizarDatos ($rut,$nombre,$contraseña,$curso,$sexo,$edad,$conn) {

    mysqli_select_db($conn, 'avb');
    $sql = "UPDATE alumnos SET nombre = '$nombre', contraseña = '$contraseña', curso = '$curso', sexo = '$sexo', edad = '$edad' WHERE rut = '$rut'";
    mysqli_query($conn, $sql);
    header("location: lista.php");
  }

  if (isset($_POST['indicador'])) { 
    if ($_POST['indicador'] == "insertar") {
      insertarEnAlumno($rut, $nombre, $contrasena, $curso, $sexo, $edad, $conn);
    } else if ($_POST['indicador'] == "actualizar") {
      actualizarDatos($rut,$nombre,$contraseña,$curso,$sexo,$edad,$conn);
    }
  } else {
      echo 'Porfavor, ve a ingresar datos a <a href="index.php"></a>.';
  }
  
?>