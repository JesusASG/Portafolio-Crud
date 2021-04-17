<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html;  charset=utf-8">
        <meta name="viewport" content="width=device-width,  initial-scale=1, shrink--to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="micss/estilos.css" rel="stylesheet"/>
        <script src="js/boostrap.js"></script>
    </head>
    
    <body>
        <div id="div1" class="container">
            <br>
            <div class="text-center">
            <div id="div2">
                <img src="img/logosena.png" width="250" height="250"> 
                <div id="div3">
                    <form id="formulario" method="post" action="menu.php">
                        <br>
                        <strong class="lgris">INGRESE SU USUARIO Y CONTRASEÑA PARA INICIAR SESION</strong>
                        <br>
                        <label class="lgris">NOMBRE DE USUARIO</label>
                        <br>
                        <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                        <br>
                        <label class="lgris">CONTRASEÑA</label>
                        <br>
                        <input type="password" name="clave" value="" required/>
                        <br><br>
                        <input class="btn btn-success" type="submit" value="INICIAR SESION">
                        <br><br>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>