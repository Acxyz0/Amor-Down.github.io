<?php
// Establece los detalles de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_tu_base_de_datos";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtén el nombre de usuario del usuario actual (debes ajustarlo según tu lógica de autenticación)
$nombreUsuario = obtenerNombreUsuario(); // Llama a la función que obtiene el nombre de usuario actual

// Verifica si el nombre de usuario está definido y no está vacío
if (!empty($nombreUsuario)) {
    // Prepara y ejecuta la consulta para obtener el estado del usuario
    $sql = "SELECT estado FROM usuarios WHERE nombre_usuario = '$nombreUsuario'";
    $resultado = $conn->query($sql);

    // Verifica si se encontró el usuario en la base de datos
    if ($resultado->num_rows > 0) {
        // Obtiene el estado del usuario
        $fila = $resultado->fetch_assoc();
        $estadoUsuario = $fila["estado"];

        // Verifica el estado del usuario
        if ($estadoUsuario == "inactivo") {
            // Si el usuario está inactivo, redirige a una página de acceso denegado o muestra un mensaje de error
            header("Location: acceso-denegado.html");
            exit();
        }
    }
}

// Cierra la conexión a la base de datos
$conn->close();

// Función para obtener el nombre de usuario actual
function obtenerNombreUsuario() {
    // Implementa tu lógica para obtener el nombre de usuario actual
    // Puede ser a través de variables de sesión, autenticación, etc.
    // Devuelve el nombre de usuario actual
    return "nombre_de_usuario_actual";
}
?>
