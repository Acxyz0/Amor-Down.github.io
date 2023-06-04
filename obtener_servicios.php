<?php
// Realizar la conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'amordown');

if (isset($_POST['codigo_beneficiario'])) {
  $codigoBeneficiario = $_POST['codigo_beneficiario'];

  // Consultar la tabla correspondiente para obtener las opciones del desplegable
  $query = "SELECT servicio FROM diagnosticos WHERE codigobeneficiario = '$codigoBeneficiario' AND diagnostico = 'positivo'
            UNION
            SELECT servicio FROM diagnosticoslenguaje WHERE codigobeneficiario = '$codigoBeneficiario' AND diagnostico = 'positivo'
            UNION
            SELECT servicio FROM diagnosticospre_o WHERE codigobeneficiario = '$codigoBeneficiario' AND diagnostico = 'positivo'";

  $result = mysqli_query($conexion, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['servicio'] . '">' . $row['servicio'] . '</option>';
  }

  // Agregar la opción en blanco solo para el segundo cuadro de servicios
  echo '<option value="">Seleccionar servicio</option>';
}
?>
