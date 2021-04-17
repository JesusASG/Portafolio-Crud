<!doctype html>
<html>
    <head>
        <title>Modificación del Programa</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="micss/estilo.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
     <div id="divconsulta" class="container">
     <center><strong class="lgris">Ingrese criterio de busqueda</strong></center>
        <br>
        <div id="div2">
            <div id="div4" >
                <form name="formulario" role="form" method="post"">
                <div class="col-md-12">
                    <br> <br>
                    <div class="form-row">
                    <div class="form-group col-md-3">
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombreprograma" value="" placeholder="NOMBRE DEL PROGRAMA" />
                        </div>
                  <div class="form-group col-md-3">
                  <input class="btn btn-success" type="submit" value="Consultar" >
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
            session_start();
            $vnombreprograma=$_POST['nombreprograma'];
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from programa where Progra_Nombre='{$vnombreprograma}'");
            if($resultado->num_rows>0)
            {
            $fila = $resultado->fetch_object();
            $_SESSION['ide2']=$fila->Progra_id;
            ?>
            <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
                <div class="col-md-12">
                <strong class="lgris">Datos del programa</strong><br>

                <label class="lgris">Id:</label>
                <input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->Progra_id ?>"/>

                <label class="lgris">Nombre del programa:</label>
                <input class="form-control" style="text-transform: uppercase;" type="text" name="nombreprograma" required value="<?php echo $fila->Progra_Nombre ?>"/>
                <br>

                <div class="form-group col-xs-2">
                        <select class="form-control" name="tipoprograma" required value="<?php echo $fila->tiposp_tipo ?>">
                        <option value="" selected>SELECIONAR TIPO DE PROGRAMA</option>
                        <option value="1">PRESENCIAL</option>
                        <option value="2">VIRTUAL</option>
                        <option value="3">CORTO</option>
                        </select>
                </div>

                <br>
            <input class="btn btn-success" type="submit" value="Actualizar" >
            <br>
            </div>
        </form>
        <?php
        }
        else{
        echo "No existen registros";
        }
        $miconexion->close();
    }?>
    </div>
    </div>
  </div>
</body>
</html>