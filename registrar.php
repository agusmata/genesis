	<?php
	require_once("config.php");
	
	///////////////////////////// Verificacion de usuario //////////////////////////////////
	$check_usuario=sql_assoc($conexion,"usuarios","usuario='".$_POST['usuario']."'");
	if(isset($check_usuario['usuario'])){
		header("location: registrarse.php?user_exist=true&nombre=".$_POST['nombre_completo']."&email=".$_POST['email']."&usuario=".$_POST['usuario']);
		die;
	}
	/////////////////////////////////// Correo Valido //////////////////////////
	$mail_result=sql_assoc($conexion,"usuarios","mail='".$_POST['email']."'");
	if(!strstr($_POST['email'],"yahoo.es")&&!strstr($_POST['email'],"outlook.es")&&!strstr($_POST['email'],"outlook.com")&&!strstr($_POST['email'],"hotmail.es")&&!strstr($_POST['email'],"gmail.com")&&!strstr($_POST['email'],"hotmail.com")&&!strstr($_POST['email'],"yahoo.com")){
		header("location: registrarse.php?not_valid_email=true&nombre=".$_POST['nombre_completo']."&email=".$_POST['email']."&usuario=".$_POST['usuario']);
		die;
	}
	////////////////////////////////// Correo existente //////////////////////////////////////
	if($mail_result){
		header("location: registrarse.php?mail_exist=true&nombre=".$_POST['nombre_completo']."&email=".$_POST['email']."&usuario=".$_POST['usuario']);
		die;
	}
	//////////////////////////////// Contraseñas iguales ////////////////////////////////////////
	if($_POST['clave']!==$_POST['confclave']){
		header("location: registrarse.php?invalid_pass=true&nombre=".$_POST['nombre_completo']."&email=".$_POST['email']."&usuario=".$_POST['usuario']);
		die;
	}else{
		//Si pasa todos los requisitos, los datos son guardados en variables
		$nombre = $_POST['nombre_completo'];
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];
		$clave = md5($_POST['clave']);
		////////////////////////////////Empiezan los querys//////////////////////////////
		$query = mysqli_prepare($conexion,"INSERT INTO usuarios(nombre_completo,usuario,mail,contrasena) VALUES( ? , ? , ? , ?)");
		echo mysqli_error($conexion);
		mysqli_stmt_bind_param($query,"ssss",$nombre,$usuario,$email,$clave);
		if(mysqli_execute($query)){
			echo "Registrado correctamente!";
			header("location: registrarse.php?registration=true");
			die;
		}else{
			echo "Ocurrio un error al ingresar tus datos";
			mysqli_error($conexion);
		}
	}
?>