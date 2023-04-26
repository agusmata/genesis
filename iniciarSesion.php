<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar sesion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/iniciarSesion.css">
    </head>
    <body>
        <div class="container ">
            <div class="row align-items-center">
               <div class="col-md-9 align-self-center centrar">
                    <div class="row contenedor">
                        <div class="col-md-6 meme">
                            <script type="text/javascript">
                                imagenes = ['imagenes/frog.jpg', 'imagenes/xd.jpg', 'imagenes/homero.jpg'];
                                document.write('<img class="imagen" src="' + imagenes[Math.floor(Math.random() * imagenes.length)] + '" />');
                            </script> 
                        </div>
                        <div class="col-md-6">
                            <div class="frm">
                                <h1>Iniciar Sesion</h1>
                                <form method="post" action="login.php">
                                    <div class="form-group">
                                        <label for="username">Usuario</label>
                                        <input type="text" name="usuario" class="form-control"  placeholder="Ingresar Usuario" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Contraseña</label>
                                        <input type="password" name="clave" class="form-control"  placeholder="Ingresar contraseña" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Iniciar Sesion</button>
                                    </div>
                                </form>
                                <a class="linkregistro" href ="registrarse.php">¿No tienes cuenta? Registrate.</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php //alertas: borrar mas tarde para poner mensaje de error en el alta
		if(isset($_GET['pass_error'])){
			echo "<script>alert('Clave Incorrecta');</script>";
		}
		if(isset($_GET['user_not_exist'])){
			echo "<script>alert('Usuario no existente');</script>";
		}
		?>
    </body>
</html>