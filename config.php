<?php
define('MYSQL_SERVER','localhost');
define('MYSQL_DB','genesis');
define('MYSQL_USER','root');
define('MYSQL_PASS','');

$conexion= mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASS,MYSQL_DB);

session_start();
if (!$conexion) {
    die('Error de Conexión: (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
}

function ejecutar_query($con, $sql){
	$res = mysqli_query($con,$sql);
	if($res===false){
		echo $sql;
		echo "<hr>";
		die(mysqli_error($con));
	}	
	return $res;
}


// Devuelve un array con los reultados de la consulta (parametros: conexion a la base, tabla, condicion de SELECT)
// En caso de error corta el programa e imprime el error
function sql_assoc($con,$table,$condition){ 
	$sql = "SELECT * from ".$table." WHERE ".$condition;
	$query = mysqli_query($con,$sql);
	if(!$query){
		echo $sql;
		echo "<br>";
		return "Error al realizar consulta: (".mysqli_errno($con).") ".mysqli_error($con);
	}else{
		$assoc = mysqli_fetch_assoc($query);
		return $assoc;
	}
}

?>
