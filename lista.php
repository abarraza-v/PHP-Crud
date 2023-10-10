<?php 

require 'conexion.php';


if (isset($_GET["rut"])) {
    mysqli_select_db($conn, 'avb');
    $rut = $_GET["rut"];
    $sql = "DELETE FROM alumnos WHERE rut = '". $rut . "'";
    mysqli_query($conn, $sql);
}



function mostrar($conn){
    mysqli_select_db($conn,'avb');
    $sql = "SELECT * FROM alumnos";
    $result = mysqli_query($conn, $sql);
    $cicloCompletado = false;

    
    if (mysqli_num_rows($result) > 0) {

        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>LiceoAVB</title>
        </head>
        <body>
            <h1>Alumnos</h1>
            <a href="index.php">Insertar nuevo dato</a><br><br>
            <script src="script.js"></script>
            <table style="text-align: center" border="1">
            <thead>
                <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Contraseña</th>
                <th>Curso</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Modificar/Eliminar</th>
                </tr>
            </thead>
            <tbody>
        ';

        while($row = mysqli_fetch_assoc($result)) {

        echo '
                <tr>
                    <td>'. $row["rut"] . '</td>
                    <td>'. $row["nombre"] . '</td>
                    <td>'. $row["contraseña"] . '</td>
                    <td>' . $row["curso"]. '</td>
                    <td>' . $row["sexo"] . '</td>
                    <td>'. $row["edad"]. '</td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="rut" value="'. $row["rut"]. '">
                            <input type="submit" value="Modificar">
                        </form>
                            <input type="button" onclick="enviarRut(`'.$row["rut"].'`)" value="Eliminar">
                    </td>
                </tr>';


        $cicloCompletado = true;
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
        <h1>Alumnos</h1>
        <p>No hay datos registrados.</p>
        <a href="index.php">Insertar nuevo dato</a><br><br>
    </body>
    </html>
    ';
    
    }

    if ($cicloCompletado) {
    echo "
            </tbody>
            </table>
            </body>
            </html>";
}
}

mostrar($conn);

?>