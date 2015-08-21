<?php
error_reporting(E_ALL ^ E_NOTICE);
?>


<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/niceforms.js"></script>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/formcheck.js"></script>


<?php
require_once("conexion.php");
require_once("conexioncmb.php");
   
       
       
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
//echo $id;
$sql="update maestros "
			." set "
			." nombre='$nombre',"
			." apellidos='".$_POST["apellidos"]."',"
			." rfc='".$_POST["rfc"]."',"
			." curp='".$_POST["curp"]."',"
			." sexo='".$_POST["sexo"]."',"
			." grado='".$_POST["grado"]."',"
			." municipio='".$_POST["cboMunicipios"]."',"
			." localidad='".$_POST["localidad"]."',"
			." cedeprom='".$_POST["cboCedeprom"]."',"
			." nivel='".$_POST["nivel"]."',"
			." modalidad='".$_POST["modalidad"]."',"
			." cct='".$_POST["cct"]."',"
			." telefono='".$_POST["telefono"]."',"
			." email='".$_POST["email"]."',"
			." comentarios='".$_POST["obs"]."'"			
			." where "
			." id=$id";			
			
			
	
		$res=mysql_query($sql,$con);

echo "$sql";



$nom= $_POST["nombre"];
$ape=$_POST["apellidos"];
echo nl2br("
	   	<div class=\"MsgSent\">
			<h1> Actualizacion Exitosa </h1>
			<p> Los Datos del Maestro <b>$nom </b> <b>$ape </b>, Han Sido Actualizados Correctamente<br /> 
			<br /><strong> </p></strong>
			
		</div>
		
		");
		
 
 
?>



