<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ejemplo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!--Se puede usar la libreria CSS de introjs comprimida como otra opcion--> 
    <!-- <link rel="stylesheet" href="assets/css/introjs/introjs.min.css"> -->

</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de Registro</h1>
        
        <form action="submit.php" method="POST" class="form-horizontal">
            <!-- Campo de texto -->
            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">Nombre Completo:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre completo">
                </div>
            </div>

            <!-- Campo de número -->
            <div class="form-group">
                <label for="edad" class="col-sm-3 control-label">Edad:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Escribe tu edad">
                </div>
            </div>

            <!-- Campo de selección -->
            <div class="form-group">
                <label for="pais" class="col-sm-3 control-label">País:</label>
                <div class="col-sm-9">
                    <select class="form-control" id="pais" name="pais">
                        <option value="mx">México</option>
                        <option value="us">Estados Unidos</option>
                        <option value="es">España</option>
                        <option value="ar">Argentina</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="mySelect" class="col-sm-3 control-label">Opciones:</label>
                <div class="col-sm-9">
                    <select  class="form-control" id="mySelect" size="5"> <!-- Tamaño visible de 5, habilita scroll si hay más -->
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                        <option value="6">Option 6</option>
                        <option id="option7" value="7">Option 7</option>
                        <option value="8">Option 8</option>
                        <option value="9">Option 9</option>
                        <option value="10">Option 10</option>
                    </select>
                </div>
            </div>

            <!-- Radio buttons -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Género:</label>
                <div id="grup"class="col-sm-9">
                    <div class="radio">
                        <label>
                            <input type="radio" name="genero" value="masculino" checked> Masculino
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="genero" value="femenino"> Femenino
                        </label>
                    </div>
                </div>
            </div>

            <!-- Checkbox -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Preferencias:</label>
                <div id="grup2" class="col-sm-9">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="preferencia[]" value="musica"> Música
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="preferencia[]" value="deportes"> Deportes
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="preferencia[]" value="lectura"> Lectura
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="button" id="volverPaso3" class="btn btn-default">Click</button>
                </div>
            </div>

            <!-- Campo de fecha -->
            <div class="form-group">
                <label for="fecha" class="col-sm-3 control-label">Fecha de Nacimiento:</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="fecha" name="fecha">
                </div>
            </div>

            <!-- Campo de archivo -->
            <div class="form-group">
                <label for="foto" class="col-sm-3 control-label">Subir Foto:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
            </div>

            <!-- Botones -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button id="resetid" type="reset" class="btn btn-default">Limpiar</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Se puede usar la libreria JS de introjs comprimida como otra opcion--> 
    <!-- <script src="assets/js/introjs/intro.min.js"></script> -->

    <!--libreria JS y CSS de introjs desde cdn--> 
    <script src="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/intro.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css">

    <script src="assets/js/introjs_steps/view_steps2.js"></script>
</body>
</html>
