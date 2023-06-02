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
} else {
    echo "0 results";
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

    <script>
        $(document).ready(function() {
            //Ocultar los textbox al inicio

            //Funcion para mostrar u ocultar los textbox segun el valor de los checkbox
            function mostrarTextbox() {
                //Obtener el valor de los checkbox
                var valor1 = $("input[name='checkbox6']:checked").val();
                var valor2 = $("input[name='checkbox7']:checked").val();
                var valor3 = $("input[name='checkbox8']:checked").val();
                var valor4 = $("input[name='checkbox9']:checked").val();
                var valor5 = $("input[name='checkbox11']:checked").val();
                var valor6 = $("input[name='checkbox12']:checked").val();
                var valor7 = $("input[name='checkbox13']:checked").val();
                //Mostrar u ocultar los textbox segun el valor de los checkbox
                if (valor1 == "si") {
                    $("#textbox6").show();
                } else {
                    $("#textbox6").hide();
                }
                if (valor2 == "no") {
                    $("#textbox7").show();
                } else {
                    $("#textbox7").hide();
                }
                if (valor3 == "no") {
                    $("#textbox8").show();
                } else {
                    $("#textbox8").hide();
                }
                if (valor4 == "si") {
                    $("#textbox9").show();
                } else {
                    $("#textbox9").hide();
                }
                if (valor5 == "no") {
                    $("#textbox11").show();
                } else {
                    $("#textbox11").hide();
                }
                if (valor6 == "si") {
                    $("#textbox12").show();
                } else {
                    $("#textbox12").hide();
                }
                if (valor7 == "si") {
                    $("#textbox13").show();
                } else {
                    $("#textbox13").hide();
                }
            }
            //Llamar a la funcion cuando se cambia el valor de los checkbox
            $("input[type='checkbox']").change(mostrarTextbox);
            //Funcion para enviar los datos al servidor usando ajax
            function enviarDatos() {
                //Obtener los datos de los textbox
                var dato1 = $("#textbox6").val();
                var dato2 = $("#textbox7").val();
                var dato3 = $("#textbox8").val();
                var dato4 = $("#textbox9").val();
                var dato5 = $("#textbox11").val();
                var dato6 = $("#textbox12").val();
                var dato7 = $("#textbox13").val();
                //Enviar los datos al servidor usando ajax
                $.ajax({
                    url: "guardar.php", //La url del archivo php que guarda los datos en la base de datos
                    type: "POST", //El metodo de envio
                    data: {
                        dato1: dato1,
                        dato2: dato2,
                        dato3: dato3,
                        dato4: dato4,
                        dato5: dato5,
                        dato6: dato6,
                        dato7: dato7
                    }, //Los datos a enviar
                    success: function(response) { //La funcion que se ejecuta cuando el servidor responde
                        alert(response); //Mostrar la respuesta del servidor
                    },
                    error: function(error) { //La funcion que se ejecuta cuando hay un error
                        alert(error); //Mostrar el error
                    }
                });
            }
            // Llamar a la funcion cuando se hace clic en el boton de enviar
            $("#enviar").click(enviarDatos);
        });
    </script>

    <style>
        .div-data {
            display: none;
        }

        .my-background {
            background-image: url(img/fondo.jpg);
            background-size: 100% auto;
        }

        .Title {
            background-color: yellow;
            border: 5px solid;
            border-color: yellow;
            border-radius: 15px;
        }

        .container-fluid {
            width: 800px;
            background-color: rgb(145, 221, 225);
            border-radius: 15px;
        }

        .dropdown-container {
            width: 300px;
            /* Ajusta el ancho según tus necesidades */
        }

        .dropdown-container select {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        .my-container {
            padding-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            font-size: 1.2rem;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="tel"] {
            font-size: 1.1rem;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="tel"]:focus {
            border-color: #4caf50;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }

        .btn-submit {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
        }

        .encargado-field {
            display: none;
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

        <section class="Section-P1"> <!--Datos Generales-->
            <br>
            <h1 class="Title">Datos Generales</h1>
            <div class="div-data">
                <div class="container-fluid p-5 my-5 ">

                    <h4>Datos del Beneficiario</h4>

                    <div class="my-container py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>
                                    <input type="text" class="form-control" name="nombres" id="nombres">
                                </div>

                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                                </div>

                                <div class="form-group">
                                    <label for="fechaN">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="fechaN" id="fechaN">
                                </div>

                                <div class="form-group">
                                    <label for="edad">Edad</label>
                                    <input type="text" class="form-control" name="edad" id="edad" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="mayorMenor">¿Es mayor o menor de edad?</label>
                                    <input type="text" class="form-control" name="mayorMenor" id="mayorMenor" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="escolaridad">Escolaridad</label>
                                    <input type="text" class="form-control" name="escolaridad" id="escolaridad">
                                </div>

                                <div class="form-group">
                                    <label for="fechaI">Fecha de Ingreso</label>
                                    <input type="date" class="form-control" name="fechaI" id="fechaI">
                                </div>

                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" name="direccion" id="direccion">
                                </div>

                                <div class="form-group">
                                    <label for="numeroH">Número de Hermanos</label>
                                    <input type="number" class="form-control" name="numeroH" id="numeroH" min="0" onchange="limitarLugarOcupa()">
                                </div>

                                <div class="form-group">
                                    <label for="numeroOH">Lugar que ocupa</label>
                                    <input type="number" class="form-control" name="numeroOH" id="numeroOH" min="0">
                                </div>

                                <div>
                                    <input type="checkbox" name="madre" id="madre"> Madre
                                    <input type="checkbox" name="padre" id="padre"> Padre
                                    <input type="checkbox" name="encargado" id="encargado"> Encargado
                                    <input type="checkbox" name="mismo" id="mismo"> El mismo

                                    <h4 id="encargado-heading">Datos del Encargado</h4>
                                    <br>

                                    <div class="form-group encargado-field" id="nombreE-container">
                                        <label for="nombreE">Nombre</label>
                                        <input type="text" class="form-control" name="nombreE" id="nombreE">
                                    </div>

                                    <div class="form-group encargado-field" id="edadE-container">
                                        <label for="edadE">Edad</label>
                                        <input type="text" class="form-control" name="edadE" id="edadE">
                                    </div>

                                    <div class="form-group encargado-field" id="escolaridadE-container">
                                        <label for="escolaridadE">Escolaridad</label>
                                        <input type="text" class="form-control" name="escolaridadE" id="escolaridadE">
                                    </div>

                                    <div class="form-group encargado-field" id="ocupacionE-container">
                                        <label for="ocupacionE">Ocupación</label>
                                        <input type="text" class="form-control" name="ocupacionE" id="ocupacionE">
                                    </div>

                                    <div class="form-group encargado-field" id="telefonoE-container">
                                        <label for="telefonoE">Teléfono</label>
                                        <input type="tel" class="form-control" name="telefonoE" id="telefonoE">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="motivo">Motivo de Consulta/Quién Refiere</label>
                                    <input type="text" class="form-control" name="motivo" id="motivo" value="Centro de Salud">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Section-P2"> <!--Historial Clinico-->
            <h1 class="Title"> Historial Clínico</h1>
            <div class="div-data">
                <div class="container-fluid p-5 my-5">

                    <div>

                        <p>Enfermedades que padece</p>
                        <input type="text" name="enfermedadesP" id="">

                        <p>Medicamentos que toma</p>
                        <input type="text" name="medicamentos" id="">

                        <p>¿Tiene esquema completo de vacunas?</p>
                        <input type="checkbox" name="checkbox1" id="">Si
                        <input type="checkbox" name="checkbox1" id="">No

                        <p>¿Le han realizado pruebas auditivas?</p>
                        <input type="checkbox" name="checkbox2" id="">Si
                        <input type="checkbox" name="checkbox2" id="">No

                        <p>¿Le han realizado pruebas oftalmológicas?</p>
                        <input type="checkbox" name="checkbox3" id="">Si
                        <input type="checkbox" name="checkbox3" id="">No

                        <p>¿Utiliza aparatos auditivos?</p>
                        <input type="checkbox" name="checkbox4" id="">Si
                        <input type="checkbox" name="checkbox4" id="">No

                        <p>¿Utiliza lentes?</p>
                        <input type="checkbox" name="checkbox5" id="">Si
                        <input type="checkbox" name="checkbox5" id="">No

                        <p>Otras</p>
                        <input type="text" name="otras" id="">

                        <p>¿Le han realizado cirugias?</p>
                        <input type="checkbox" name="checkbox6" id="" value="si">Si
                        <input type="checkbox" name="checkbox6" id="" value="no">No
                        <p>Defina</p>
                        <input type="text" name="definacirugias" id="textbox6">

                    </div>

                </div>
            </div>
        </section>

        <section class="Section-P3"> <!--Condiciones Embarazo-->
            <h1 class="Title">Condiciones del Embarazo</h1>
            <div class="div-data">
                <div class="container-fluid p-5 my-5">

                    <h4>Antecedentes Pre-natales</h4>

                    <div>

                        <p>¿Fue un embarazo de termino?</p>
                        <input type="checkbox" name="checkbox7" id="" value="si">Si
                        <input type="checkbox" name="checkbox7" id="" value="no">No
                        <p>Defina</p>
                        <input type="text" name="embarazotermino" id="textbox7">

                        <p>¿Fue un parto normal?</p>
                        <input type="checkbox" name="checkbox8" id="" value="si">Si
                        <input type="checkbox" name="checkbox8" id="" value="no">No
                        <p>Defina</p>
                        <input type="text" name="partonormal" id="textbox8">

                        <p>¿Tuvo complicaciones durante el embarazo?</p>
                        <input type="checkbox" name="checkbox9" id="" value="si">Si
                        <input type="checkbox" name="checkbox9" id="" value="no">No
                        <p>Defina</p>
                        <input type="text" name="complicacionesembarazo" id="textbox9">

                    </div>

                    <h4>Antecedentes Peri-natales</h4>

                    <div>

                        <p>¿El niño lloro inmediatamente?</p>
                        <input type="checkbox" name="checkbox10" id="" value="si">Si
                        <input type="checkbox" name="checkbox10" id="" value="no">No

                        <p>¿Su coloración fue normal?</p>
                        <input type="checkbox" name="checkbox11" id="" value="si">Si
                        <input type="checkbox" name="checkbox11" id="" value="no">No
                        <p>Defina</p>
                        <input type="text" name="coloracionN" id="textbox11">

                        <p>¿Estuvo en incubadora?</p>
                        <input type="checkbox" name="checkbox12" id="" value="si">Si
                        <input type="checkbox" name="checkbox12" id="" value="no">No
                        <p>Cuanto tiempo</p>
                        <input type="text" name="incubadora" id="textbox12">

                        <p>¿Nació amarillo o morado?</p>
                        <input type="checkbox" name="checkbox13" id="" value="si">Si
                        <input type="checkbox" name="checkbox13" id="" value="no">No
                        <p>Defina</p>
                        <input type="text" name="nacio_AM" id="textbox13">

                    </div>

                    <h4>Antecedentes Post-natales </h4>

                    <div>

                        <p>¿Tuvo tratamiento después del parto?</p>
                        <input type="checkbox" name="checkbox14" id="" value="si">Si
                        <input type="checkbox" name="checkbox14" id="" value="no">No

                        <p>¿Tuvo algun tipo de infección?</p>
                        <input type="checkbox" name="checkbox15" id="" value="si">Si
                        <input type="checkbox" name="checkbox15" id="" value="no">No

                        <p>¿Tuvo fiebres?</p>
                        <input type="checkbox" name="checkbox16" id="" value="si">Si
                        <input type="checkbox" name="checkbox16" id="" value="no">No

                        <p>¿Tuvo convulciones?</p>
                        <input type="checkbox" name="checkbox17" id="" value="si">Si
                        <input type="checkbox" name="checkbox17" id="" value="no">No

                        <p>¿El paciente tiene lenguaje?</p>
                        <input type="checkbox" name="checkbox18" id="" value="si">Si
                        <input type="checkbox" name="checkbox18" id="" value="no">No

                        <p>¿El paciente camina?</p>
                        <input type="checkbox" name="checkbox19" id="" value="si">Si
                        <input type="checkbox" name="checkbox19" id="" value="no">No

                    </div>

                </div>
            </div>
        </section>

        <section class="Section-Files"> <!--Subir Archivo-->
            <div>
                <h1> Selecciona el archivo PDF</h1>
                <div class="div-data">
                    <p for="fileToUpload">Selecciona el archivo PDF:</p>
                    <input class="btn btn-primary" type="file" id="fileToUpload" name="fileToUpload"><br><br>

                    <p for="descripcion">Descripción:</p>
                    <input type="text" id="descripcion" name="descripcion"><br><br>


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
        $(document).ready(function() {
            $("h1").click(function() {
                $(this).nextAll("div.div-data:first").slideToggle();
            });
        });
    </script>

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
        function limitarLugarOcupa() {
            var numeroHermanos = parseInt(document.getElementById('numeroH').value);
            var lugarOcupa = document.getElementById('numeroOH');

            if (numeroHermanos < parseInt(lugarOcupa.value)) {
                lugarOcupa.value = "";
            }

            lugarOcupa.max = numeroHermanos;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>