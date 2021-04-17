<?php
 include('funciones.php');
 session_start();

 $_SESSION['nusuario']=$_POST['usuario'];
 
 $_SESSION['nclave']=$_POST['clave'];

 $_SESSION['nclave'] = $_POST['clave'];


 $miconexion=conectar_bd('', 'sena_bd');
 
 $resultado=consulta($miconexion,"select * from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}'");

?>
<!DOCTYPE html>
<html>
<head>
        <title>Menu principal</title>
        <meta http-equiv="Conten-Type" conten="text/html; charset=utf-8">
        <meta name="viewport" conten="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="micss/estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="div1" class="container">
        <br>
        <div class="text-center">
        <div id="div2">
          <?php 
          if($resultado->num_rows>0) 
           { 
             ?>
           <img src="img/logosena.png" width="300" height="300">
            <?php 
             } 
              ?>
                 <div id="div3">
                 <?php
                   if($resultado->num_rows>0)
                     {
                        $fila = $resultado->fetch_object();
                        $_SESSION['Tipo_usuario']=$fila->usua_tipo;
                     ?>
                    <label class="lgris">BIENVENIDO  <?php echo $_SESSION['nusuario'] ?></label><br>
                    <input style="width:40%;" class="btn btn-success" Type="button" onclick="location.href ='registro_aprendiz.php'" value="Registro de aprendices">
                    <input style="width:40%;" class="btn btn-success" Type="button" onclick="location.href ='consulta_aprendiz.php'" value="Consulta de aprendices">
                    <br> <br>
                    <input style="width:40%;" class="btn btn-success" Type="button" onclick="location.href ='modificar_aprendiz.php'" value="Actualizacion de Aprendices">
                    <input style="width:40%;" class="btn btn-success" Type="button" onclick="location.href ='borrar_aprendiz.php'" value="Borrar aprendices">
                    <br><br>
                    <input style="width:40%;" class="btn btn-success" Type="button" onclick="location.href ='crear_programa.php'" value="Crear programa">
                    <input style="width:40%;" class="btn btn-success" Type="button" onclick="location.href ='consultar_programa.php'" value="Consultar programa">
                    <br><br>
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='index.php'" value="Modificar programa">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='borrar_programa.php'" value="Eliminar programa">
                    <br><br>
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='index.php'" value="Crear ficha">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='index.php'" value="Consultar ficha">
                    <br><br>
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='index.php'" value="Modificar ficha">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='index.php'" value="Eliminar ficha">
                    <?php
                      }
                      else
                      {
                      echo "Usuario o clave invalido";
                      }
                        $miconexion->close();
                     ?>
                    <br><br>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
