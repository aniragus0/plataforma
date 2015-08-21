<?php
$con=mysql_connect("localhost","root","root");
$bd=mysql_select_db("unedeprom");



//Convierto los acentos a HTML
function acento($entra)
{
$traduce=array( 'á' => '&aacute;' , 'é' => '&eacute;' , 'í' => '&iacute;' , 'ó' => '&oacute;' , 'ú' => '&uacute;' , 'ñ' => '&ntilde;' , 'Ñ' => '&Ntilde;' , 'ä' => '&auml;' , 'ë' => '&euml;' , 'ï' => '&iuml;' , 'ö' => '&ouml;' , 'ü' => '&uuml;');
$sale=strtr( $entra , $traduce );
return $sale;
}

?>