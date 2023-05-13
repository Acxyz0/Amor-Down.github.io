<?php
// Conexión a la base de datos
$mysqli = new mysqli('localhost', 'root', '', 'amordown');

// Verificar si la conexión fue exitosa
if ($mysqli->connect_error) {
    die('Error de conexión: ' . $mysqli->connect_error);
}

//Datos a insertar en la tabla beneficiario
$codigobeneficiario = $_POST['codigoBeneficiario'];
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$fechanacimiento = $_POST['fechaN'];
$escolaridad = $_POST['escolaridad'];
$fechaingreso = $_POST['fechaI'];
$direccion = $_POST['direccion'];
$numerohermanos = $_POST['numeroH'];
$numeroocupa = $_POST['numeroOH'];

//Datos a insertar en la tabla datosencargado
$codigobeneficiario = $_POST['codigoBeneficiario'];
$nombreencargado = $_POST['nombresE'];
$edadencargado = $_POST['edadE'];
$escolaridadencargado = $_POST['escolaridadE'];
$ocupacionencargado = $_POST['ocupacionE'];
$telefonoencargado = $_POST['telefonoE'];

//Datos a insertar en la tabla referencia
$codigobeneficiario = $_POST['codigoBeneficiario'];
$consulta = $_POST['motivo'];

//Datos a insertar en la tabla historialclinico
$codigobeneficiario = $_POST['codigoBeneficiario'];
$enfermedadpadece = $_POST['enfermedadesP'];
$medicamentos = $_POST['medicamentos'];
$esquemavacunas = isset($_POST['checkbox1']) ? $_POST['checkbox1'] : '';
$pruebasauditivas = isset($_POST['checkbox2']) ? $_POST['checkbox2'] : '';
$pruebasvista = isset($_POST['checkbox3']) ? $_POST['checkbox3'] : '';
$utilizaaudifonos = isset($_POST['checkbox4']) ? $_POST['checkbox4'] : '';
$utilizalentes = isset($_POST['checkbox5']) ? $_POST['checkbox5'] : '';
$otras = $_POST['otras'];
$cirugias = isset($_POST['checkbox6']) ? $_POST['checkbox6'] : '';
$definacirugias = $_POST['definacirugias'];

//Datos a insertar en la tabla antecedentesprenatales
$codigobeneficiario = $_POST['codigoBeneficiario'];
$embarazotermino = isset($_POST['checkbox7']) ? $_POST['checkbox7'] : '';
$definaembarazotermino = $_POST['embarazotermino'];
$partonormal = isset($_POST['checkbox8']) ? $_POST['checkbox8'] : '';
$definapartonormal = $_POST['partonormal'];
$complicaciones = isset($_POST['checkbox9']) ? $_POST['checkbox9'] : '';
$definacomplicaciones = $_POST['complicacionesembarazo'];

//Datos a insertar en la tabla antecedentesperinatales
$codigobeneficiario = $_POST['codigoBeneficiario'];
$ninolloro = isset($_POST['checkbox10']) ? $_POST['checkbox10'] : '';
$coloracionnormal = isset($_POST['checkbox11']) ? $_POST['checkbox11'] : '';
$definacoloracionnormal = $_POST['coloracionN'];
$estuvoincubadora = isset($_POST['checkbox12']) ? $_POST['checkbox12'] : '';
$definaestuvoincubadora = $_POST['incubadora'];
$nacioamarillomorado = isset($_POST['checkbox13']) ? $_POST['checkbox13'] : '';
$definanacioam = $_POST['nacio_AM'];

//Datos a insertar en la tabla antecedentespostnatales
$codigobeneficiario = $_POST['codigoBeneficiario'];
$tuvotratamiento = isset($_POST['checkbox14']) ? $_POST['checkbox14'] : '';
$tuvoinfeccion = isset($_POST['checkbox15']) ? $_POST['checkbox15'] : '';
$tuvofiebres = isset($_POST['checkbox16']) ? $_POST['checkbox16'] : '';
$tuvoconvulsiones = isset($_POST['checkbox17']) ? $_POST['checkbox17'] : '';
$tienlenguaje = isset($_POST['checkbox18']) ? $_POST['checkbox18'] : '';
$camina = isset($_POST['checkbox19']) ? $_POST['checkbox19'] : '';

//calcular la edad del beneficiario para la tabla beneficiario
$fecha_actual = date('Y-m-d');
$edad = date_diff(date_create($fechanacimiento), date_create($fecha_actual))->y;


if ($numerohermanos < 0 || $numeroocupa < 0) {
    echo "Error: Los valores numéricos no pueden ser negativos";
} else {
    // Consulta de inserción múltiple
    $query = "INSERT INTO beneficiario (codigobeneficiario, nombre, apellido, fechanacimiento, edad, escolaridad, fechaingreso, direccion, numerohermanos, numeroocupa) 
    VALUES ('$codigobeneficiario', '$nombre', '$apellido', '$fechanacimiento', '$edad', '$escolaridad', '$fechaingreso', '$direccion','$numerohermanos', '$numeroocupa');
              INSERT INTO datosencargado (codigobeneficiario, nombre, edad, escolaridad, ocupacion, telefono) 
              VALUES ('$codigobeneficiario', '$nombreencargado', '$edadencargado', '$escolaridadencargado', '$ocupacionencargado', '$telefonoencargado');
              INSERT INTO referencia (codigobeneficiario, consulta) 
              VALUES ('$codigobeneficiario', '$consulta');
              INSERT INTO historialclinico (codigobeneficiario, consulta) 
              VALUES ('$codigobeneficiario', '$consulta');
              INSERT INTO antecedentesprenatales (codigobeneficiario, consulta) 
              VALUES ('$codigobeneficiario', '$consulta');
              INSERT INTO antecedentesperinatales (codigobeneficiario, consulta) 
              VALUES ('$codigobeneficiario', '$consulta');
              INSERT INTO antecedentespostnatales (codigobeneficiario, consulta) 
              VALUES ('$codigobeneficiario', '$consulta');";

    // Ejecutar la consulta
    if ($mysqli->multi_query($query)) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $mysqli->error;
    }
}

// Ejecutar la consulta
if ($mysqli->multi_query($query)) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $mysqli->error;
}

// Cerrar la conexión
$mysqli->close();
