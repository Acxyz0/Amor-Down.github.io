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
    if(empty($_POST['codigoBeneficiario']) or empty($_POST['checkbox10']) or empty($_POST['checkbox11']) or empty($_POST['checkbox12'])  or empty($_POST['checkbox13'])) {
    } else {
        $codigobeneficiario = $_POST['codigoBeneficiario'];
        $ninolloro = isset($_POST['checkbox10']) ? $_POST['checkbox10'] : '';
        $coloracionnormal = isset($_POST['checkbox11']) ? $_POST['checkbox11'] : '';
        $definacoloracionnormal = $_POST['coloracionN'];
        $estuvoincubadora = isset($_POST['checkbox12']) ? $_POST['checkbox12'] : '';
        $definaestuvoincubadora = $_POST['incubadora'];
        $nacioamarillomorado = isset($_POST['checkbox13']) ? $_POST['checkbox13'] : '';
        $definanacioam = $_POST['nacio_AM'];

        $sql6 = "  INSERT INTO antecedentesperinatales (codigobeneficiario, niñolloro, coloracionnormal, definacoloracionnormal, estuvoincubadora, definaestuvoincubadora, nacioamarillomorado, definanacioam) 
VALUES ('$codigobeneficiario', '$ninolloro', '$coloracionnormal', '$definacoloracionnormal', '$estuvoincubadora', '$definaestuvoincubadora', '$nacioamarillomorado', '$definanacioam')";

        if ($conn->query($sql6)===false) {
            echo "Error: " . $sql6 . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>