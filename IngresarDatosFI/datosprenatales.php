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
    if(empty($_POST['codigoBeneficiario']) or empty($_POST['checkbox7']) or empty($_POST['checkbox8'])) {
    } else {
        $codigobeneficiario = $_POST['codigoBeneficiario'];
        $embarazotermino = isset($_POST['checkbox7']) ? $_POST['checkbox7'] : '';
        $definaembarazotermino = $_POST['embarazotermino'];
        $partonormal = isset($_POST['checkbox8']) ? $_POST['checkbox8'] : '';
        $definapartonormal = $_POST['partonormal'];
        $complicaciones = isset($_POST['checkbox9']) ? $_POST['checkbox9'] : '';
        $definacomplicaciones = $_POST['complicacionesembarazo'];

        $sql5 = " INSERT INTO antecedentesprenatales (codigobeneficiario, embarazotermino, definaembarazotermino, partonormal, definapartonormal, complicaciones, definacomplicaciones) 
VALUES ('$codigobeneficiario', '$embarazotermino', '$definaembarazotermino', '$partonormal', '$definapartonormal', '$complicaciones', '$definacomplicaciones')";

        if ($conn->query($sql5)===false) {
            echo "Error: " . $sql5 . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>