<?php
// mostrarArchivos.php
$codigoBeneficiario = $_GET["codigoBeneficiario"];

// Conexión a la base de datos
$db = new mysqli("localhost", "root", "", "amordown");

// Consulta para obtener los archivos del beneficiario
$query = "SELECT nombrearchivo FROM archivos WHERE codigobeneficiario = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("s", $codigoBeneficiario);
$stmt->execute();
$result = $stmt->get_result();

echo "<ul>";
while ($row = $result->fetch_assoc()) {
    $nombreArchivo = $row["nombrearchivo"];
    if (file_exists("archivos/$nombreArchivo")) {
        echo "<li><a href='archivos/$nombreArchivo' target='_blank'>$nombreArchivo</a></li>";
    }
}
echo "</ul>";

$db->close();
?>
