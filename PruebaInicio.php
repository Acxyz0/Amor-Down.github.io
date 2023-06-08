<!DOCTYPE html>
<html>
<head>
  <title>Carrusel de Imágenes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .carousel-inner img {
      width: 4000px; /* Establece un tamaño fijo para todas las imágenes */
      height: 4000px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Carrusel de Imágenes</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <!-- Agrega más indicadores aquí -->
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/imagen1.jpg" alt="Imagen 1">
      </div>

      <div class="item">
        <img src="img/imagen2.jpg" alt="Imagen 2">
      </div>

      <div class="item">
        <img src="img/imagen3.jpg" alt="Imagen 3">
      </div>

      <div class="item">
        <img src="img/imagen4.jpg" alt="Imagen 4">
      </div>

      <!-- Agrega más slides aquí -->
    </div>

    <!-- Controles de navegación -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    // Inicia el carrusel automáticamente
    $('#myCarousel').carousel({
      interval: 5000 // Establece el intervalo en milisegundos (ejemplo: 3000 = 3 segundos)
    });
  });
</script>

</body>
</html>
