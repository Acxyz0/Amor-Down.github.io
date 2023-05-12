<!DOCTYPE html>
<html>
<head>
    <title>Asignar sesión</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Asignar sesión</h1>
        <!-- Formulario para asignar sesiones -->
        <form method="post" action="asignar_sesion.php">
            <div class="form-group">
                <label for="beneficiary_code">Código del beneficiario:</label>
                <input type="text" class="form-control" id="beneficiary_code" name="beneficiary_code">
            </div>
            <div class="form-group">
                <label for="therapist_id">Terapeuta:</label>
                <select class="form-control" id="therapist_id" name="therapist_id">
                    <!-- Aquí se mostrarán las opciones de terapeutas -->
                </select>
            </div>
            <div class="form-group">
                <label for="session_date">Fecha de la sesión:</label>
                <input type="date" class="form-control" id="session_date" name="session_date">
            </div>
            <div class="form-group">
                <label for="session_time">Hora de la sesión:</label>
                <input type="time" class="form-control" id="session_time" name="session_time">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Asignar sesión</button>
        </form>
    </div>

    <!-- Incluir jQuery y Bootstrap JS -->
    <script src="<URL>" integrity="<URL>" crossorigin="<URL>"></script>
    <script src="<URL>" integrity="<URL>" crossorigin="<URL>"></script>

    <!-- Código JavaScript para cargar la lista de terapeutas -->
    <script>
        // Función para cargar la lista de terapeutas
        function loadTherapists() {
            // Crear un objeto XMLHttpRequest
            var xhr = new XMLHttpRequest();
            // Abrir una conexión GET al archivo "get_therapists.php"
            xhr.open('GET', 'get_therapists.php', true);
            // Enviar la solicitud
            xhr.send();
            // Cuando se reciba una respuesta
            xhr.onload = function() {
                if (this.status == 200) {
                    // Obtener la lista de terapeutas en formato JSON
                    var therapists = JSON.parse(this.responseText);
                    // Obtener el elemento select
                    var select = document.getElementById('therapist_id');
                    // Limpiar las opciones existentes
                    select.innerHTML = '';
                    // Agregar una opción por cada terapeuta
                    for (var i in therapists) {
                        var option = document.createElement('option');
                        option.value = therapists[i].id;
                        option.text = therapists[i].name;
                        select.add(option);
                    }
                }
            };
        }

        // Cargar la lista de terapeutas cuando se cargue la página
        window.onload = loadTherapists;
    </script>
</body>
</html>
