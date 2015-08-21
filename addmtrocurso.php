<?php
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
   
       
     $sede = $_POST['cboSedes'];
     $curso = $_POST['cboCursos'];
	 $id = $_POST['id'];
	 

	 $leyenda="";
	 $cupo=0;
	
 
    //Variable donde recogemos el resultado de la consulta
 
	$sql = 'SELECT * FROM inscripcion where idcedeprom = "'.$sede.'" AND idcurso = "'.$curso.'" ';
	$result = mysql_query($sql); 
 	$numero = mysql_num_rows($result);
  	
 
 
 
 
	$sql = 'SELECT cupo FROM sedes where idcedeprom = "'.$sede.'" AND idcurso = "'.$curso.'"';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $cupo =($row['cupo']);
            
        }

        cerrarConexion($db, $result);
 
 
  
$cupo =$cupo - 1;
//echo "cupo:";
//echo "$cupo";
//echo "cuenta:";
//echo "$numero";
//echo "$sede";
//echo "$curso";

$sql = 'SELECT nombre FROM cursos where id= "'.$curso.'"';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $nombre_curso =($row['nombre']);
            
        }

        cerrarConexion($db, $result);

$sql = 'SELECT cedeprom FROM cedeprom where id= "'.$sede.'"';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $nombre_sede =($row['cedeprom']);
            
        }

        cerrarConexion($db, $result);



if ($numero > $cupo)
 {

       echo "<script type='text/javascript'>

         alert(' YA NO HAY LUGARES DISPONIBLES PARA EL CURSO:  $nombre_curso  EN LA SEDE: $nombre_sede ' );
		 
		window.history.back(); 
        </script>";
		

      }

      else

     {



//$sql='SELECT * FROM inscripcion where idmaestro="'.$sede.'" AND idcedeprom = "'.$sede.'" AND idcurso = "'.$curso.'"';
$sql='SELECT * FROM inscripcion where idmaestro="'.$sede.'" AND idcurso = "'.$curso.'"';

      $res=mysql_query($sql);

      if(mysql_num_rows($res)>=1)

     {
		 
    
$sql='SELECT idcedeprom,idcurso FROM inscripcion where idmaestro="'.$sede.'" AND idcurso = "'.$curso.'"';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $busca_sede =($row['idcedeprom']);
            $busca_curso =($row['idcurso']);
        }

        cerrarConexion($db, $result);
		
		
$sql='SELECT cedeprom FROM cedeprom where id="'.$busca_sede.'" ';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $cedeprom =($row['cedeprom']);
            
        }

        cerrarConexion($db, $result);

$sql='SELECT nombre FROM cursos where id="'.$busca_curso.'" ';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $nombrecurso =($row['nombre']);
            
        }

        cerrarConexion($db, $result);

        echo "<script type='text/javascript'>

         alert('El Maestro ya Esta Inscrito en el Curso: ** $nombrecurso ** en la Sede: ** $cedeprom ** (NO SE GUARDO REGISTRO)');
		 window.history.back(); 

        </script>";

      }

      else

     {






$sql="insert into inscripcion


values
(null,'".$_POST["id"]."','".$_POST["cboCursos"]."',null,'".$_POST["cboSedes"]."',null,null)";
//echo "$sql";
$res=mysql_query($sql,$con);

$nom= $_POST["nombre"];
$ape=$_POST["apellidos"];
echo nl2br("
	   	<div class=\"MsgSent\">
			<h1> Inscripcion Exitosa </h1>
			<p> El Maestro <b>$nom </b> <b>$ape </b>, Ha Quedado Inscrito al Curso Correctamente<br /> 
			<br /><strong>$rnom </p></strong>
			
		</div>
		
		");
	
 
 }
 }
?>



