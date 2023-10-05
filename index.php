<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/08e96e1955.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/estilo.css">
  <title>LiceoAVB</title>
</head>

<body>
  <div class="flex-content">
    <nav class="nav">
      <a href="#" class="nav__link nav__link--resize">
        <h1 class="nav__title">Registro de alumnos</h1>
      </a>
      <a href="lista.php" class="nav__link nav__link--mod">
        <span class="material-symbols-outlined">patient_list</span>
        <p class="nav__text">Lista</p>
      </a>
    </nav>
    <main class="main">
      <div class="main__container-form">
        <div class="main__container-form__form--header">
          <h2>Ingrese un nuevo alumno</h2>
        </div>

        <form class="main__container-form__form" action="receptor.php" method="post">
          <div class="main__container-form__form--inputs">
            <div>
              <label class="main__container-form__label" for="rut">Rut: </label>
              <input class="main__container-form__input" type="text" name="rut" placeholder="Rut (Ej: 15899234-4)"
                required>
            </div>

            <div>
              <label class="main__container-form__label" for="nombre">Nombre: </label>
              <input class="main__container-form__input" type="text" name="nombre"
                placeholder="Ingrese el nombre del alumno" required>
            </div>

            <div>
              <label class="main__container-form__label" for="contraseña">Contraseña: </label>
              <input class="main__container-form__input" type="password" name="contraseña"
                placeholder="Ingrese la contraseña del alumno" required>
            </div>

            <div>
              <label class="main__container-form__label" for="edad">Edad:</label>
              <input class="main__container-form__input" type="number" name="edad"
                placeholder="Ingrese la edad del alumno" id="edad">
            </div>

            <div>
              <label class="main__container-form__label" for="curso">Curso:</label>
              <select name="curso" required>
                <option value="Primero">1ero Medio</option>
                <option value="Segundo">2do Medio</option>
                <option value="Tercero">3ero Medio</option>
                <option value="Cuarto">4to Medio</option>
              </select>
            </div>

            <div class="radio-group-container">
              <label for="jobtitle" class="formbold-form-label"> Cuál es tu sexo? </label>

              <div class="radio-group-container__option">
                <div class="formbold-radio-group">
                  <label class="formbold-radio-label">
                    <input class="formbold-input-radio" type="radio" name="sexo" id="M" value="Masculino">
                    Masculino
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>

                <div class="radio-group-container__option">
                  <label class="formbold-radio-label">
                    <input class="formbold-input-radio" type="radio" name="sexo" id="F" value="Femenino">
                    Femenino
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="submit-container">
                <input type="submit">
              </div>
        </form>
      </div>
    </main>
    <footer>
      <p class="footer__p">Web desarrollada por Alejandro B.</p>
    </footer>
  </div>
</body>

</html>