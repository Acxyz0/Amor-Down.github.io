<!doctype html>
<html lang="en">

<head>
  <title>Evaluación Lenguaje</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <form method="post" action="procesar_formularioLenguaje.php">

      <br>
      <div class="input-group mb-3">
        <span class="input-group-text">Codigo del beneficiario</span>
        <input type="text" name="codigopaciente" id="name" class="form-control">
      </div>
      <br>


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
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Produce sonidos guturales?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Vocalización?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Sonrisa Social?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Presta atención?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Mantiene contacto visual?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Reconoce su nombre?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Busca una fuente sonora?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>


      <br>
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
            <th class="col-2" scope="row">¿Presenta babeo?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Mantiene su lengua dentro de la boca?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Mantiene su boca cerrada?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Mantiene su boca abierta?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          </tr>
        </tbody>
      </table>

      <br>
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
            <th class="col-2" scope="row">¿Expresión facial (Feliz, tristeza, enojo, sorprendido)?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Imita acciones simples (aplaudir, saltar, sentarse, gritar)?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Señala objetos o personas?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>

      <br>
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
            <th class="col-2" scope="row">¿Combian consonantes en silabas aisladas (ma, ca, da)?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Comprende palabras familiares (mamá, papá, hermano, hermana, abuela, abuelo?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Comprende el significado de no y si?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Usa sonidos para y solicitar objetos?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Ante la indicación mira hacia el objeto que se le pide que vea?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>

      <br>
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
            <th class="col-2" scope="row">¿A qué edad empezó a hablar?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Cuál fue su primer palabra?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Cuantas palabras aproximadamente dice?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿De cuantas palabras dice una frase?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Quién la atiende en casa cuando habla o se quiere comunicar?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">¿Con quién se relaciona en casa?</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>

      <!-- Falta evaluacion -->
      <br>
      <div class="container-fluid">
        <div>
          <p class="h2 text-center">Evaluación Mecanismo del Habla</p>
        </div>
      </div>
      <table class="table table-striped table-hover">

        <tbody>
          <tr class="d-flex">
            <th class="col-3" scope="row">Dientes superiores e inferiores</th>
            <td class="col-9"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-3" scope="row">Labio superior e inferior</th>
            <td class="col-9"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-3" scope="row">Paladar</th>
            <td class="col-9"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-3" scope="row">Lengua</th>
            <td class="col-9"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-3" scope="row">Respiración audible o inaudible</th>
            <td class="col-9"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>

      <br>

      <div class="container-fluid">
        <div>
          <p class="h2 text-center">Articulación</p>
        </div>
      </div>
      <br>
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
            <th class="col-2" scope="row">Árbol</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Bebe</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Casa</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Donas</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Elefante</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Foco</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Gato</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Chocolate</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Iguana</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Jaula</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Kiwi</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Leche</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Mamá</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Nena</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Oso</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Pato</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Queso</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Ratón</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Sofá</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Tomate</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Uva</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Vaca</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Waffle</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Xilófono</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Yoyo</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Zapato</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>

      <br>
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
            <th class="col-2" scope="row">Plato</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Profesor</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Fresa</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Tren</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Grillo</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Crema</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>


      <br>
      <div class="container-fluid">
        <div>
          <p class="h2 text-center">Sonidos onomatopéyicos de animales</p>
        </div>
      </div>
      <br>

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
            <th class="col-2" scope="row">Pollo</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Pato</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Gallo</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Perro</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Gato</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Vaca</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Oveja</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Cerdo</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Serpiente</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">tigre</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>

      <br>
      <div class="container-fluid">
        <div>
          <p class="h2 text-center">Sonidos onomatopéyicos, medios de transporte</p>
        </div>
      </div>
      <br>
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
            <th class="col-2" scope="row">Carro</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Moto</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
          <tr class="d-flex">
            <th class="col-2" scope="row">Tren</th>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
            <td class="col-2 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
            <td class="col-6"><textarea class="form-control" rows="2"></textarea></td>
          </tr>
        </tbody>
      </table>

      <div>
        <span class="input-group-text">Observaciones</span>
        <textarea class="form-control" rows="10" id="comment" name="text"></textarea>
      </div>
      <br>

      <button type="submit" class="btn btn-primary">Siguiente</button>
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>