<?php

  require 'conexion.php';


  $rut = $_POST['rut'];  
  $nombre = $_POST['nombre'];
  $contrasena = $_POST['contraseña'];
  $edad = $_POST['edad'];
  $curso = $_POST['curso'];
  $sexo = $_POST['sexo'];

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

  insertarEnAlumno($rut, $nombre, $contrasena, $curso, $sexo, $edad, $conn);
?>