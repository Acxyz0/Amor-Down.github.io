<?php
include "controlador/controlador_login.php";
?>

<?php
// Verificar si el usuario tiene una sesión activa
if (!isset($_SESSION["id"])) {
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Ficha de Ingreso</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
    body {
      background-color: #f7f7f7;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      width: 80px;
      height: 100vh;
      background-color: #8A2BE2;
      padding: 20px;
      box-sizing: border-box;
      transition: width 0.3s ease-in-out;
      overflow: hidden;
    }

    .sidebar:hover {
      width: 200px;
    }

    .menu {
      margin-bottom: 20px;
    }

    .menu ul {
      list-style: none;
      padding: 0;
    }

    .menu li {
      margin-bottom: 10px;
    }

    .menu li a {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      padding: 8px;
      transition: background-color 0.3s ease-in-out;
    }

    .menu li a:hover {
      background-color: rgba(255, 255, 255, 0.3);
    }

    .menu li a i {
      margin-right: 10px;
      font-size: 26px;
    }

    .menu li a span {
      display: none;
      font-weight: bold;
      margin-left: 10px;
    }

    .sidebar:hover .menu li a span {
      display: inline;
    }

    .menu .submenu {
      display: none;
      margin-left: 20px;
    }

    .menu .submenu li {
      margin-bottom: 5px;
    }

    .menu li.active .submenu {
      display: block;
    }

    /* Estilos de la navbar */
    .navbar {
      background-color: #8a2be2;
      /* Color morado */
      padding: 10px 20px;
      /* Aumentar el padding para hacerla más ancha */
    }

    .navbar-brand {
      font-weight: bold;
      color: white !important;
      /* Texto blanco */
      font-size: 20px;
      /* Aumentar el tamaño de la letra */
    }

    .navbar-text {
      margin-right: 10px;
      color: white !important;
      /* Texto blanco */
      font-size: 18px;
      /* Aumentar el tamaño de la letra */
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      font-size: 20px;
    }

    .formulario {
      display: none;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .btn-primary,
    .btn-primary:hover,
    .btn-primary:focus {
      background-color: #007bff;
      border-color: #007bff;
      font-size: 20px;
    }

    .btn-warning,
    .btn-warning:hover,
    .btn-warning:focus {
      background-color: #ffc107;
      border-color: #ffc107;
      font-size: 20px;
    }

    /* Estilo para los divs */
    .my-container {
      background-color: #FFFFFF;
      border-radius: 10px;
      padding: 20px;
    }

    .table {
      font-size: 20px;
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
    }

    .table td,
    .table th {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
      border-top: 2px solid #dee2e6;
    }

    .table-sm td,
    .table-sm th {
      padding: 0.3rem;
    }

    .table-bordered {
      border: 1px solid #dee2e6;
    }

    .table-bordered td,
    .table-bordered th {
      border: 1px solid #dee2e6;
    }

    .table-bordered thead td,
    .table-bordered thead th {
      border-bottom-width: 2px;
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 255, 0.1);
    }

    .form-control {
      font-size: 20px;
    }

    .form-check-inline .form-check-input {
      position: static;
      margin-top: 0;
      margin-right: 0.3125rem;
      margin-left: 0;
    }

    .form-check-inline .form-check-label {
      display: inline-block;
      margin-bottom: 0;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-inline .form-check {
      width: 100%;
    }

    .form-inline .form-check-label {
      width: 100%;
    }

    /* Estilos de los botones */
    .form-buttons {
      text-align: center;
      margin-top: 20px;
    }

    .form-buttons button {
      padding: 10px 20px;
      font-size: 16px;
      margin: 0 10px;
    }

    .titulo {
      font-size: 40px;
    }

    .subtitulo {
      font-size: 30px;
    }
  </style>

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <span class="navbar-text"><?php echo $_SESSION["nombres"] . " " . $_SESSION["apellidos"]; ?></span>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container mt-5">
    <div class="row">
      <div class="col-12 mb-3">
        <button class="btn btn-primary mr-2" onclick="mostrarDiv('div1')">Div 1</button>
        <button class="btn btn-warning mr-2" onclick="mostrarDiv('div2')">Div 2</button>
        <button class="btn btn-primary mr-2" onclick="mostrarDiv('div3')">Div 3</button>
        <button class="btn btn-warning" onclick="mostrarDiv('div4')">Div 4</button>
      </div>
      <div class="col-12">

        <div id="div1" class="formulario">

          <h1 class="titulo text-center">Datos Generales</h1>

          <h4 class="subtitulo">Datos del Beneficiario</h4>
          <div class="container py-4">
            <div class="row justify-content-center">
              <div class="col">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control" placeholder="Primer Nombre" name="nombres" id="nombres"></td>
                      <td><input type="text" class="form-control" placeholder="Segundo Nombre" name="nombres2" id="nombres2"></td>
                      <td><input type="text" class="form-control" placeholder="Tercer Nombre" name="nombres3" id="nombres3"></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" placeholder="Primer Apellido" name="apellidos" id="apellidos"></td>
                      <td><input type="text" class="form-control" placeholder="Segundo Apellido" name="apellidos2" id="apellidos2"></td>
                    </tr>
                    <tr>
                      <td><input type="date" class="form-control" placeholder="Fecha de nacimiento" name="fechaN" id="fechaN"></td>
                      <td><input type="text" class="form-control" placeholder="Edad" name="edad" id="edad" readonly></td>
                      <td><input type="text" class="form-control" placeholder="¿Es mayor o menor de edad?" name="mayorMenor" id="mayorMenor" readonly></td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <select class="form-control" placeholder="Escolaridad" name="escolaridad" id="escolaridad">
                          <option value=""></option>
                          <option value="No aplica">No aplica</option>
                          <option value="Pre-Primaria">Pre-Primaria</option>
                          <option value="Primaria">Primaria</option>
                          <option value="Básico">Básico</option>
                          <option value="Diversificado">Diversificado</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="date" class="form-control" placeholder="Fecha de Ingreso" name="fechaI" id="fechaI"></td>
                      <td colspan="2"><input type="text" class="form-control" placeholder="Dirección" name="direccion" id="direccion"></td>
                    </tr>
                    <tr>
                      <td><input type="number" class="form-control" placeholder="Número de Hermanos" name="numeroH" id="numeroH" min="0" onchange="limitarLugarOcupa()"></td>
                      <td><input type="number" class="form-control" placeholder="Lugar que ocupa" name="numeroOH" id="numeroOH" min="0"></td>
                    </tr>
                  </tbody>
                </table>
                <h4 id="encargado-heading">Datos del Encargado</h4>
                <br>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tipoencargado[]" id="madre" value="">
                    <label class="form-check-label" for="madre">Madre</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tipoencargado[]" id="padre" value="padre">
                    <label class="form-check-label" for="padre">Padre</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tipoencargado[]" id="encargado" value="encargado">
                    <label class="form-check-label" for="encargado">Encargado</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tipoencargado[]" id="mismo" value="mismo">
                    <label class="form-check-label" for="mismo">El mismo</label>
                  </div>
                  <br>
                  <br>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><input type="text" class="form-control" placeholder="Nombre" name="nombreE" id="nombreE"></td>
                        <td><input type="text" class="form-control" placeholder="Apellidos" name="apellidosE" id="apellidosE"></td>
                        <td><input type="text" class="form-control" placeholder="Edad" name="edadE" id="edadE"></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <select class="form-control" placeholder="Escolaridad" name="escolaridadE" id="escolaridadE">
                            <option value=""></option>
                            <option value="No aplica">No aplica</option>
                            <option value="Pre-Primaria">Pre-Primaria</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Básico">Básico</option>
                            <option value="Diversificado">Diversificado</option>
                            <option value="Universitario">Universitario</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="text" class="form-control" placeholder="Ocupación" name="ocupacionE" id="ocupacionE"></td>
                        <td colspan="2"><input type="tel" class="form-control" placeholder="Teléfono" name="telefonoE" id="telefonoE"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Motivo de Consulta/Quién Refiere" name="motivo" id="motivo" value="Centro de Salud">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="div2" class="formulario">
          <h1 class="titulo text-center">Historial Clínico</h1>
          <div class="py-4">
            <div class="row justify-content-center">
              <div class="col">
                <table class="table">
                  <tr>
                    <td>
                      <input type="text" class="form-control form-control-lg" placeholder="Enfermedades que padece" name="enfermedadesP" id="enfermedadesP">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" class="form-control form-control-lg" placeholder="Medicamentos que toma" name="medicamentos" id="medicamentos">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>¿Tiene esquema completo de vacunas?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox1" id="checkbox1-si" value="si">
                        <label class="form-check-label" for="checkbox1-si">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox1" id="checkbox1-no" value="no">
                        <label class="form-check-label" for="checkbox1-no">No</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>¿Le han realizado pruebas auditivas?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox2" id="checkbox2-si" value="si">
                        <label class="form-check-label" for="checkbox2-si">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox2" id="checkbox2-no" value="no">
                        <label class="form-check-label" for="checkbox2-no">No</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>¿Le han realizado pruebas oftalmológicas?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox3" id="checkbox3-si" value="si">
                        <label class="form-check-label" for="checkbox3-si">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox3" id="checkbox3-no" value="no">
                        <label class="form-check-label" for="checkbox3-no">No</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>¿Utiliza aparatos ortopédicos o prótesis?</label><br />
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox4" id="checkbox4-si" value="si">
                        <label class="form-check-label" for="checkbox4-si">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox4" id="checkbox4-no" value="no">
                        <label class="form-check-label" for="checkbox4-no">No</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <textarea class="form-control form-control-lg" placeholder="Observaciones" name="observaciones" id="observaciones"></textarea>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div id="div3" class="formulario">
          <h1 class="titulo text-center">Condiciones del Embarazo</h1>
          <div class="py-4">
            <div class="row justify-content-center">
              <div class="col">
                <h4>Antecedentes Pre-natales</h4>

                <div>
                  <p>¿Fue un embarazo a término?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox7" id="checkbox7-si" value="si">
                    <label class="form-check-label" for="checkbox7-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox7" id="checkbox7-no" value="no">
                    <label class="form-check-label" for="checkbox7-no">No</label>
                  </div>
                  <input type="text" name="embarazotermino" id="textbox7" placeholder="Defina">

                  <p>¿Fue un parto normal?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox8" id="checkbox8-si" value="si">
                    <label class="form-check-label" for="checkbox8-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox8" id="checkbox8-no" value="no">
                    <label class="form-check-label" for="checkbox8-no">No</label>
                  </div>
                  <input type="text" name="partonormal" id="textbox8" placeholder="Defina">

                  <p>¿Tuvo complicaciones durante el embarazo?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox9" id="checkbox9-si" value="si">
                    <label class="form-check-label" for="checkbox9-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox9" id="checkbox9-no" value="no">
                    <label class="form-check-label" for="checkbox9-no">No</label>
                  </div>
                  <input type="text" name="complicacionesembarazo" id="textbox9" placeholder="Defina">
                </div>

                <h4>Antecedentes Peri-natales</h4>

                <div>
                  <p>¿El niño lloró inmediatamente?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox10" id="checkbox10-si" value="si">
                    <label class="form-check-label" for="checkbox10-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox10" id="checkbox10-no" value="no">
                    <label class="form-check-label" for="checkbox10-no">No</label>
                  </div>

                  <p>¿Su coloración fue normal?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox11" id="checkbox11-si" value="si">
                    <label class="form-check-label" for="checkbox11-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox11" id="checkbox11-no" value="no">
                    <label class="form-check-label" for="checkbox11-no">No</label>
                  </div>
                  <input type="text" name="coloracionN" id="textbox11" placeholder="Defina">

                  <p>¿Estuvo en incubadora?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox12" id="checkbox12-si" value="si">
                    <label class="form-check-label" for="checkbox12-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox12" id="checkbox12-no" value="no">
                    <label class="form-check-label" for="checkbox12-no">No</label>
                  </div>
                  <input type="text" name="incubadora" id="textbox12" placeholder="Cuanto tiempo">

                  <p>¿Nació amarillo o morado?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox13" id="checkbox13-si" value="si">
                    <label class="form-check-label" for="checkbox13-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox13" id="checkbox13-no" value="no">
                    <label class="form-check-label" for="checkbox13-no">No</label>
                  </div>
                  <input type="text" name="nacio_AM" id="textbox13" placeholder="Defina">
                </div>

                <h4>Antecedentes Post-natales</h4>

                <div>
                  <p>¿Tuvo tratamiento después del parto?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox14" id="checkbox14-si" value="si">
                    <label class="form-check-label" for="checkbox14-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox14" id="checkbox14-no" value="no">
                    <label class="form-check-label" for="checkbox14-no">No</label>
                  </div>

                  <p>¿Tuvo algún tipo de infección?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox15" id="checkbox15-si" value="si">
                    <label class="form-check-label" for="checkbox15-si">Si</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="checkbox15" id="checkbox15-no" value="no">
                    <label class="form-check-label" for="checkbox15-no">No</label>
                  </div>
                  <input type="text" name="infeccion_postparto" id="textbox15" placeholder="Defina">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="div4" class="formulario">
          <h1 class="titulo text-center">Guardar Archivo PDF</h1>
          <div class="py-4">
            <div class="row justify-content-center">
              <label for="fileToUpload" class="form-label">Selecciona el archivo PDF:</label>
              <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
              <hr>
              <input class="form-control" type="text" id="descripcion" name="descripcion" placeholder="Descripción">
            </div>
          </div>
        </div>
        <hr>

        <?php
        include("IngresarDatosFI/datosbeneficiario.php");
        include("IngresarDatosFI/datosencargado.php");
        include("IngresarDatosFI/datoshistorialclinico.php");
        include("IngresarDatosFI/datosperinatales.php");
        include("IngresarDatosFI/datospostnatales.php");
        include("IngresarDatosFI/datosprenatales.php");
        include("IngresarDatosFI/datosreferencia.php");
        include("controlador/controlador Subir archivos.php");
        include("aumentarcBeneficiario.php");
        ?>

      </div>
      <div class="col-12 mt-3">
        <hr>
        <input type="text" id="codigoBeneficiario" class="form-control mb-3" placeholder="Código de beneficiario" name="codigoBeneficiario" value="<?php echo $nuevoCodigo; ?>"><br><br>
        <button class="btn btn-primary float-right" onclick="guardar()">Guardar Datos</button>
      </div>
    </div>
  </div>

          <!-- Div para la Sidebar -->
          <div class="sidebar">
            <div class="menu">
                <ul>
                    <li><a href="inicio.php"><i class="bi bi-house-fill"></i><span>Inicio</span></a></li>
                    <li><a href="#"><i class="fas fa-users"></i><span>Beneficiario</span></a>
                        <ul class="submenu">
                            <li><a href="Ficha de Ingreso.php"><span>Ficha de Ingreso</span></a></li>
                            <li><a href="Verbeneficiarios.php"><span>Ver beneficiario</span></a></li>
                            <li><a href="archivos.php"><span>Ver documentos PDF</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-book"></i><span>Sesiones</span></a>
                        <ul class="submenu">
                            <li><a href="Sesiones.php"><span>Asignar sesiones</span></a></li>
                            <li><a href="versesiones.php"><span>Sesiones Asignadas</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-chart-bar"></i><span>Reportes</span></a>
                        <ul class="submenu">
                            <li><a href="ReporteF9.php"><span>Reporte R9</span></a></li>
                            <li><a href="ReporteF8.php"><span>Reporte R8</span></a></li>
                            <li><a href="ReporteCuantitativo.php"><span>Reporte Cuantitativo</span></a></li>
                            <li><a href="ReporteCualitativo.php"><span>Reporte Cualitativo</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-users-cog"></i><span>Usuarios</span></a>
                        <ul class="submenu">
                            <li><a href="CRUD/IngresarUsuario.php"><span>Administrar Usuario</span></a></li>
                            <li><a href="CRUD/IngresarRol.php"><span>Administrar Rol</span></a></li>
                        </ul>
                    </li>
                    <li><a href="controlador_cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></a></li>
                </ul>
            </div>
        </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script>
    // Mostrar el primer div al cargar la página
    window.addEventListener('DOMContentLoaded', function() {
      mostrarDiv('div1');
    });

    function mostrarDiv(divId) {
      // Oculta todos los divs
      var divs = document.getElementsByClassName('formulario');
      for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = 'none';
      }

      // Muestra el div seleccionado
      var div = document.getElementById(divId);
      div.style.display = 'block';
    }
  </script>

  <script>
    // Script para determinar el numero de hermanos
    function limitarLugarOcupa() {
      var numeroHermanos = parseInt(document.getElementById('numeroH').value);
      var lugarOcupa = document.getElementById('numeroOH');

      if (numeroHermanos < parseInt(lugarOcupa.value)) {
        lugarOcupa.value = "";
      }

      lugarOcupa.max = numeroHermanos;
    }
  </script>

  <script>
    // Calcular edad basada en la fecha de nacimiento
    document.getElementById('fechaN').addEventListener('input', function() {
      var fechaNacimiento = new Date(this.value);
      var hoy = new Date();

      if (fechaNacimiento > hoy) {
        document.getElementById('edad').value = "";
        document.getElementById('mayorMenor').value = "";
        return;
      }

      var edadAnios = hoy.getFullYear() - fechaNacimiento.getFullYear();
      var edadMeses = hoy.getMonth() - fechaNacimiento.getMonth();
      var edadDias = hoy.getDate() - fechaNacimiento.getDate();

      if (edadMeses < 0 || (edadMeses === 0 && edadDias < 0)) {
        edadAnios--;
        edadMeses += 12;
      }

      if (edadDias < 0) {
        var ultimoDiaMesAnterior = new Date(hoy.getFullYear(), hoy.getMonth(), 0).getDate();
        edadDias = ultimoDiaMesAnterior - fechaNacimiento.getDate() + hoy.getDate();
        edadMeses--;
      }

      var edadTexto = "";

      if (edadAnios > 0) {
        edadTexto += edadAnios + (edadAnios === 1 ? " año" : " años");
      }

      if (edadMeses > 0) {
        edadTexto += (edadTexto !== "" ? ", " : "") + edadMeses + (edadMeses === 1 ? " mes" : " meses");
      }

      if (edadDias > 0) {
        edadTexto += (edadTexto !== "" ? ", " : "") + edadDias + (edadDias === 1 ? " día" : " días");
      }

      document.getElementById('edad').value = edadTexto || "";

      if (edadAnios >= 18) {
        document.getElementById('mayorMenor').value = 'Mayor de edad';
      } else {
        document.getElementById('mayorMenor').value = 'Menor de edad';
      }
    });
  </script>

  <script>
    const checkboxes = document.querySelectorAll('input[name="tipoencargado[]"]');
    const mismoCheckbox = document.getElementById('mismo');
    const encargadoFields = document.getElementsByClassName('encargado-field');
    const escolaridadSelect = document.getElementById('escolaridadE');
    const escolaridadInput = document.getElementById('escolaridadE');

    // Obtener los campos del beneficiario en la sección "Datos del Beneficiario"
    const nombresBeneficiario = document.getElementById('nombres');
    const apellidosBeneficiario = document.getElementById('apellidos');
    const edadBeneficiario = document.getElementById('edad');
    const escolaridadBeneficiario = document.getElementById('escolaridad');

    // Función para limpiar los campos del formulario del encargado
    function limpiarCamposEncargado() {
      nombreEncargado.value = '';
      apellidosEncargado.value = '';
      edadEncargado.value = '';
      escolaridadInput.value = '';
      ocupacionEncargado.value = '';
      telefonoEncargado.value = '';
    }

    // Función para deseleccionar automáticamente los checkboxes
    function deseleccionarCheckboxes(checkbox) {
      checkboxes.forEach((c) => {
        if (c !== checkbox) {
          c.checked = false;
        }
      });
      if (checkbox !== mismoCheckbox) {
        mismoCheckbox.checked = false;
        limpiarCamposEncargado();
      }
    }


    // Función para actualizar los campos del encargado en la sección "Datos del Encargado"
    function actualizarCamposEncargado() {
      if (mismoCheckbox.checked) {
        document.getElementById('nombreE').value = nombresBeneficiario.value;
        document.getElementById('apellidosE').value = apellidosBeneficiario.value;
        document.getElementById('edadE').value = edadBeneficiario.value;

        const escolaridadBeneficiarioValue = escolaridadBeneficiario.value;
        if (escolaridadBeneficiarioValue === '1') {
          escolaridadInput.value = 'No aplica';
        } else if (escolaridadBeneficiarioValue === '2') {
          escolaridadInput.value = 'Pre-Primaria';
        } else if (escolaridadBeneficiarioValue === '3') {
          escolaridadInput.value = 'Primaria';
        } else if (escolaridadBeneficiarioValue === '4') {
          escolaridadInput.value = 'Básico';
        } else if (escolaridadBeneficiarioValue === '5') {
          escolaridadInput.value = 'Diversificado';
        } else {
          escolaridadInput.value = '';
        }
      }
    }

    // Agregar eventos de escucha a los checkboxes
    checkboxes.forEach((checkbox) => {
      checkbox.addEventListener('change', () => {
        deseleccionarCheckboxes(checkbox);
        actualizarCamposEncargado();
      });
    });

    // Agregar evento de escucha al checkbox "El mismo"
    mismoCheckbox.addEventListener('change', function() {
      for (let i = 0; i < encargadoFields.length; i++) {
        encargadoFields[i].style.display = this.checked ? 'block' : 'none';
      }

      if (this.checked) {
        actualizarCamposEncargado();
      } else {
        deseleccionarCheckboxes(null);
      }
    });

    // Agregar evento de escucha a los campos del beneficiario en la sección "Datos del Beneficiario"
    nombresBeneficiario.addEventListener('input', actualizarCamposEncargado);
    apellidosBeneficiario.addEventListener('input', actualizarCamposEncargado);
    edadBeneficiario.addEventListener('input', actualizarCamposEncargado);
    escolaridadBeneficiario.addEventListener('change', actualizarCamposEncargado);
  </script>

  <!-- Script para la Sidebar -->
  <script>
    const menuItems = document.querySelectorAll('.menu li');

    menuItems.forEach(item => {
      item.addEventListener('click', function() {
        if (this.classList.contains('active')) {
          this.classList.remove('active');
        } else {
          menuItems.forEach(item => {
            item.classList.remove('active');
          });
          this.classList.add('active');
        }
      });
    });
  </script>
</body>

</html>