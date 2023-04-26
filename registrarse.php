<!DOCTYPE html>
<html>
    <head>
        <title>Registrarse</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/registrarse.css">
    </head>
    <body>
        <div class="container" id="registration-form">
            <div class="col-md-9 centrar">
                <div class="row contenedor">
                    <div class="col-md-6 meme">
                        <script type="text/javascript">
                        imagenes = ['imagenes/registrointento1.jpg', 'imagenes/xd.jpg', 'imagenes/homero.jpg', 'imagenes/bachiller.jpg', 'imagenes/xdxd.jpg', 'imagenes/meme1.jpg', 'imagenes/lisa.jpg'];
                        document.write('<img class="imagen" src="' + imagenes[Math.floor(Math.random() * imagenes.length)] + '" />');   
                        </script>
                    </div>
                    <div class="col-md-6">
                        <div class="frm">
                            <h1>Crea tu cuenta</h1>
                            <form method="post" action="registrar.php">
                                <div class="form-group ">
                                    <label for="name">Nombre Completo</label>
                                    <input type="text" name="nombre_completo" class="form-control"  placeholder="Nombre y apellido"  required  value="<?php if(count($_GET)>0){if (isset($_GET['nombre'])){echo $_GET['nombre'];}} ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">Usuario</label>
                                    <input type="text" name="usuario" class="form-control"  placeholder="Ingresar Usuario" required value="<?php if(count($_GET)>0){if (isset($_GET['usuario'])){echo $_GET['usuario'];}} ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email" >Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Ingresar Email" required value="<?php if(count($_GET)>0){if (isset($_GET['email'])){echo $_GET['email'];}} ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Contraseña</label>
                                    <input type="password" name="clave" class="form-control"  placeholder="Ingresar contraseña" required>
                                </div>
                                <div class="form-group">
                                  <div class="form-group">
                                    <label for="pwd">Confirmar Contraseña</label>
                                    <input type="password" name="confclave" class="form-control"  placeholder="Confirme su contraseña" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg onclick">Registrarse</button>
                                </div>
                                <a href="iniciarSesion.php">Ya tengo una cuenta.</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php //alertas: borrar mas tarde para poner mensaje de error en el alta
	if(isset($_GET['user_exist'])){
		echo "<script>alert('Usuario ya existente');</script>";
	}
	if(isset($_GET['not_valid_email'])){
		echo "<script>alert('Ingrese un correo yahoo, hotmail o google');</script>";
	}
	if(isset($_GET['mail_exist'])){
		echo "<script>alert('Correo ya existente');</script>";
	}
	if(isset($_GET['invalid_pass'])){
		echo "<script>alert('Asegurate de que las claves sean iguales');</script>";
	}
    if(isset($_GET['registration'])){
        echo "<script>alert('Registro exitoso');</script>";
    }
?>
