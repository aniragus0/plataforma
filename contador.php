<?php
    include("conexion.php");
	include("conexioncmb.php");
?>	
	<?php 
    
    //Variables recibidas por POST de nuestra conexión AJAX
   $sede = $_POST['idsede'];
   $curso = $_POST['idcurso'];
	
	 $numero_contador=0;
	 $leyenda="";
	 $cupo=0;
	
 
    //Variable donde recogemos el resultado de la consulta
    $numero_contador = null;
	$sql = 'SELECT * FROM inscripcion where idcedeprom = "'.$sede.'" AND idcurso = "'.$curso.'" ';
	$result = mysql_query($sql); 
 	$numero = mysql_num_rows($result);
  	$numero_registros = $numero;
 
	$sql = 'SELECT cupo FROM sedes where idcedeprom = "'.$sede.'" AND idcurso = "'.$curso.'"';


        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
                 
            $cupo =($row['cupo']);
            
        }

        cerrarConexion($db, $result);
 
 $numero_contador= 0;
  $numero_contador= $cupo - $numero_registros;
   "<script type='text/javascript'>

         alert(' YA NO HAY LUGARES DISPONIBLES PARA EL CURSO:  $curso  EN LA SEDE: $sede ' );
        </script>";
 
  
    //Mostramos el resultado. Este 'echo' será el que recibirá la conexión AJAX
$leyenda= " de ";
     echo $numero_contador;
	 echo $leyenda;
	 echo $cupo;
?>


