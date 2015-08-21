<?php


// Notificar todos los errores excepto E_NOTICE
// Este es el valor predeterminado establecido en php.ini
error_reporting(E_ALL ^ E_NOTICE);

?> 
<?php

// indicamos que la respuesta es en formato JSON
header("Content-type: text/x-json");

// nos conectamos
$conex = mysql_connect('localhost','root','root')
or die ('Error: imposible conectar con MySQL');

// seleccionamos la db
$db = mysql_select_db('unedeprom')
or die ('Error: no se puede seleccionar la base de datos');

// armamos las condiciones segun sea el caso ..
if($_POST['query']!='')   
$where = "WHERE ".mysql_real_escape_string($_POST['qtype'])." LIKE 
'%".
mysql_real_escape_string($_POST['query'])."%' ";
elseif($_POST['letter_pressed']!='')   
$where = "WHERE ".mysql_real_escape_string($_POST['qtype'])." LIKE 
'".
mysql_real_escape_string($_POST['letter_pressed'])."%' ";	
elseif($_POST['letter_pressed']=='#')   
$where = "WHERE ".mysql_real_escape_string($_POST['qtype'])." REGEX
P '[[:digit:]]' ";
else   $where ='';

// conseguimos el total de registros
$result = mysql_query('SELECT count(nombre) FROM maestros '.$where);
$row = mysql_fetch_array($result);
$total = $row[0];

// ordenar por X campo
$sortname = empty($_POST['sortname']) ? 'nombre' : mysql_real_escape_string
($_POST['sortname']);

// orden ascendente o descendente
$sortorder = empty($_POST['sortorder']) ? 'desc' : mysql_real_escape_string
($_POST['sortorder']);

// establecemos el orden
$sort = "ORDER BY $sortname $sortorder";

// numero de pagina por defecto 1
$page = (int)(empty($_POST['page']) ? 1 : $_POST['page']);

// numero de registros a mostrar
$rp = (int)(empty($_POST['rp']) ? 10 : $_POST['rp']);

// desde donde comenzar
$start = (($page-1) * $rp);

// limite de registros a mostrar
$limit = "LIMIT $start, $rp";

// arrmamos un array con los datos a codificar
$arrDatos = array('page' => $page,'total' => $total);

// consulta general
$result = mysql_query("SELECT *
FROM maestros $where $sort $limit");
while ($row = mysql_fetch_assoc($result)) {   
$arrDatos['rows'][] = array(     
'id' => $row['id'],     
'cell' => array(        
/*$row['id'],*/
$row['nombre'],
$row['apellidos'],   
$row['rfc'],
$row['curp'],
$row['sexo'],
$row['grado'],
$row['municipio'],
$row['localidad'],
$row['cedeprom'],
$row['nivel'],
$row['modalidad'],
$row['cct'],
$row['telefono'],
$row['email'],
$row['comentarios'], 
)  
);
}

// pasamos el array a formato json
echo json_encode($arrDatos);

// cerramos la conexion
mysql_close($conex);
?>