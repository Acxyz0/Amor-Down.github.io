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
    if(empty($_POST['codigoBeneficiario']) or empty($_POST['motivo'])) {
    } else {
        $codigobeneficiario = $_POST['codigoBeneficiario'];
        $consulta = $_POST['motivo'];

        $sql3 = " INSERT INTO referencia (codigobeneficiario, consulta) 
VALUES ('$codigobeneficiario', '$consulta')";

        if ($conn->query($sql3)===false) {
            echo "Error: " . $sql3 . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>