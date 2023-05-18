<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .my-background {
            background-color: floralwhite;
            background-size: 100% auto;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Ver Achivos de Beneficiarios</title>
</head>

<body class="my-background">
    <h1>Mostrar archivos</h1>
    <label for="codigoBeneficiario">Código del beneficiario:</label>
    <input type="text" id="codigoBeneficiario" name="codigoBeneficiario">
    <button onclick="mostrarArchivos()">Mostrar archivos</button>

    <br>
    <br>
    <div class="btn btn-warning" id="listaArchivos"></div>

    <br>
    <br>
    <div>
        <a class="btn btn-success" href="inicio.php">Inicio</a>
    </div>

    <script>
        function mostrarArchivos() {
            var codigoBeneficiario = document.getElementById("codigoBeneficiario").value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("listaArchivos").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", "mostrarArchivos.php?codigoBeneficiario=" + codigoBeneficiario, true);
            xhr.send();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>