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
    if(empty($_POST['codigoBeneficiario']) or empty($_POST['checkbox14']) or empty($_POST['checkbox15']) or empty($_POST['checkbox16'])or empty($_POST['checkbox17']) or empty($_POST['checkbox18']) or empty($_POST['checkbox19'])) {
    } else {
        $codigobeneficiario = $_POST['codigoBeneficiario'];
        $tuvotratamiento = isset($_POST['checkbox14']) ? $_POST['checkbox14'] : '';
        $tuvoinfeccion = isset($_POST['checkbox15']) ? $_POST['checkbox15'] : '';
        $tuvofiebres = isset($_POST['checkbox16']) ? $_POST['checkbox16'] : '';
        $tuvoconvulsiones = isset($_POST['checkbox17']) ? $_POST['checkbox17'] : '';
        $tienelenguaje = isset($_POST['checkbox18']) ? $_POST['checkbox18'] : '';
        $camina = isset($_POST['checkbox19']) ? $_POST['checkbox19'] : '';

        $sql7 = "   INSERT INTO antecedentespostnatales (codigobeneficiario, tuvotratamiento, tuvoinfeccion, tuvofiebres, tuvoconvulsiones, tienelenguaje, camina) 
VALUES ('$codigobeneficiario', '$tuvotratamiento', '$tuvoinfeccion',  '$tuvofiebres', '$tuvoconvulsiones', '$tienelenguaje', '$camina ')";

        if ($conn->query($sql7)===false) {
            echo "Error: " . $sql7 . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>