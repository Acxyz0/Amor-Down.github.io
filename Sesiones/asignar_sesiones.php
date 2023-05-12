<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "amordown");

// Obtener los valores de los campos del formulario
$beneficiario = $_POST['beneficiario'];
$terapeuta = $_POST['terapeuta'];
$hora = $_POST['hora'];

// Verificar si los valores son válidos
if (empty($beneficiario) || empty($terapeuta) || empty($hora)) {
    // Alguno de los campos está vacío
    echo "Por favor completa todos los campos del formulario";
} else {
    // Todos los campos están completos, asignar la sesión
    $consulta = "INSERT INTO sesiones (beneficiario, terapeuta, hora) VALUES ('$beneficiario', '$terapeuta', '$hora')";
    mysqli_query($conexion, $consulta);
    echo "Sesión asignada correctamente";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
