<?php
    // Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amordown";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

if (!empty($_POST['submit'])) {
    if(empty($_POST['codigoBeneficiario']) or empty($_POST['nombreE']) or empty($_POST['edadE']) or empty($_POST['escolaridadE']) or empty($_POST['ocupacionE']) or empty($_POST['telefonoE'])) {
    } else {
        $tipoencargado=$_POST['tipoencargado'];
        $codigobeneficiario = $_POST['codigoBeneficiario'];
        $nombreencargado = $_POST['nombreE'];
        $fechanacimiento = $_POST['apellidosE'];
        $edadencargado = $_POST['edadE'];
        $escolaridadencargado = $_POST['escolaridadE'];
        $ocupacionencargado = $_POST['ocupacionE'];
        $telefonoencargado = $_POST['telefonoE'];

        //Insert numero 1
        $sql1 = " INSERT INTO datosencargado (codigobeneficiario, tipoencargado, nombre, edad, escolaridad, ocupacion, telefono) 
VALUES ('$codigobeneficiario', '$tipoencargado', '$nombreencargado', '$edadencargado', '$escolaridadencargado', '$ocupacionencargado', '$telefonoencargado')";

        if ($conn->query($sql1)===false) {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>