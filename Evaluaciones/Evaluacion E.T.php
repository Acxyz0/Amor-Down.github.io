<!doctype html>
<html lang="en">

<head>
    <title>Evaluación E.T.</title>
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
        <form method="post" action="procesar_formularioET.php">
            <!-- Encabezado -->
            <div class="container-fluid">
                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text">Codigo del beneficiario</span>
                    <input type="text" name="codigopaciente" id="name" class="form-control">
                </div>
                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre del Paciente</span>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Edad</span>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Diagnostico</span>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Responsable del Paciente</span>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div>
                    <span class="input-group-text">Datos del Paciente</span>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
            </div>
            <br>
            <br>

            <!-- Percepcion Sensorio Motriz -->
            <div class="container-fluid">
                <div>
                    <p class="h2 text-center">PERCEPCIÓN SENSORIO MOTRIZ</p>
                </div>
            </div>

            <!-- Tabla -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="d-flex">
                        <th class="col-2 text-center" scope="col">Área</th>
                        <th class="col-3 text-center" scope="col">Actividades</th>
                        <th class="col-5 text-center" scope="col">Evaluación</th>
                        <th class="col-1 text-center" scope="col">Si</th>
                        <th class="col-1 text-center" scope="col">No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex">
                        <th class="col-2" scope="row">Percepción Visual</th>
                        <td class="col-3">Sigue objetos con la vista</td>
                        <td class="col-5"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row">Percepción Visual</th>
                        <td class="col-3">Responde al seguimiento visual con objetos</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row">Percepción Tactil</th>
                        <td class="col-3">Acepta todas las texturas</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                    <tr class="d-flex">
                        <th class="col-2" scope="row">Percepción Tactil</th>
                        <td class="col-3">Explora los objetos con la mano</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                    <tr class="d-flex">
                        <th class="col-2" scope="row">Percepción Tactil</th>
                        <td class="col-3">Manipula objetos y texturas</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                    <tr>

                </tbody>
            </table>

            <!-- Motricidad -->
            <div class="container-fluid">
                <div>
                    <p class="h2 text-center">MOTRICIDAD</p>
                </div>
            </div>

            <!-- Tabla -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="d-flex">
                        <th class="col-2 text-center" scope="col">Área</th>
                        <th class="col-3 text-center" scope="col">Actividades</th>
                        <th class="col-5 text-center" scope="col">Evaluación</th>
                        <th class="col-1 text-center" scope="col">Si</th>
                        <th class="col-1 text-center" scope="col">No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Apreta el dedo índice del examinador</td>
                        <td class="col-5"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Movimiento de cabeza en posición prona</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Mantiene la cabeza erguida al llevarlo en una posición sentada</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">En posición prona se levanta así mismo</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Camina agarrad@ a las paredes u objetos</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Gatea</td>
                        <td class="col-5"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Da vuelta</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Construye una torre con cubos</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Tiene agarre de pinza</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Tiene agarre de toda la mano</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                </tbody>
            </table>

            <!-- Social -->
            <div class="container-fluid">
                <div>
                    <p class="h2 text-center">SOCIAL</p>
                </div>
            </div>

            <!-- Tabla -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="d-flex">
                        <th class="col-2 text-center" scope="col">Área</th>
                        <th class="col-3 text-center" scope="col">Actividades</th>
                        <th class="col-5 text-center" scope="col">Evaluación</th>
                        <th class="col-1 text-center" scope="col">Si</th>
                        <th class="col-1 text-center" scope="col">No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Fija la mirada en el rostro del examinador</td>
                        <td class="col-5"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Hace mímicas en respuesta a estímulos que le agraden </td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Imita gestos</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Interactúa</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Ayuda en tareas simples</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                </tbody>
            </table>

            <!-- Lenguaje -->
            <div class="container-fluid">
                <div>
                    <p class="h2 text-center">LENGUAJE</p>
                </div>
            </div>

            <!-- Tabla -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="d-flex">
                        <th class="col-2 text-center" scope="col">Área</th>
                        <th class="col-3 text-center" scope="col">Actividades</th>
                        <th class="col-5 text-center" scope="col">Evaluación</th>
                        <th class="col-1 text-center" scope="col">Si</th>
                        <th class="col-1 text-center" scope="col">No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Balbucea</td>
                        <td class="col-5"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Dice al menos 3 palabras</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Vocaliza sonidos diferentes</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Nombra objetos</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Señala lo que desea</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>
                    <tr class="d-flex">
                        <th class="col-2" scope="row"></th>
                        <td class="col-3">Forma frases completas</td>
                        <td class="col-5 text-center"><textarea class="form-control" rows="2"></textarea></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="si"></td>
                        <td class="col-1 text-center"><input class="form-check-input" type="checkbox" name="opciones[]" value="no"></td>
                    </tr>

                </tbody>
            </table>

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