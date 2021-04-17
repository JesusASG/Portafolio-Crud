<!doctype html>
<html>
 <head>
    <title>Eliminación de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="micss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
 </head>
 <body>
    <div id="divconsulta" class="container">
    <center> <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong> </center>
        <br>
         <div id="div2">
            <div id="div4" >
               <form name="formulario" role="form" method="post"">
               <div class="col-md-12">
                  <br> <br>
                  <div class="form-row">
                  <div class="form-group col-md-5">
                  <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" />
                  </div>
                  <div class="form-group col-md-3">
                  <input class="btn btn-success" type="submit" value="ELIMINAR" >
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
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from aprendices where apre_numid='{$vnumid}'");
            $resultado2=consulta($miconexion,"delete from aprendices where apre_numid='{$vnumid}'");
            if($resultado->num_rows>0)
               {
               $fila = $resultado->fetch_object();
               echo $fila->apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombres." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";

               if($resultado2)
               echo "<br> Datos borrados exitosamente";
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