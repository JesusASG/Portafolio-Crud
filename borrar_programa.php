<!doctype html>
<html>
 <head>
    <title>Eliminación de Programa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="micss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
 </head>
 <body>
    <div id="divconsulta" class="container">
    <center> <strong class="lgris">Ingrese criterio de busqueda</strong> </center>
        <br>
         <div id="div2">
            <div id="div4" >
               <form name="formulario" role="form" method="post"">
               <div class="col-md-12">
                  <br> <br>
                  <div class="form-row">
                  <div class="form-group col-md-3">
                     <input class="form-control" style="text-transform:uppercase;" type="text" name="id" value="" placeholder="PROGRAMA" />
                     </div>
                  <div class="form-group col-md-3">
                  <input class="btn btn-success" type="submit" value="Eliminar" >
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
            $vid=$_POST['id'];
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from programa where Progra_Nombre='{$vid}'");
            $resultado2=consulta($miconexion,"delete from programa where Progra_Nombre='{$vid}'");
            if($resultado->num_rows>0)
               {
               $fila = $resultado->fetch_object();

               echo     "<p>Id Programa</p>";
               echo      $fila->Progra_id."<br><hr>
                      <p>Nombre del Programa</p>
                     ".$fila->Progra_Nombre."<br>";

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