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
        if(empty($_POST['codigoBeneficiario']) or empty($_POST['nombres']) or empty($_POST['apellidos']) or empty($_POST['fechaN']) or empty($_POST['escolaridad']) or empty($_POST['fechaI']) or empty($_POST['direccion']) or empty($_POST['numeroH']) or empty($_POST['numeroOH'])) {
        } else {
            $codigobeneficiario = $_POST['codigoBeneficiario'];
            $nombre = $_POST['nombres'];
            $apellido = $_POST['apellidos'];
            $fechanacimiento = $_POST['fechaN'];
            $escolaridad = $_POST['escolaridad'];
            $fechaingreso = $_POST['fechaI'];
            $direccion = $_POST['direccion'];
            $numerohermanos = $_POST['numeroH'];
            $numeroocupa = $_POST['numeroOH'];

            //Insert numero 1
            $sql = "INSERT INTO beneficiario (codigobeneficiario, nombre, apellido, fechanacimiento, escolaridad, fechaingreso, direccion, numerohermanos, numeroocupa) 
    VALUES ('$codigobeneficiario', '$nombre', '$apellido', '$fechanacimiento',  '$escolaridad', '$fechaingreso', '$direccion','$numerohermanos', '$numeroocupa')";

            if ($conn->query($sql)===false) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    }
?>