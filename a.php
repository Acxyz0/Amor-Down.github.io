<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Divs con Formularios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f7f7f7;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .formulario {
      display: none;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .btn-primary,
    .btn-primary:hover,
    .btn-primary:focus {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-warning,
    .btn-warning:hover,
    .btn-warning:focus {
      background-color: #ffc107;
      border-color: #ffc107;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 mb-3">
        <button class="btn btn-primary mr-2" onclick="mostrarDiv('div1')">Div 1</button>
        <button class="btn btn-warning mr-2" onclick="mostrarDiv('div2')">Div 2</button>
        <button class="btn btn-primary mr-2" onclick="mostrarDiv('div3')">Div 3</button>
        <button class="btn btn-warning" onclick="mostrarDiv('div4')">Div 4</button>
      </div>
      <div class="col-12">
        <div id="div1" class="formulario">
          <h4>Formulario 1</h4>
          <!-- Contenido del primer div -->
        </div>
        <div id="div2" class="formulario">
          <h4>Formulario 2</h4>
          <!-- Contenido del segundo div -->
        </div>
        <div id="div3" class="formulario">
          <h4>Formulario 3</h4>
          <!-- Contenido del tercer div -->
        </div>
        <div id="div4" class="formulario">
          <h4>Formulario 4</h4>
          <!-- Contenido del cuarto div -->
        </div>
      </div>
      <div class="col-12 mt-3">
        <hr>
        <input type="text" id="codigoBeneficiario" class="form-control mb-3" placeholder="Código de beneficiario">
        <button class="btn btn-primary float-right" onclick="guardar()">Guardar Datos</button>
      </div>
    </div>
  </div>

  <script>
    // Mostrar el primer div al cargar la página
    window.addEventListener('DOMContentLoaded', function() {
      mostrarDiv('div1');
    });

    function mostrarDiv(divId) {
      // Oculta todos los divs
      var divs = document.getElementsByClassName('formulario');
      for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = 'none';
      }
      
      // Muestra el div seleccionado
      var div = document.getElementById(divId);
      div.style.display = 'block';
    }

    function guardar() {
      var codigoBeneficiario = document.getElementById('codigoBeneficiario').value;
      // Realiza la lógica de guardar el código de beneficiario aquí
    }
  </script>
</body>
</html>
