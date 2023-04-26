<?php 
	require_once("config.php");
	if (!isset($_SESSION['usuario'])){
		header("location: iniciarSesion.php");
	}
?>
<html>
    <head>
        <title>Inicio</title>
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/chatsBarra.css">
    </head>
    <body>
        <header>
            <?php
                include_once "navbar.php";
            ?>
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="seccionMemes col-md-7">
						<br>
                        <div class="row justify-content-center">
                            <img src="memes/meme1.jpg" height="400px" width="600">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4  interac">
                                        <img src="imagenes/iconos/like%20(1).png" class="interacciones">
                                        <img src="imagenes/iconos/share.png" class="interacciones">
                                        <img src="imagenes/iconos/comment.png" class="interacciones">
                                    </div>
                                </div>
                            </div>
                        </div>
						<br>
						<div class="row justify-content-center">
                            <img src="memes/meme2.jpg" height="400px" width="600">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4  interac">
                                        <img src="imagenes/iconos/like%20(1).png" class="interacciones">
                                        <img src="imagenes/iconos/share.png" class="interacciones">
                                        <img src="imagenes/iconos/comment.png" class="interacciones">
                                    </div>
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="row justify-content-center">
                            <img src="memes/meme3.jpg" height="400px" width="600">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4  interac">
                                        <img src="imagenes/iconos/like%20(1).png" class="interacciones">
                                        <img src="imagenes/iconos/share.png" class="interacciones">
                                        <img src="imagenes/iconos/comment.png" class="interacciones">
                                    </div>
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="row justify-content-center">
                            <img src="memes/meme4.jpg" height="400px" width="600">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4  interac">
                                        <img src="imagenes/iconos/like%20(1).png" class="interacciones">
                                        <img src="imagenes/iconos/share.png" class="interacciones">
                                        <img src="imagenes/iconos/comment.png" class="interacciones">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="seccionDerecha col-3 ">
                        <div class="row">
                           <div class="seccionTags col-md-12">
                               <h4>Tags más usados</h4>
                               <p class="text-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde accusamus quos velit, adipisci sapiente similique, nesciunt consectetur quaerat molestiae ipsum, maxime voluptate quam in culpa autem, error vitae? Atque, aperiam. </p>
                            </div>
                            <div class="seccionCuentas col-md-12">
                                <h4>Cuentas destacadas</h4>
                                <p class="text-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam minima, optio blanditiis recusandae architecto at quo facilis et deleniti excepturi aliquam cupiditate doloremque animi. Quaerat voluptatibus alias esse praesentium nostrum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolorum at aliquid? Dolores, magni atque. Reiciendis saepe animi dolorem nemo illum nam error sapiente facere, perferendis impedit vel aspernatur, quia!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
            <?php 
                include_once "chatsBarra.php";
            ?>
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>


