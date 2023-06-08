<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amordown";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT codigobeneficiario FROM beneficiario ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $codigo = $row["codigobeneficiario"];
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        // Script para ocultar el campo de los datos del encargado
        document.addEventListener("DOMContentLoaded", function() {
            var madreCheckbox = document.getElementById("madre");
            var padreCheckbox = document.getElementById("padre");
            var encargadoCheckbox = document.getElementById("encargado");
            var mismoCheckbox = document.getElementById("mismo");
            var encargadoFields = document.getElementsByClassName("encargado-field");

            toggleEncargadoFields(); // Ocultar los campos al cargar la página

            madreCheckbox.addEventListener("change", toggleEncargadoFields);
            padreCheckbox.addEventListener("change", toggleEncargadoFields);
            encargadoCheckbox.addEventListener("change", toggleEncargadoFields);
            mismoCheckbox.addEventListener("change", toggleEncargadoFields);

            function toggleEncargadoFields() {
                var isCheckedMadre = madreCheckbox.checked;
                var isCheckedPadre = padreCheckbox.checked;
                var isCheckedEncargado = encargadoCheckbox.checked;
                var isCheckedMismo = mismoCheckbox.checked;

                if (isCheckedMadre || isCheckedPadre || isCheckedEncargado || isCheckedMismo) {
                    for (var i = 0; i < encargadoFields.length; i++) {
                        encargadoFields[i].style.display = "block";
                    }
                } else {
                    for (var i = 0; i < encargadoFields.length; i++) {
                        encargadoFields[i].style.display = "none";
                    }
                }
            }
        });
    </script>

    <style>
        /* Estilos personalizados para el formulario */
        .Section-P1 .Title {
            font-size: 28px;
            color: #FFD700;
            text-align: center;
            background-color: #0000FF;
            padding: 10px;
        }

        .div-data {
            background-color: #87CEEB;
            padding: 20px;
            border-radius: 10px;
        }

        .my-container {
            background-color: #FFFFFF;
            border-radius: 10px;
            padding: 20px;
        }

        .table {
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

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .input-group-text {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .input-group-text input[type="checkbox"],
        .input-group-text input[type="radio"] {
            margin-top: 0;
            margin-right: 0.3125rem;
            margin-left: 0;
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

        /* Estilos del segundo formulario */
        .Section-P2 {
            background-color: #f2f2f2;
            padding: 30px;
        }

        .Section-P2 .Title {
            color: #333;
        }

        .Section-P2 .div-data {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .Section-P2 .div-data table {
            width: 100%;
        }

        .Section-P2 .div-data input[type="text"],
        .Section-P2 .div-data textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .Section-P2 .div-data .form-check-label {
            margin-right: 10px;
        }
    </style>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Ficha de Ingreso</title>
</head>

<body class="container text-center my-background">
    <form method="post" action="" enctype="multipart/form-data">
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Cod. Beneficiario: <span id="codigo"><?php echo $codigo; ?></span></a>
                    </div>
                </div>
            </nav>
        </header>

        <section class="Section-P1">
            <!--Datos Generales-->
            <br>
            <h1 class="Title">Datos Generales</h1>
            <div class="div-data">
                <div class="container-fluid p-5 my-5">
                    <h4>Datos del Beneficiario</h4>
                    <div class="my-container py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
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
            </div>
        </section>

        <div class="form-buttons">
            <button onclick="showForm(1)">1</button>
            <button onclick="showForm(2)">2</button>
            <button onclick="showForm(3)">3</button>
        </div>

        <script>
            function showForm(formNumber) {
                // Ocultar todos los formularios
                var formContainers = document.getElementsByClassName("form-container");
                for (var i = 0; i < formContainers.length; i++) {
                    formContainers[i].classList.remove("active-form");
                }

                // Mostrar el formulario seleccionado
                var selectedForm = document.getElementById("form" + formNumber);
                selectedForm.classList.add("active-form");
            }
        </script>
        
        <section class="Section-P2">
            <!-- Historial Clínico -->
            <h1 class="Title">Historial Clínico</h1>
            <div class="div-data">
                <div class="container-fluid p-5 my-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
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
        </section>
        
        <section class="Section-P3">
            <h1 class="Title">Condiciones del Embarazo</h1>
            <div class="div-data">
                <div class="container-fluid p-5 my-5">

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
        </section>

        <section class="Section-Files"> <!--Subir Archivo-->
            <div>
                <h1> Selecciona el archivo PDF</h1>
                <div class="div-data col-md-6 mx-auto text-center">
                    <label for="fileToUpload" class="form-label">Selecciona el archivo PDF:</label>
                    <input class="form-control" type="file" id="fileToUpload" name="fileToUpload"><br>
                    <input class="form-control" type="text" id="descripcion" name="descripcion" placeholder="Descripción">
                </div>

            </div>
        </section>

        <div>
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

        <input class="btn btn-primary" type="submit" value="Guardar Datos" name="submit">

        <div>
            <br><a class="btn btn-success" href="inicio.php">Inicio</a>
        </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        setInterval(function() {
            $.get('get_codigo.php', function(data) {
                $('#codigo').text(data);
            });
        }, 500); // Actualiza el código cada medio segundo
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

    <script>
        const checkboxes1 = document.querySelectorAll('input[name="checkbox1"]');
        checkboxes1.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    checkboxes1.forEach(otherCheckbox => {
                        if (otherCheckbox !== checkbox) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });

        const checkboxes2 = document.querySelectorAll('input[name="checkbox2"]');
        checkboxes2.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    checkboxes2.forEach(otherCheckbox => {
                        if (otherCheckbox !== checkbox) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>