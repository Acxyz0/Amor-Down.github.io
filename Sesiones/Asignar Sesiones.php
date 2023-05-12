<!DOCTYPE html>
<html>
<head>
    <title>Asignar sesión</title>
    <style>
        /* Estilos para la ventana modal */
        #modal {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        #contenido-modal {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
    </style>
</head>
<body>
    <!-- Botón para abrir la ventana modal -->
    <button onclick="abrirModal()">Asignar sesión</button>

    <!-- Ventana modal -->
    <div id="modal" style="display: none;">
        <div id="contenido-modal">
            <span onclick="cerrarModal()" style="cursor: pointer;">×</span>
            <form onsubmit="asignarSesion(event)">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" onchange="actualizarHorasDisponibles()"><br>
                <label for="beneficiario">Beneficiario:</label>
                <input type="text" name="beneficiario" id="beneficiario"><br>
                <label for="terapeuta">Terapeuta:</label>
                <input type="text" name="terapeuta" id="terapeuta" onchange="actualizarHorasDisponibles()"><br>
                <label for="hora">Hora:</label>
                <select name="hora" id="hora">
                    <!-- Opciones del menú desplegable -->
                </select><br>
                <input type="submit" value="Asignar sesión">
            </form>
        </div>
    </div>

    <!-- Mensaje de respuesta -->
    <div id="mensaje"></div>

    <!-- Contenido de la página -->
    <div id="contenido">
        <!-- Contenido generado dinámicamente -->
    </div>

    <script>
        function abrirModal() {
            document.getElementById("modal").style.display = "block";
        }

        function cerrarModal() {
            document.getElementById("modal").style.display = "none";
        }

        function asignarSesion(event) {
            // Evitar el envío del formulario
            event.preventDefault();

            // Obtener los valores de los campos del formulario
            var fecha = document.getElementById("fecha").value;
            var beneficiario = document.getElementById("beneficiario").value;
            var terapeuta = document.getElementById("terapeuta").value;
            var hora = document.getElementById("hora").value;

            // Enviar los datos al servidor utilizando AJAX
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Recibir la respuesta del servidor
                    var respuesta = this.responseText;

                    // Mostrar la respuesta en la página
                    document.getElementById("mensaje").innerHTML = respuesta;

                    // Limpiar el formulario
                    document.getElementById("fecha").value = "";
                    document.getElementById("beneficiario").value = "";
                    document.getElementById("terapeuta").value = "";
                    document.getElementById("hora").selectedIndex = 0;

                    // Cerrar la ventana modal
                    cerrarModal();

                    // Actualizar el contenido de la página
                    actualizarContenido();
                }
            };
            xhr.open("POST", "asignar_sesion.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("fecha=" + fecha + "&beneficiario=" + beneficiario + "&terapeuta=" + terapeuta + "&hora=" + hora);
        }

        function actualizarContenido() {
            // Enviar una solicitud al servidor para obtener el contenido actualizado
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Recibir la respuesta del servidor
                    var contenido = this.responseText;

                    // Actualizar el contenido de la página
                    document.getElementById("contenido").innerHTML = contenido;
                }
            };
            xhr.open("GET", "obtener_contenido.php", true);
            xhr.send();
        }

        function actualizarHorasDisponibles() {
            // Obtener el terapeuta y la fecha seleccionados
            var terapeuta = document.getElementById("terapeuta").value;
            var fecha = document.getElementById("fecha").value;

            // Enviar una solicitud al servidor para obtener las horas disponibles
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Recibir la respuesta del servidor
                    var horas_disponibles = JSON.parse(this.responseText);

                    // Actualizar las opciones del menú desplegable
                    var selectHora = document.getElementById("hora");
                    selectHora.innerHTML = "";
                    for (var i = 0; i < horas_disponibles.length; i++) {
                        var option = document.createElement("option");
                        option.value = horas_disponibles[i];
                        option.text = horas_disponibles[i];
                        selectHora.appendChild(option);
                    }
                }
            };
            xhr.open("GET", "obtener_horas_disponibles.php?terapeuta=" + terapeuta + "&fecha="+ fecha, true);
            xhr.send();
        }
    </script>
</body>
</html>
