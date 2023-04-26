<?php
require_once ("config.php");/*
//Preparo el query y le asigno los valores ingresados por el usuario
 $query = mysqli_prepare($conexion,"SELECT usuario,clave FROM usuarios WHERE usuario = ? OR clave = ?");
 mysqli_stmt_bind_param($query,"ss",$_POST['usuario'],$_POST['clave']);
//Se ejecuta el query
 mysqli_execute($query);
//En esta funcion, guardo los valores traidos de la base de datos en las variables usuario y clave
 mysqli_stmt_bind_result($query,$usuario,$clave);
 mysqli_stmt_fetch($query);
 if($usuario == $_POST['usuario'] && $clave == md5($_POST['clave'])){
 	echo "Bienvenido ".$_POST['usuario'];
 }else{
 	echo "El usuario no existe";
 }*/


 $result=sql_assoc($conexion,"usuarios","usuario='".$_POST['usuario']."'");
 if(isset($_POST['usuario'])){
	if(md5($_POST['clave'])===$result['contrasena']){
		echo "Bienvenido ".$_POST['usuario']."";
		$_SESSION['usuario']=$result['usuario'];
		header("location: index.php");
	}else{
		header("location: iniciarSesion.php?pass_error=true");
	}
 }else{
	header("location: iniciarSesion.php?user_not_exist=true");
 }
 

?>