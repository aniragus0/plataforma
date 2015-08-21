<?php
	include("conexion.php");
	
	$query = "SELECT
					
					u.nombre,
					u.usuario,
					u.password,
					u.nivel,
					u.sede,
					u.status
				FROM
					usuarios AS u
				WHERE
					u.usuario = '".$_POST["text_usuario_id"]."'
					AND u.password = '".$_POST["text_clave_id"]."'";
			
	$result = mysql_query($query,$link_unedeprom);
	if($row = mysql_fetch_assoc($result))
	{
		session_start();
		$_SESSION["autentificado"]= "SI";
		$_SESSION["nombre"] = $row["nombre"];
		$_SESSION["usuario"] = $row["usuario"];
		$_SESSION["password"] = $row["password"];
		$_SESSION["nivel"] = $row["nivel"];
		$_SESSION["sede"] = $row["sede"];
		$_SESSION["status"] = $row["status"];
		
		header("Location: ../../registrosmaestros.php");
	}
	else
	{
		header("Location: ../../index.php");
	}
?>