<?php

$conexion = new mysqli("localhost","root","root","unedeprom",3306);
    
//____________________Cursos____________________
	
	
	

	$strConsulta = "select id, nombre from cursos WHERE estatus ='ABIERTO'";
	$result = $conexion->query($strConsulta);
	$cboCursos = '<option value="0">SELECCIONE CURSO</option>';
	while( $fila = $result->fetch_array() )
	{
		$cboCursos.='<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
	}
	//echo $cboCursos;
//_______________Sedes Cursos_________________________
	
	
	if(isset($_POST["idcurso"]))
	{
		$opciones = '<option value="0">SELECCIONE UNA SEDE</option>';
		
		//$strConsulta = "select id, idcedeprom from sedes where idcurso = ".$_POST["idcurso"];
	
		//$strConsulta = "select s.idcedeprom, c.cedeprom from cedeprom c, sedes s where s.idcedeprom =c.id and idcurso = ".$_POST["idcurso"];
$strConsulta = "select s.idcedeprom, c.cedeprom from cedeprom AS c INNER JOIN sedes AS s ON s.idcedeprom =c.id and s.estatus_sede='ABIERTA' and idcurso = ".$_POST["idcurso"];	
	
		$result = $conexion->query($strConsulta);
		

		while( $fila = $result->fetch_array() )
		{
			$opciones.='<option value="'.$fila["idcedeprom"].'">'.$fila["cedeprom"].'</option>';
		}

		echo $opciones;
	}
	//________________________________________
	
	//________________________________________
?>