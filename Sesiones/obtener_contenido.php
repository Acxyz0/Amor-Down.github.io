<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost  ", "root", "", "amordown");

// Obtener el contenido de la página
$consulta = "SELECT * FROM sesiones";
$resultado = mysqli_query($conexion, $consulta);

echo "<table>";
echo "<tr><th>ID</th><th>Beneficiario</th><th>Terapeuta</th><th>Hora</th></tr>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['beneficiario'] . "</td>";
    echo "<td>" . $fila['terapeuta'] . "</td>";
    echo "<td>" . $fila['hora'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
