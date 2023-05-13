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
    if(empty($_POST['codigoBeneficiario']) or empty($_POST['enfermedadesP']) or empty($_POST['medicamentos']) or empty($_POST['checkbox'])or empty($_POST['checkbox2']) or empty($_POST['checkbox3']) or empty($_POST['checkbox4']) or empty($_POST['checkbox5']) or empty($_POST['otras']) or empty($_POST['checkbox6'])) {
    } else {
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

        $sql4 = "   INSERT INTO historialclinico (codigobeneficiario, enfermedadpadece, medicamentos, esquemavacunas, pruebasauditivas, pruebasvista, utilizaauditivos, utilizalentes, otras, cirugias,  definacirugias) 
VALUES ('$codigobeneficiario','$enfermedadpadece', '$medicamentos', '$esquemavacunas', '$pruebasauditivas', '$pruebasvista', '$utilizaaudifonos', '$utilizalentes', '$otras', '$cirugias', '$definacirugias')";

        if ($conn->query($sql4)===false) {
            echo "Error: " . $sql4 . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>