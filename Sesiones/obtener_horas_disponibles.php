<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "amordown");

// Obtener el terapeuta y la fecha seleccionados
$terapeuta_seleccionado = $_GET['terapeuta'];
$fecha_seleccionada = $_GET['fecha'];

// Obtener las horas ocupadas para el terapeuta y la fecha seleccionados
$consulta = "SELECT DISTINCT hora FROM sesiones WHERE terapeuta = '$terapeuta_seleccionado' AND fecha='$fecha_seleccionada'";
$resultado = mysqli_query($conexion, $consulta);

$horas_ocupadas = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $horas_ocupadas[] = $fila['hora'];
}

// Generar las opciones del menú desplegable
$horas_disponibles = array("8:00", "8:30", "9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00");

$horas_disponibles_json = array();
foreach ($horas_disponibles as $hora) {
    if (!in_array($hora, $horas_ocupadas)) {
        $horas_disponibles_json[] = $hora;
    }
}

echo json_encode($horas_disponibles_json);

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
