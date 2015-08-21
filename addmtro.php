<?php
// Notificar todos los errores excepto E_NOTICE
// Este es el valor predeterminado establecido en php.ini
error_reporting(E_ALL ^ E_NOTICE);
?>


<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/niceforms.js"></script>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/formcheck.js"></script>


<?php
//print_r($_POST);
require_once("conexion.php");
require_once("conexioncmb.php");
   
       
      date_default_timezone_set('america/mexico_city');
        //Imprimimos la fecha actual dandole un formato
        $fechahora=date("Y-m-d h:i:s");
     




   
   






$sql="SELECT * FROM maestros WHERE rfc='".$_POST["rfc"]."'";

      $res=mysql_query($sql);

      if(mysql_num_rows($res)>=1)

     {

        echo "<script type='text/javascript'>

         alert('El Registro ya Existe en la Base de Datos... (NO SE GUARDO REGISTRO)');
		window.history.back();
        </script>";

      }

      else

     {




$sql="insert into maestros


values
(null,'".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["rfc"]."','".$_POST["curp"]."','".$_POST["sexo"]."','".$_POST["grado"]."','".$_POST["cboMunicipios"]."','".$_POST["localidad"]."','".$_POST["cboCedeprom"]."','".$_POST["nivel"]."','".$_POST["modalidad"]."','".$_POST["cct"]."','".$_POST["telefono"]."','".$_POST["email"]."','".$_POST["obs"]."','".$fechahora."')";
//echo "$sql";
$res=mysql_query($sql,$con);

/*echo "<script type=''>
	alert('El Cliente fue ingresado correctamente');
	window.location='lista.php';
</script>";*/


$nom= $_POST["nombre"];
$ape=$_POST["apellidos"];
echo nl2br("
	   	<div class=\"MsgSent\">
			<h1> Regitro Exitoso </h1>
			<p> El Maestro <b>$nom </b> <b>$ape </b>, Ha Quedado Registrado Correctamente!<br /> 
			<br /><strong>$rnom </p></strong>
			
		</div>
		
		");
		
	
 }
 
 
?>

</form>

