<!doctype html>
<html>
    <head>
        <title>Consulta de Aprendices</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="miscss/stilo.css" rel="stylesheet"/>
        <link href="micss/estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="divconsulta" class="container">
            <br>
            <br>
            <br>
            <div class="text-center">
            <div id="div2">
                <div id="div4" >
                    <form name="formulario" role="form" method="post"">
                    <div class="col-md-12">
                        <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                        <br> <br>
                        <div class="form-row">
                        <div class="form-group col-md-3">
                            <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" />
                        </div>

                        <div class="form-group col-md-3">
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="NOMBRES" />
                        </div>
                        <div class="form-group col-md-3">
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="APELLIDOS" />
                        </div>

                        <div class="form-group col-md-3">
                            <input class="btn btn-success" type="submit" value="CONSULTAR" >
                        </div>
                        </div>
                    <br>
                </div>
            </form>
            <br>
            </div>

            <div id="divconsulta2">
            <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
            {
            include('funciones.php');
            $vnumid=$_POST['numid'];
            $vnombres=$_POST['nombres'];
            $vapellidos=$_POST['apellidos'];
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from aprendices where trim(apre_numid) like '%{$vnumid}%' and (trim(apre_nombres) like '%{$vnombres}%' and trim(apre_apellidos) like '%{$vapellidos}%')");
            if($resultado->num_rows>0)
                {
                while ($fila = $resultado->fetch_object())
                {
                    echo $fila->apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombres." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
                }
            } 
            else{
                echo "No existen registros";
                }
            $miconexion->close();
            }?>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>