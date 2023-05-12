<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Beneficiarios Atendidos</title>
</head>
<body>
    <section>
        <div>
            <form method="post">
                <?php
                        include("modelo/conexion.php");
                ?>
                <div>
                <table class="table-hover">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Genero</th>
                            <th>Edad</th>
                            <th>Diagnóstico</th>
                            <th>Discapacidad</th>
                            <th>Asistencia</th>
                        </tr>
                    </thead>
                    <?php
                    foreach($sql=$conexion->query("SELECT * FROM usuarios_atendidos") as $row) { ?>
                    <tr>
                        <td><?php echo $row["Codigo"] ?> </td>
                        <td><?php echo $row["Nombres"] ?> </td>
                        <td><?php echo $row["Apellidos"] ?> </td>
                        <td><?php echo $row["Genero"] ?> </td>
                        <td><?php echo $row["Edad"] ?> </td>
                        <td><?php echo $row["Diagnostico"] ?> </td>
                        <td><?php echo $row["Discapacidad"] ?> </td>
                        <td><?php echo $row["Asistencia"] ?> </td>

                    <?php } ?>

                </div>

                <div class="cuenta">
                    <a href="inicio.php">Volver</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>