<!doctype html>
<html>

<head>
    <title>Registro de programa</title>
    <meta http-equiv="Content-Type" content="text/html; charsert=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">        
    <link href="micss/estilos.css" rel="stylesheet" />
    <script src="js/boostrap.js"></script>
</head>

<body>
    <div id="div1" class="container">
        <br>
        <div class="text-center">
        <div id="div2">
            <?php
            session_start();
            if (!empty($_SESSION['Tipo_usuario'])) {
            ?>
                <img src="img/logosena.png" width="300" height="300"> <?php
                                                                    }
                                                                        ?>
            <div id="div3">
                <?php
                if ($_SESSION['Tipo_usuario'] == 'ADMINISTRADOR') {
                ?>
                    <form id="formulario" role="form" method="post" action="guardado_programa.php">
                        <div class="col-md-12">
                            <strong class="lgris">INGRESE DATOS DEL PROGRAMA</strong>
                            <br>
                                <div class="form-group">
                                    <label class="lgris"></label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="nombreprograma" value="" placeholder="NOMBRES DEL PROGRAMA" required />
                            <br>
                            <div class="form-row">
                                <div class="form-group col-xs-2">
                                    <select class="form-control" name="tipoprograma">
                                        <option value="TIPOPROGRAMA" selected>TIPO DE PROGRAMA</option>
                                        <option value="CORTO">CORTO</option>
                                        <option value="PRESENCIAL">PRESENCIAL</option>
                                        <option value="VIRTUAL">VIRTUAL</option>
                                    </select>
                            <br>
                            <input class="btn btn-success" type="submit" value="GUARDAR">
                        </div>
                    </form>
                <?php
                } 
                else 
                {
                echo "No tiene permisos para realizar esta accion";
                }
                ?>
                <br>
            </div>
            </div>
        </div>
    </div>
</body>
</html>