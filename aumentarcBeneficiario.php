<?php
// Conexión a la base de datos (reemplaza los valores con los de tu propia configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amordown";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el último código de beneficiario desde la base de datos
$query = "SELECT codigobeneficiario FROM beneficiario ORDER BY codigobeneficiario DESC LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ultimoCodigo = $row["codigobeneficiario"];
    $nuevoCodigo = incrementarCodigo($ultimoCodigo);
} else {
    $nuevoCodigo = "coad-0001"; // Código predeterminado si no hay registros en la base de datos
}

// Incrementar el código en 1
function incrementarCodigo($codigo) {
    $partes = explode("-", $codigo);
    $numero = intval($partes[1]);
    $nuevoNumero = $numero + 1;
    $nuevoCodigo = $partes[0] . "-" . sprintf('%04d', $nuevoNumero);
    return $nuevoCodigo;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!-- HTML -->
<p for="codigoBeneficiario">Código del beneficiario:</p>
<input type="text" id="codigoBeneficiario" name="codigoBeneficiario" value="<?php echo $nuevoCodigo; ?>"><br><br>
