<?php
session_start();

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        
        // Aquí debes establecer la conexión a tu base de datos
        $conexion = new mysqli("localhost", "root", "", "amordown");
        
        // Verificar si la conexión fue exitosa
        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }
        
        // Utilizar sentencias preparadas para evitar ataques de inyección SQL
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=? AND contraseña=?");
        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Verificar si se encontró un usuario válido
        if ($result->num_rows === 1) {
            $datos = $result->fetch_object();
            $_SESSION["id"] = $datos->ID;
            $_SESSION["nombres"] = $datos->Nombres;
            $_SESSION["apellidos"] = $datos->Apellidos;
            
            header("Location: ../inicio.php");
            exit();
        } else {
            $error = "Acceso Denegado";
        }
        
        $stmt->close();
        $conexion->close();
    } else {
        $error = "Campos Vacíos";
    }
}
?>
