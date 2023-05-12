<!DOCTYPE html>
<html>

<head>
    <title>Asignar sesiones</title>
    <!-- Cargar Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Asignar sesiones</h2>
        <form action="asignar_sesion.php" method="post">
            <div class="form-group">
                <label for="beneficiario_codigo">Código de beneficiario:</label>
                <input type="text" class="form-control" id="beneficiario_codigo" name="beneficiario_codigo">
            </div>
            <div class="form-group">
                <label for="terapeuta_codigo">Código de terapeuta:</label>
                <input type="text" class="form-control" id="terapeuta_codigo" name="terapeuta_codigo">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" id="hora" name="hora">
            </div>
            <button type="submit" class="btn btn-default">Asignar sesión</button>
        </form>
    </div>

    <!-- Cargar jQuery y Bootstrap JS -->
    <script src="<URL>" integrity="<URL>" crossorigin="<URL>"></script>
    <script src="<URL>" integrity="<URL>" crossorigin="<URL>"></script>
</body>

</html>