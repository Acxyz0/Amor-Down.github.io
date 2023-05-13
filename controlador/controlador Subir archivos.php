<?php
// Configuración de la base de datos
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "amordown";

// Conexión a la base de datos
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
 die("Error al conectar a la base de datos: " . $conn->connect_error);
}

if (isset($_FILES["fileToUpload"])) {
 $target_dir = "archivos/";
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Comprueba si el archivo es un PDF
 if(isset($_POST["submit"])) {
 if($imageFileType != "pdf") {
 echo "Lo siento, solo se permiten archivos PDF.";
 $uploadOk = 0;
 }
 }

 // Comprueba si $uploadOk se ha establecido en 0 por un error
 if ($uploadOk == 0) {
 echo "Lo siento, tu archivo no fue subido.";
 // Si todo está bien, intenta subir el archivo
 } else {
 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 echo "El archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ha sido subido.";

 // Guarda información sobre el archivo en la base de datos
 $codigoBeneficiario = $_POST["codigoBeneficiario"];
 $nombreArchivo = basename($_FILES["fileToUpload"]["name"]);
 $descripcion = $_POST["descripcion"];
 $stmt = $conn->prepare("INSERT INTO archivos codigobeneficiario, nombrearchivo, descripcion) VALUES (?, ?, ?)");
 $stmt->bind_param("ssss",$codigoBeneficiario, $nombreArchivo, $descripcion);
 if ($stmt->execute()) {
 echo "Información del archivo guardada en la base de datos.";
 } else {
 echo "Error al guardar información del archivo en la base de datos: " . $stmt->error;
 }
 } else {
 echo "Lo siento, hubo un error al subir tu archivo.";
 }
 }
}
?>
