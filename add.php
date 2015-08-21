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
$fecha="2012-11-16";
$nombrecurso= "PRIMER ENCUENTRO DOCENTE PARA LA MEJORA DE LA CONVIVENCIA ESCOLAR";


$sede = $_POST["cboSedes"];
$taller = $_POST["cboTalleres"];
  
   
       
      date_default_timezone_set('america/mexico_city');
        //Imprimimos la fecha actual dandole un formato
        $fechahora=date("Y-m-d h:i:s");
     




   
   
   
$sql = 'SELECT cupo FROM talleres where idsede = "'.$sede.'" AND taller = "'.$taller.'"';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $cupo =($row['cupo']);
            
        }

        cerrarConexion($db, $result);




$sql = 'SELECT * FROM regcursos where sede = "'.$sede.'" AND taller = "'.$taller.'" ';
$result = mysql_query($sql); 
$numero = mysql_num_rows($result);
$cupo =$cupo - 1;
echo "cupo:";
echo "$cupo";
echo "cuenta:";
echo "$numero";



if ($numero > $cupo)
 {

       echo "<script type='text/javascript'>

         alert(' YA NO HAY LUGARES DISPONIBLES PARA EL TALLER:  $taller  EN LA SEDE: $sede ' );
		window.history.back(); 
        </script>";
		

      }

      else

     {




$sql="SELECT * FROM regcursos WHERE rfc='".$_POST["rfc"]."'";

      $res=mysql_query($sql);

      if(mysql_num_rows($res)>=1)

     {

        echo "<script type='text/javascript'>

         alert('El Registro ya Existe en la Base de Datos... (NO SE GUARDO REGISTRO)');

        </script>";

      }

      else

     {




$sql="insert into regcursos


values
(null,'".$nombrecurso."','".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["rfc"]."','".$_POST["curp"]."','".$_POST["sexo"]."','".$_POST["grado"]."','".$_POST["municipio"]."','".$_POST["localidad"]."','".$_POST["cedeprom"]."','".$_POST["nivel"]."','".$_POST["modalidad"]."','".$_POST["cct"]."','".$_POST["telefono"]."','".$_POST["email"]."','".$_POST["cboSedes"]."','".$_POST["cboTalleres"]."','".$_POST["obs"]."','".$fechahora."')";
echo "$sql";
$res=mysql_query($sql,$con);

/*echo "<script type=''>
	alert('El Cliente fue ingresado correctamente');
	window.location='lista.php';
</script>";*/

echo nl2br("
	   	<div class=\"MsgSent\">
			<h1> Regitro Exitoso </h1>
			<p> El Maestro <b>$nom </b> <b>$ape </b>, Ha Quedado Registrado Correctamente!<br /> 
			<br /><strong>$rnom </p></strong>
			
		</div>
		
		");
		
		// Cerramos la conexion a la base de datos  
//include("cierra_conexion.php");  

// Confirmamos que el registro ha sido insertado con exito  

echo "  
<p>Los datos han sido guardados con exito.</p>  

  
";  
 }
 }
 
?>

</form>

