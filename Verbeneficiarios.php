<!DOCTYPE html>
<html>

<head>
    <title>Datos del Beneficiario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .table {
            margin-top: 30px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .table th {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 10px;
            font-weight: bold;
            text-align: center;
        }

        .table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Datos del Beneficiario</h1>

        <?php
        // Realizar la conexión a la base de datos
        $conexion = mysqli_connect('localhost', 'root', '', 'amordown');

        // Verificar la conexión
        if (!$conexion) {
            die("Error al conectar con la base de datos: " . mysqli_connect_error());
        }

        // Consultar los datos del beneficiario
        $query = "SELECT codigobeneficiario, nombre, apellido, fechanacimiento, edad, Mayor_Menor, escolaridad, fechaingreso, direccion, numerohermanos, numeroocupa FROM beneficiario";
        $resultado = mysqli_query($conexion, $query);

        // Verificar si se obtuvieron resultados
        if (mysqli_num_rows($resultado) > 0) {
            $datosBeneficiario = mysqli_fetch_assoc($resultado);
        } else {
            echo "<p>No se encontraron datos del beneficiario.</p>";
            exit;
        }
        ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Código Beneficiario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Edad</th>
                        <th>Mayor/Menor</th>
                        <th>Escolaridad</th>
                        <th>Fecha de Ingreso</th>
                        <th>Dirección</th>
                        <th>Número de Hermanos</th>
                        <th>Número que Ocupa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $datosBeneficiario['codigobeneficiario']; ?></td>
                        <td><?php echo $datosBeneficiario['nombre']; ?></td>
                        <td><?php echo $datosBeneficiario['apellido']; ?></td>
                        <td><?php echo $datosBeneficiario['fechanacimiento']; ?></td>
                        <td><?php echo $datosBeneficiario['edad']; ?></td>
                        <td><?php echo $datosBeneficiario['Mayor_Menor']; ?></td>
                        <td><?php echo $datosBeneficiario['escolaridad']; ?></td>
                        <td><?php echo $datosBeneficiario['fechaingreso']; ?></td>
                        <td><?php echo $datosBeneficiario['direccion']; ?></td>
                        <td><?php echo $datosBeneficiario['numerohermanos']; ?></td>
                        <td><?php echo $datosBeneficiario['numeroocupa']; ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-4 text-center">
            <a class="btn btn-success btn-lg" href="inicio.php">Inicio</a>
        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
