<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Ficha de Ingreso</title>
</head>

<body class="container text-center my-background">
    <form method="post" action="" enctype="multipart/form-data">

        <section>
            <nav id="nav"></nav>
        </section>

        <section class="Section-P1"> <!--Datos Generales-->
            <br>
            <h1 class="Title">Datos Generales</h1>
            <div class="div-data">
                <div class="container-fluid p-5 my-5 ">

                    <h4>Datos del Beneficiario</h4>

                    <div>

                        <p>Nombres</p>
                        <input type="text" name="nombres" id="">

                        <p>Apellidos</p>
                        <input type="text" name="apellidos" id="">

                        <p>Fecha de nacimiento</p>
                        <input type="date" name="fechaN" id="">

                        <p>Escolaridad</p>
                        <input type="text" name="escolaridad" id="">

                        <p>Fecha de Ingreso</p>
                        <input type="datetime-local" name="fechaI" id="">

                        <p>Dirección</p>
                        <input type="text" name="direccion" id="">

                        <p>Número de Hermanos</p>
                        <input type="number" name="numeroH" id="">

                        <p>Lugar que ocupa</p>
                        <input type="number" name="numeroOH" id="">

                        <h4>Datos del Encargado</h4>

                        <p>Nombre</p>
                        <input type="text" name="nombreE" id="">

                        <p>Edad</p>
                        <input type="number" name="edadE" id="">

                        <p>Escolaridad</p>
                        <input type="text" name="escolaridadE" id="">

                        <p>Ocupación</p>
                        <input type="text" name="ocupacionE" id="">

                        <p>Teléfono</p>
                        <input type="tel" name="telefonoE" id="">

                        <p>Motivo de Consulta/Quién Refiere</p>
                        <input type="text" name="motivo" id="">

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
                        <input type="checkbox" name="checkbox10" id="">Si
                        <input type="checkbox" name="checkbox10" id="">No

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
                        <input type="checkbox" name="checkbox14" id="">Si
                        <input type="checkbox" name="checkbox14" id="">No

                        <p>¿Tuvo algun tipo de infección?</p>
                        <input type="checkbox" name="checkbox15" id="">Si
                        <input type="checkbox" name="checkbox15" id="">No

                        <p>¿Tuvo fiebres?</p>
                        <input type="checkbox" name="checkbox16" id="">Si
                        <input type="checkbox" name="checkbox16" id="">No

                        <p>¿Tuvo convulciones?</p>
                        <input type="checkbox" name="checkbox17" id="">Si
                        <input type="checkbox" name="checkbox17" id="">No

                        <p>¿El paciente tiene lenguaje?</p>
                        <input type="checkbox" name="checkbox18" id="">Si
                        <input type="checkbox" name="checkbox18" id="">No

                        <p>¿El paciente camina?</p>
                        <input type="checkbox" name="checkbox19" id="">Si
                        <input type="checkbox" name="checkbox19" id="">No

                    </div>

                </div>
            </div>
        </section>

        <section class="Section-Files"> <!--Subir Archivo-->
            <div>
                <h1> Selecciona el archivo PDF:</h1>
                <div class="div-data">
                    <p for="fileToUpload">Selecciona el archivo PDF:</p>
                    <input class="btn btn-primary" type="file" id="fileToUpload" name="fileToUpload"><br><br>

                    <p for="descripcion">Descripción:</p>
                    <input type="text" id="descripcion" name="descripcion"><br><br>

                    <div>
                        <?php
                        include("controlador/controlador Subir archivos.php");
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <p for="codigoBeneficiario">Código del beneficiario:</p>
        <input type="text" id="codigoBeneficiario" name="codigoBeneficiario"><br><br>

        <input class="btn btn-primary" type="submit" value="Guardar Datos" name="submit">

        <div>
            <br><a class="btn btn-warning" href="inicio.php">Inicio</a>
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
        function updateNav() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("nav").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "getBeneficiario.php", true);
            xhttp.send();
        }

        setInterval(updateNav, 1000); // Actualiza el nav cada segundo
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>