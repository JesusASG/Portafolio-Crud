<?php
  function conectar_bd($clave,$basedatos)
  {
      $conexion =mysqli_connect('localhost', 'root', $clave, $basedatos);

      /* Comprobar la conexion */
      if (mysqli_connect_errno()){
        printf("Fallo la conexion: %s\n", mysqli_connect_error());
        die('Con conexion (' . $conexion->connect_errno . ') ' . $conexion->connect_error);
      }

    return $conexion;
      
    }

    function consulta ($conexion,$consulta_sql)
     {
        $resultado=$conexion->query($consulta_sql);

        if (!$resultado)
        {
         echo 'No se pudo ejecutar la consulta: ' . $conexion->error;
         exit;
        }

     return  $resultado;
     }
?>