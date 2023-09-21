<?php
  require 'conexion.php';
  
  $rut = $_POST['rut']; 
  
  function mostrar($conn, $rut){
    mysqli_select_db($conn,'avb');
    $sql = "SELECT * FROM alumnos WHERE rut = '". $rut . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {

        echo '
          <!DOCTYPE html>
          <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>LiceoAVB</title>
          </head>
          <body>
            <form action="actualizar.php" method="post">
              <label for="rut">Rut: </label><br>
              <input type="text" id="inputRut" name="rut" value="'.$row["rut"].'"required readonly><br><br>
              <label for="nombre">Nombre: </label><br>
              <input type="text" id="inputNombre" name="nombre" value="'.$row["nombre"].'" required><br><br>
              <label for="contraseña">Contraseña: </label><br>
              <input type="password" id="inputContraseña" name="contraseña" value="'.$row["contraseña"].'" required><br><br>
              <label for="edad">Edad:</label><br>
              <input type="number" id="inputEdad"name="edad" value="'.$row["edad"].'"><br><br>
              <label for="curso">Curso:</label><br>
              <select name="curso" id="inputCursos" required>
                  <option value="Primero">1ero Medio</option>
                  <option value="Segundo">2do Medio</option>
                  <option value="Tercero">3ero Medio</option>
                  <option value="Cuarto">4to Medio</option>
              </select><br><br>
              <input type="radio" id="inputMasculino" name="sexo" value="Masculino" required>
              <label for="M">Masculino </label>
              <input type="radio" id="inputFemenino" name="sexo" value="Femenino" required>
              <label for="F"> Femenino </label><br><br>
              <input type="submit">
            </form>
            <a href="index.php"><br>Cancelar</a>
            
            <script>
              let curso =  "'.$row["curso"].'"
              let inputCursos = document.getElementById("inputCursos");
              for (let i = 0; i < inputCursos.options.length; i++) {
                if (inputCursos.options[i].value == curso) {
                  inputCursos.options[i].selected = true;
                  break;
                }
              }

              let sexo = "' . $row["sexo"] . '";
                let inputMasculino = document.getElementById("inputMasculino");
                let inputFemenino = document.getElementById("inputFemenino");
                if (sexo == "Masculino") {
                    inputMasculino.checked = true;
                } else if (sexo == "Femenino") {
                    inputFemenino.checked = true;
                }
            </script>
          </body>
          </html>';
      }
    } else {
      echo '
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LiceoAVB</title>
      </head>
      <body>
        <p>No hay ningún dato que modificar.</p>
      </body>
      </html>';
    }
  }
  
  mostrar($conn, $rut);
  ?>