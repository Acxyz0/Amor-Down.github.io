<!DOCTYPE html>
<html>
<head>
  <title>Reporte Cualitativo</title>
  <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Reporte Cualitativo</h1>

    <h2>Detalles Generales</h2>
    <table class="table">
      <tbody>
        <tr>
          <th>Fecha</th>
          <td><input type="date" class="form-control"></td>
        </tr>
        <tr>
          <th>Lugar</th>
          <td><input type="text" class="form-control" placeholder="Lugar"></td>
        </tr>
        <tr>
          <th>Actividad</th>
          <td><input type="text" class="form-control" placeholder="Actividad"></td>
        </tr>
      </tbody>
    </table>

    <h2>Datos Estadísticos de Usuarios Atendidos</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Rango de Edades</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>0-16</td>
          <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
          <td>17-30</td>
          <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
          <td>31-46</td>
          <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
          <td>47 o más</td>
          <td><input type="number" class="form-control"></td>
        </tr>
      </tbody>
    </table>

    <h2>Última Tabla</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombre</th>
          <th>Actividad</th>
          <th>Avance</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" class="form-control"></td>
          <td><input type="text" class="form-control"></td>
          <td><input type="text" class="form-control"></td>
          <td><input type="text" class="form-control"></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
