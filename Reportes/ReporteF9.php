<!DOCTYPE html>
<html>
<head>
    <title>Reporte con Barra Lateral</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1000px;  
            min-height: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            padding-top: 20px;
            color: #007bff;
            text-align: center;
            font-size: 70px;
        }

        .date-range {
            margin-bottom: 20px;
            text-align: center;
        }

        .date-range label {
            margin-right: 10px;
        }

        .date-range input {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .generate-report {
            text-align: center;
            margin-bottom: 20px;
        }

        .generate-report button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
            word-break: break-word;
        }

        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .table-container {
            max-height: 400px;
            overflow-y: auto;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 80px;
            height: 100vh;
            background-color: #8A2BE2;
            padding: 20px;
            box-sizing: border-box;
            transition: width 0.3s ease-in-out;
            overflow: hidden;
        }

        .sidebar:hover {
            width: 200px;
        }

        .menu {
            margin-bottom: 20px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
        }

        .menu li {
            margin-bottom: 10px;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 8px;
            transition: background-color 0.3s ease-in-out;
        }

        .menu li a:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .menu li a .bi {
            font-size: 24px;
            margin-right: 10px;
            width: 24px;
            height: 24px;
            text-align: center;
        }

        .menu li a span {
            display: none;
            font-weight: bold;
            margin-left: 10px;
        }

        .sidebar:hover .menu li a span {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu">
            <ul>
                <li><a href="#"><i class="bi bi-house-fill"></i><span>Inicio</span></a></li>
                <li><a href="#"><i class="bi bi-person-fill"></i><span>Perfil</span></a></li>
                <li><a href="#"><i class="bi bi-gear-fill"></i><span>Configuración</span></a></li>
                <li><a href="#"><i class="bi bi-clipboard-data-fill"></i><span>Tareas</span></a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1>Reporte F9</h1>

        <div class="date-range">
            <label>Fecha de Inicio:</label>
            <input type="date" id="start-date">
            <label>Fecha de Fin:</label>
            <input type="date" id="end-date">
        </div>

        <div class="generate-report">
            <button>Generar Reporte</button>
        </div>

        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Fecha de atención</th>
                        <th>Quien refiere</th>
                        <th>No. Expediente</th>
                        <th>Nombre Completo</th>
                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>Sexo</th>
                        <th>Edad</th>
                        <th>Pueblo</th>
                        <th>Discapacidad</th>
                        <th>Escolaridad</th>
                        <th>Consulta</th>
                        <th>Diagnóstico/Motivo de referencia</th>
                        <th>Servicio Recibido</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2023-05-01</td>
                        <td>Referente 1</td>
                        <td>12345</td>
                        <td>Nombre 1</td>
                        <td>Departamento 1</td>
                        <td>Municipio 1</td>
                        <td>Femenino</td>
                        <td>30</td>
                        <td>Pueblo 1</td>
                        <td>No</td>
                        <td>Primaria</td>
                        <td>Consulta 1</td>
                        <td>Diagnóstico 1</td>
                        <td>Servicio 1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2023-05-02</td>
                        <td>Referente 2</td>
                        <td>67890</td>
                        <td>Nombre 2</td>
                        <td>Departamento 2</td>
                        <td>Municipio 2</td>
                        <td>Masculino</td>
                        <td>25</td>
                        <td>Pueblo 2</td>
                        <td>Sí</td>
                        <td>Secundaria</td>
                        <td>Consulta 2</td>
                        <td>Diagnóstico 2</td>
                        <td>Servicio 2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector('.sidebar').addEventListener('mouseover', function() {
            this.style.width = '200px';
        });

        document.querySelector('.sidebar').addEventListener('mouseout', function() {
            this.style.width = '80px';
        });
    </script>
</body>
</html>
