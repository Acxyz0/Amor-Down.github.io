<!DOCTYPE html>
<html>

<head>
  <title>Formulario</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 40px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Formulario</h1>

    <form id="formulario" method="post" action="reporte.php">
      <table class="table table-striped table-hover">
        <thead>
          <tr class="d-flex">
            <th class="col-2 text-center" scope="col"></th>
            <th class="col-2 text-center" scope="col">Si</th>
            <th class="col-2 text-center" scope="col">No</th>
            <th class="col-6 text-center" scope="col">Observaciones</th>
          </tr>
        </thead>

        <tbody>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Balbucea?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2" name="observaciones[]"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Produce sonidos guturales?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2" name="observaciones[]"></textarea></td>
          </tr>
          <!-- Agregar las demás filas de la tabla -->

        </tbody>
      </table>

      <button type="submit" form="formulario" name="siguiente" class="btn btn-primary">Siguiente</button>
    </form>

  </div>

</body>

</html>
