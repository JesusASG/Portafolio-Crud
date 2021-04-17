<!DOCTYPE html>
<html>
<head>
   <title>Modificacion de Aprendices</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width-device-width, initil-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link href="micss/estilos.css" rel="stylesheet"/>
   <script src="js/bootstrap.js"></script>
</head>
<body>
  <div id="divconsulta" class="container">
  <br>
  <div id="div2">
     <div id="div4">
          <form name="formulario" role="form" method="post">
          <div class="col-md-12">
            <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
            <br><br>
            <div class="form-row">
             <div class="form-group col-md-5">
             <input class="form-control" type="number" name="numid" min="9999" max="99999999999999" autofocus value="" placeholder="IDENTIFICACION"/> 
             </div>
             <div class="form-group col-md-3">
               <input class="btn btn-success" type="submit" value="CONSULTAR">
              </div>
            </div>
            <br>
          </form>
       <br>
    </div>
    <div id="divconsulta2">
    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST')
       {
         include('funciones.php');
         session_start();
         $vnumid=$_POST['numid'];
         $miconexion=conectar_bd('', 'sena_bd');
         $resultado=consulta($miconexion,"select * form aprendices where apre_numid='($vnumid)'");
         if($resultado->num_rows>0)
         {
           $fila = $resultado->fetch_object();
           $_SESSION['ide1']=$fila->apre_id;
           ?>
           <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
                  <div class="col-md-12">
                     <strong class="lgris=">DATOS DEL APRENDIZ</strong><br>
                     <label class="lgris">ID</label>
                     <input class="form-control" type="text" name="ide" disabled="disabled" value=""/>
                     ?php
                     echo $fila->apre_id
                     ?>
                     <label class="lgris">NOMBRES:</label>
                     <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" required/>
                     <?php
                     echo $fila->apre_nombres
                     ?>
                     <label class="lgris">APELLIDOS:</label>
                     <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" required/>
                     <?php
                     echo $fila->apre_apellidos
                     ?>
                     <label class="lgris">DIRECCION:</label>
                     <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="" required/>
                     <?php 
                     echo $fila->apre_direccion
                     ?>
                     <label class="lgris">Teléfono:</label>
                     <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" required/>
                     <?php 
                     echo $fila->apre_telefono
                     ?>
                     <br>
                     <input class="btn btn-primary" type="submit" value="Actualizar" >
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