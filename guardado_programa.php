<?php
include('funciones.php');
  $vnombreprograma=$_POST['nombreprograma'];
  $vtipoprograma=$_POST['tipoprograma'];

  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into programa (progra_nombre) values ('{$vnombreprograma}')");

  $resultado=consulta($miconexion,"insert into tiposprograma (tiposp_tipo) values ('{$vtipoprograma}')");

  if ($resultado)
   {
       echo "Guardado exitoso";
   }
?>